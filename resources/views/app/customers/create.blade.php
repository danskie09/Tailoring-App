<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer - Rose Tailoring</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=playfair-display:400,600,700" rel="stylesheet" />
    @include('app.partials.tailwind-config')
</head>

<body class="bg-gray-50 font-sans">
    @include('app.partials.header')

    <!-- Page Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 py-6 sm:py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <div class="flex items-center space-x-3 mb-4">
                <a href="{{ route('customers.index') }}" class="inline-flex items-center text-sm text-gray-500 hover:text-gray-700 transition-colors">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Back to Customers
                </a>
            </div>
            <h1 class="text-2xl sm:text-3xl font-serif font-bold text-gray-800 mb-2">Add New Customer</h1>
            <p class="text-gray-600">Create a new customer profile with their contact details</p>
        </div>

        <!-- Customer Form -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold text-gray-800">Customer Information</h3>
                <p class="text-sm text-gray-600 mt-1">Fill in the customer's basic information below.</p>
            </div>
            
            <form action="{{ route('customers.store') }}" method="POST" class="p-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Name -->
                    <div class="md:col-span-2">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent"
                            placeholder="Enter customer's full name">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" name="phone" id="phone" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent"
                            placeholder="+63 912 345 6789">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent"
                            placeholder="customer@example.com">
                    </div>

                    <!-- Address -->
                    <div class="md:col-span-2">
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                            Address <span class="text-red-500">*</span>
                        </label>
                        <textarea name="address" id="address" rows="3" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent resize-none"
                            placeholder="Enter complete address"></textarea>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-end gap-3 mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('customers.index') }}" 
                        class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors">
                        Cancel
                    </a>
                    <button type="submit" 
                        class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Create Customer
                    </button>
                </div>
            </form>
        </div>

        <!-- Help Text -->
        <div class="mt-6 bg-gradient-to-r from-peach-50 to-rose-50 border border-peach-200 rounded-xl p-4">
            <div class="flex items-start">
                <svg class="w-5 h-5 text-peach-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                    <h4 class="text-sm font-medium text-peach-800 mb-1">Customer Information Tips</h4>
                    <div class="text-sm text-peach-700 space-y-1">
                        <p>• Ensure phone numbers are accurate for order updates</p>
                        <p>• Email is optional but helpful for digital receipts</p>
                        <p>• Complete address helps with delivery coordination</p>
                        <p>• You can always edit customer information later</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
