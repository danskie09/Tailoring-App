<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Rose Tailoring</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=playfair-display:400,600,700" rel="stylesheet" />
    @include('app.partials.tailwind-config')
</head>

<body class="bg-gray-50 font-sans">
    @include('app.partials.header')

    <!-- Dashboard Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-6 sm:py-8">
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-serif font-bold text-gray-800 mb-2">Welcome back!</h1>
            <p class="text-gray-600">Manage your tailoring business with ease</p>
        </div>

        <!-- Quick Stats -->
        @include('app.partials.stats')

        <!-- Dashboard Modules -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Customers Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-peach-400 to-rose-400 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Customers</h3>
                                <p class="text-sm text-gray-500">Manage client profiles</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-peach-50 to-rose-50 hover:from-peach-100 hover:to-rose-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">View All Customers</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Add New Customer</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Search Customers</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Orders Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-400 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Orders</h3>
                                <p class="text-sm text-gray-500">Track all work orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">All Orders</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Create New Order</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Pending Orders</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Due Today</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Measurements Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-400 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2M9 3h6a2 2 0 012 2v12a4 4 0 01-4 4H9"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Measurements</h3>
                                <p class="text-sm text-gray-500">Client measurements</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">View Measurements</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Record New</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Update Existing</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Payments Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-violet-400 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Payments</h3>
                                <p class="text-sm text-gray-500">Financial tracking</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-purple-50 to-violet-50 hover:from-purple-100 hover:to-violet-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Payment History</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Record Payment</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Pending Payments</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fitting Sessions Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-red-400 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V6a2 2 0 012-2h4a2 2 0 012 2v1m-6 0h8m-8 0h8v12a2 2 0 01-2 2H10a2 2 0 01-2-2V7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Fittings</h3>
                                <p class="text-sm text-gray-500">Schedule & track fittings</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-orange-50 to-red-50 hover:from-orange-100 hover:to-red-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">All Fittings</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Schedule Fitting</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Today's Fittings</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Reports Module -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 hover:shadow-lg transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-gray-400 to-gray-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">Reports</h3>
                                <p class="text-sm text-gray-500">Business insights</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gradient-to-r from-gray-50 to-gray-100 hover:from-gray-100 hover:to-gray-200 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Sales Report</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Customer Report</span>
                        </a>
                        <a href="#" class="block w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors">
                            <span class="text-sm font-medium text-gray-800">Order Status</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        @include('app.partials.recent-activity')
    </main>
</body>

</html>
