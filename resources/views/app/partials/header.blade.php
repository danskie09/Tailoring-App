<!-- Header -->
<header class="bg-white shadow-sm border-b border-peach-100 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-3">
                <!-- Rose Icon -->
                <div class="w-10 h-10 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-xl sm:text-2xl font-serif font-bold text-gray-800">Rose Tailoring</h1>
                    <p class="text-xs text-gray-500 hidden sm:block">Dashboard</p>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <!-- Quick Actions -->
                <div class="hidden md:flex items-center space-x-2">
                    <a href="#" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-peach-600 transition-colors">
                        Quick Order
                    </a>
                    <a href="#" class="px-3 py-2 text-sm font-medium text-gray-600 hover:text-peach-600 transition-colors">
                        Add Customer
                    </a>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name ?? 'User' }}</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <div class="w-8 h-8 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name ?? 'U', 0, 1) }}</span>
                    </div>
                    
                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-gray-700 transition-colors ml-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
