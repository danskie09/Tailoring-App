<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     */
    public function index()
    {
        return view('app.customers.index');
    }

    /**
     * Show the form for creating a new customer.
     */
    public function create()
    {
        return view('app.customers.create');
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(Request $request)
    {
        // TODO: Implement customer creation logic
        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified customer.
     */
    public function show($id)
    {
        return view('app.customers.show', compact('id'));
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit($id)
    {
        return view('app.customers.edit', compact('id'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(Request $request, $id)
    {
        // TODO: Implement customer update logic
        return redirect()->route('customers.show', $id)->with('success', 'Customer updated successfully.');
    }

    /**
     * Remove the specified customer from storage.
     */
    public function destroy($id)
    {
        // TODO: Implement customer deletion logic
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }

    /**
     * Search customers.
     */
    public function search(Request $request)
    {
        $query = $request->get('query');
        return view('app.customers.search', compact('query'));
    }
}
