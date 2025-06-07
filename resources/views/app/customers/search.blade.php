<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Customers - Rose Tailoring</title>
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
            <h1 class="text-2xl sm:text-3xl font-serif font-bold text-gray-800 mb-2">Search Customers</h1>
            <p class="text-gray-600">Find customers by name, phone number, or email address</p>
        </div>

        <!-- Search Form -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 mb-8">
            <div class="p-6">
                <form action="{{ route('customers.search') }}" method="GET" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <!-- Search Query -->
                        <div class="md:col-span-2">
                            <label for="query" class="block text-sm font-medium text-gray-700 mb-2">
                                Search Query
                            </label>
                            <input type="text" name="query" id="query"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent"
                                placeholder="Enter name, phone, or email..."
                                value="{{ $query ?? '' }}">
                        </div>

                        <!-- Search Type -->
                        <div>
                            <label for="search_type" class="block text-sm font-medium text-gray-700 mb-2">
                                Search By
                            </label>
                            <select name="search_type" id="search_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-peach-500 focus:border-transparent">
                                <option value="all">All Fields</option>
                                <option value="name">Name</option>
                                <option value="phone">Phone</option>
                                <option value="email">Email</option>
                                <option value="address">Address</option>
                            </select>
                        </div>

                        <!-- Search Button -->
                        <div class="flex items-end">
                            <button type="submit" 
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Search Results -->
        @if(isset($query) && $query !== '')
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Search Results</h3>
                            <p class="text-sm text-gray-600 mt-1">Searching for: "<strong>{{ $query }}</strong>"</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">0 results found</span>
                        </div>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Orders</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- No Results State -->
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg class="w-12 h-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">No customers found</h3>
                                        <p class="text-gray-500 mb-4">Try adjusting your search terms or search criteria.</p>
                                        <div class="flex space-x-3">
                                            <a href="{{ route('customers.search') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium rounded-lg transition-colors">
                                                Clear Search
                                            </a>
                                            <a href="{{ route('customers.create') }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                Add New Customer
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <!-- Search Tips -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
                <div class="p-8 text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Search for Customers</h3>
                    <p class="text-gray-600 mb-6">Enter a search term above to find customers in your database</p>
                    
                    <div class="max-w-2xl mx-auto">
                        <h4 class="text-sm font-medium text-gray-900 mb-3">Search Tips:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-peach-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Search by full or partial names</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-peach-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Use phone numbers without spaces</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-peach-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Search by email addresses</span>
                            </div>
                            <div class="flex items-start space-x-2">
                                <svg class="w-4 h-4 text-peach-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Filter by specific field types</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Quick Actions -->
        <div class="mt-8 bg-gradient-to-r from-peach-50 to-rose-50 border border-peach-200 rounded-xl p-6">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h4 class="text-lg font-medium text-peach-800 mb-2">Quick Actions</h4>
                    <p class="text-sm text-peach-700">Common customer management tasks</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="{{ route('customers.index') }}" class="inline-flex items-center justify-center px-4 py-2 bg-white border border-peach-200 text-peach-700 text-sm font-medium rounded-lg hover:bg-peach-50 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        View All Customers
                    </a>
                    <a href="{{ route('customers.create') }}" class="inline-flex items-center justify-center px-4 py-2 bg-gradient-to-r from-peach-500 to-rose-500 hover:from-peach-600 hover:to-rose-600 text-white text-sm font-medium rounded-lg transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add New Customer
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
