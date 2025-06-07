<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    /**
     * Display a listing of customers.
     */
    public function index(Request $request): View
    {
        $query = Customer::query();
        
        // Only eager load relationships if the tables exist and have data
        if (class_exists('App\Models\Order') && class_exists('App\Models\Measurement')) {
            $query->with(['orders', 'measurements']);
        }
        
        // Handle search
        if ($request->filled('search')) {
            $query->search($request->search);
        }
        
        // Handle sorting
        $sortBy = $request->get('sort', 'name');
        $sortDirection = $request->get('direction', 'asc');
        
        $allowedSorts = ['name', 'phone', 'email', 'created_at'];
        if (in_array($sortBy, $allowedSorts)) {
            $query->orderBy($sortBy, $sortDirection);
        }
        
        $customers = $query->paginate(15)->withQueryString();
        
        // Get stats safely
        $stats = [
            'total_customers' => Customer::count(),
            'new_this_month' => Customer::whereMonth('created_at', now()->month)->count(),
            'with_orders' => 0,
            'active_customers' => 0,
        ];
        
        // Only calculate order-related stats if Order model exists
        if (class_exists('App\Models\Order')) {
            try {
                $stats['with_orders'] = Customer::has('orders')->count();
                $stats['active_customers'] = Customer::whereHas('orders', function($q) {
                    $q->where('created_at', '>=', now()->subMonths(3));
                })->count();
            } catch (\Exception $e) {
                // If orders table doesn't exist yet, keep defaults
            }
        }
        
        return view('app.customers.index', compact('customers', 'stats'));
    }

    /**
     * Show the form for creating a new customer.
     */
    public function create(): View
    {
        return view('app.customers.create');
    }

    /**
     * Store a newly created customer.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:customers,phone',
            'email' => 'nullable|email|max:255|unique:customers,email',
            'address' => 'required|string|max:500',
        ], [
            'name.required' => 'Customer name is required.',
            'phone.required' => 'Phone number is required.',
            'phone.unique' => 'This phone number is already registered.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',
            'address.required' => 'Address is required.',
        ]);

        try {
            $customer = Customer::create($validated);
            
            Log::info('New customer created', ['customer_id' => $customer->id, 'name' => $customer->name]);
            
            return redirect()
                ->route('customers.show', $customer)
                ->with('success', 'Customer created successfully!');
                
        } catch (\Exception $e) {
            Log::error('Error creating customer', ['error' => $e->getMessage()]);
            
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create customer. Please try again.');
        }
    }

    /**
     * Display the specified customer.
     */
    public function show(Customer $customer): View
    {
        $customer->load([
            'orders' => function($query) {
                $query->latest()->take(5);
            },
            'measurements' => function($query) {
                $query->latest('measurement_date')->take(3);
            }
        ]);
        
        // Load payments separately to handle the case where customer has no orders
        $recentPayments = collect();
        if ($customer->orders()->exists()) {
            $recentPayments = $customer->payments()->latest()->take(5)->get();
        }
        
        $stats = [
            'total_orders' => $customer->orders()->count(),
            'pending_orders' => $customer->orders()->where('status', 'pending')->count(),
            'completed_orders' => $customer->orders()->where('status', 'completed')->count(),
            'total_spent' => $customer->orders()->sum('total_price') ?? 0,
        ];
        
        return view('app.customers.show', compact('customer', 'stats', 'recentPayments'));
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit(Customer $customer): View
    {
        return view('app.customers.edit', compact('customer'));
    }

    /**
     * Update the specified customer.
     */
    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20|unique:customers,phone,' . $customer->id,
            'email' => 'nullable|email|max:255|unique:customers,email,' . $customer->id,
            'address' => 'required|string|max:500',
        ], [
            'name.required' => 'Customer name is required.',
            'phone.required' => 'Phone number is required.',
            'phone.unique' => 'This phone number is already registered.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',
            'address.required' => 'Address is required.',
        ]);

        try {
            $customer->update($validated);
            
            Log::info('Customer updated', ['customer_id' => $customer->id, 'name' => $customer->name]);
            
            return redirect()
                ->route('customers.show', $customer)
                ->with('success', 'Customer updated successfully!');
                
        } catch (\Exception $e) {
            Log::error('Error updating customer', ['customer_id' => $customer->id, 'error' => $e->getMessage()]);
            
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update customer. Please try again.');
        }
    }

    /**
     * Remove the specified customer.
     */
    public function destroy(Customer $customer): RedirectResponse
    {
        try {
            // Check if customer has orders
            if ($customer->orders()->count() > 0) {
                return redirect()
                    ->back()
                    ->with('error', 'Cannot delete customer with existing orders. Please archive or transfer orders first.');
            }
            
            $customerName = $customer->name;
            $customer->delete();
            
            Log::info('Customer deleted', ['customer_name' => $customerName]);
            
            return redirect()
                ->route('customers.index')
                ->with('success', "Customer '{$customerName}' has been deleted successfully.");
                
        } catch (\Exception $e) {
            Log::error('Error deleting customer', ['customer_id' => $customer->id, 'error' => $e->getMessage()]);
            
            return redirect()
                ->back()
                ->with('error', 'Failed to delete customer. Please try again.');
        }
    }

    /**
     * Search customers with advanced filters.
     */
    public function search(Request $request): View
    {
        $query = Customer::query()->with(['orders', 'measurements']);
        $customers = collect();
        $hasSearch = false;
        
        if ($request->filled('search') || $request->filled('phone') || $request->filled('email')) {
            $hasSearch = true;
            
            if ($request->filled('search')) {
                $query->search($request->search);
            }
            
            if ($request->filled('phone')) {
                $query->where('phone', 'LIKE', '%' . $request->phone . '%');
            }
            
            if ($request->filled('email')) {
                $query->where('email', 'LIKE', '%' . $request->email . '%');
            }
            
            // Date range filter
            if ($request->filled('date_from')) {
                $query->whereDate('created_at', '>=', $request->date_from);
            }
            
            if ($request->filled('date_to')) {
                $query->whereDate('created_at', '<=', $request->date_to);
            }
            
            // Order status filter
            if ($request->filled('has_orders')) {
                if ($request->has_orders === 'yes') {
                    $query->has('orders');
                } else {
                    $query->doesntHave('orders');
                }
            }
            
            $customers = $query->orderBy('name')->get();
        }
        
        return view('app.customers.search', compact('customers', 'hasSearch'));
    }
}
