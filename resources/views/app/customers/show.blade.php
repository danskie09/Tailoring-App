<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Details - Rose Tailoring</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=playfair-display:400,600,700" rel="stylesheet" />
    @include('app.partials.tailwind-config')
</head>

<body class="bg-gray-50 font-sans">
    @include('app.partials.header')

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-6 sm:py-8">
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
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-gray-800 mb-2">Customer Details</h1>
                    <p class="text-gray-600">View and manage customer information</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="{{ route('customers.edit', $id) }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Customer
                    </a>
                    <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        New Order
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Customer Information -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
                    <!-- Customer Card Header -->
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center">
                                <span class="text-white text-xl font-bold">CU</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Customer Name</h3>
                                <p class="text-sm text-gray-600">Customer ID: #{{ $id }}</p>
                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 mt-1">
                                    Active
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="p-6">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Contact Information</h4>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-sm text-gray-600">Phone number will appear here</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                                <span class="text-sm text-gray-600">Email will appear here</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-4 h-4 text-gray-400 mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-sm text-gray-600">Address will appear here</span>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Stats -->
                    <div class="p-6 border-t border-gray-200">
                        <h4 class="text-sm font-medium text-gray-900 mb-4">Customer Stats</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-center">
                                <p class="text-2xl font-bold text-gray-800">0</p>
                                <p class="text-xs text-gray-600">Total Orders</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold text-gray-800">₱0</p>
                                <p class="text-xs text-gray-600">Total Spent</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders & Activity -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Recent Orders -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Orders</h3>
                            <button class="inline-flex items-center px-3 py-2 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                New Order
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Empty State -->
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <h4 class="text-lg font-medium text-gray-900 mb-2">No orders yet</h4>
                            <p class="text-gray-500 mb-4">This customer hasn't placed any orders yet.</p>
                            <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                                Create First Order
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Measurements -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-800">Measurements</h3>
                            <button class="inline-flex items-center px-3 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Add Measurements
                            </button>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <!-- Empty State -->
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h6a2 2 0 012 2v12a4 4 0 01-4 4H9"></path>
                            </svg>
                            <h4 class="text-lg font-medium text-gray-900 mb-2">No measurements recorded</h4>
                            <p class="text-gray-500 mb-4">Add customer measurements for better fitting orders.</p>
                            <button class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition-colors">
                                Record Measurements
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
