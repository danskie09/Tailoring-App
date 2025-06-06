<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rose Tailoring - Expert Tailoring Services</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=playfair-display:400,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'peach': {
                            50: '#fef7f0',
                            100: '#fdede0',
                            200: '#fad8c1',
                            300: '#f7c2a2',
                            400: '#f4a583',
                            500: '#f18c69',
                            600: '#eb6f47',
                            700: '#d65532',
                            800: '#b3452a',
                            900: '#933a26'
                        },
                        'rose': {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843'
                        }
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-peach-100 sticky top-0 z-50">
        <nav class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <!-- Rose Icon -->
                    <div class="w-10 h-10 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-serif font-bold text-gray-800">Rose Tailoring</h1>
                </div>

                @if (Route::has('login'))
                    <div class="flex items-center space-x-2 sm:space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="bg-peach-500 text-white px-3 py-2 sm:px-4 rounded-full hover:bg-peach-600 transition-colors text-sm font-medium">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-gray-600 hover:text-peach-600 px-2 py-2 sm:px-3 rounded-md font-medium text-sm">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-peach-500 text-white px-3 py-2 sm:px-4 rounded-full hover:bg-peach-600 transition-colors text-sm font-medium">
                                    Get Started
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-peach-50 via-white to-rose-50 relative overflow-hidden">
        <!-- Rose Pattern Background -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 left-10 w-20 h-20 text-rose-300">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
            <div class="absolute top-32 right-16 w-16 h-16 text-peach-300">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
            <div class="absolute bottom-20 left-20 w-12 h-12 text-rose-200">
                <svg fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
        </div>
        
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-16 sm:py-20 lg:py-24 relative">
            <div class="text-center">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif font-bold mb-4 sm:mb-6 text-gray-800 leading-tight">
                    Crafted with <span class="text-peach-500">Love</span>,<br class="hidden sm:block">
                    Tailored to <span class="text-rose-500">Perfection</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl mb-6 sm:mb-8 text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Expert tailoring services for custom suits, alterations, uniforms, and more. Your perfect fit awaits.
                </p>
                
                @guest
                    <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center max-w-md mx-auto">
                        <a href="{{ route('register') }}"
                            class="w-full sm:w-auto bg-peach-500 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-medium hover:bg-peach-600 transition-colors shadow-lg">
                            Book Appointment
                        </a>
                        <a href="#services"
                            class="w-full sm:w-auto border-2 border-peach-500 text-peach-600 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-medium hover:bg-peach-50 transition-colors">
                            View Services
                        </a>
                    </div>
                @else
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block bg-peach-500 text-white px-8 py-4 rounded-full font-medium hover:bg-peach-600 transition-colors shadow-lg">
                        Go to Dashboard
                    </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-12 sm:py-16 lg:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-10 sm:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-3 sm:mb-4">Our Services</h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-600">Expert craftsmanship for every occasion</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                <!-- Custom & Suits -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Custom Suits</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Bespoke suits tailored to your exact measurements and style preferences.</p>
                </div>

                <!-- Alterations -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Alterations</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Professional alterations to make your existing garments fit perfectly.</p>
                </div>

                <!-- Uniforms -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Uniforms</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">School and work uniforms made with precision and quality materials.</p>
                </div>

                <!-- Repairs -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Repairs</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Expert repairs for zippers, tears, and other garment issues.</p>
                </div>

                <!-- Curtains -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2v2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Curtains</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Custom curtains and home textiles for your living spaces.</p>
                </div>

                <!-- Express Service -->
                <div class="text-center p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-peach-50 to-rose-50 border border-peach-100 hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-semibold mb-2 sm:mb-3 text-gray-800">Express Service</h3>
                    <p class="text-sm sm:text-base text-gray-600 leading-relaxed">Quick turnaround for urgent tailoring needs without compromising quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 sm:py-16 lg:py-20 bg-gradient-to-br from-peach-50 via-white to-rose-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-4 sm:mb-6">Why Choose Rose Tailoring?</h2>
                    <div class="space-y-4 sm:space-y-6">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-base sm:text-lg text-gray-800 mb-1">Expert Craftsmanship</h3>
                                <p class="text-sm sm:text-base text-gray-600">Over 20 years of experience in professional tailoring</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-base sm:text-lg text-gray-800 mb-1">Premium Materials</h3>
                                <p class="text-sm sm:text-base text-gray-600">Only the finest fabrics and materials for lasting quality</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-base sm:text-lg text-gray-800 mb-1">Perfect Fit Guarantee</h3>
                                <p class="text-sm sm:text-base text-gray-600">We ensure every garment fits you perfectly or we'll make it right</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mt-1 mr-4 flex-shrink-0">
                                <svg class="w-3 h-3 sm:w-4 sm:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-base sm:text-lg text-gray-800 mb-1">Mobile-Friendly Service</h3>
                                <p class="text-sm sm:text-base text-gray-600">Easy booking and order tracking from your phone</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 border border-peach-100">
                        <div class="text-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-serif font-bold mb-2 text-gray-800">Book Your Appointment</h3>
                        </div>
                        
                        @guest
                            <p class="text-sm sm:text-base text-gray-600 mb-6 text-center">Create an account to schedule your tailoring consultation</p>
                            <div class="space-y-3 sm:space-y-4">
                                <a href="{{ route('register') }}"
                                    class="w-full bg-peach-500 text-white py-3 px-4 rounded-full hover:bg-peach-600 transition-colors text-center block font-medium">
                                    Sign Up Now
                                </a>
                                <a href="{{ route('login') }}"
                                    class="w-full border-2 border-peach-200 text-peach-600 py-3 px-4 rounded-full hover:bg-peach-50 transition-colors text-center block font-medium">
                                    Already have an account?
                                </a>
                            </div>
                        @else
                            <p class="text-sm sm:text-base text-gray-600 mb-6 text-center">Welcome back! Ready to schedule your next appointment?</p>
                            <a href="{{ url('/dashboard') }}"
                                class="w-full bg-peach-500 text-white py-3 px-4 rounded-full hover:bg-peach-600 transition-colors text-center block font-medium">
                                Go to Dashboard
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 sm:py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-peach-400 to-rose-400 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-serif font-bold">Rose Tailoring</h3>
                    </div>
                    <p class="text-sm sm:text-base text-gray-300 leading-relaxed">Expert tailoring services crafted with love and precision. Your perfect fit awaits.</p>
                </div>

                <div>
                    <h4 class="font-semibold text-base sm:text-lg mb-3 sm:mb-4 text-peach-300">Services</h4>
                    <ul class="space-y-2 text-sm sm:text-base text-gray-300">
                        <li>Custom Suits</li>
                        <li>Alterations</li>
                        <li>Uniforms</li>
                        <li>Repairs</li>
                        <li>Curtains</li>
                        <li>Express Service</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-base sm:text-lg mb-3 sm:mb-4 text-peach-300">Quick Links</h4>
                    <ul class="space-y-2 text-sm sm:text-base text-gray-300">
                        @guest
                            <li><a href="{{ route('register') }}" class="hover:text-peach-300 transition-colors">Book Appointment</a></li>
                            <li><a href="{{ route('login') }}" class="hover:text-peach-300 transition-colors">Login</a></li>
                        @else
                            <li><a href="{{ url('/dashboard') }}" class="hover:text-peach-300 transition-colors">Dashboard</a></li>
                        @endguest
                        <li><a href="#services" class="hover:text-peach-300 transition-colors">Our Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-6 sm:mt-8 pt-6 sm:pt-8 text-center">
                <p class="text-sm sm:text-base text-gray-400">&copy; {{ date('Y') }} Rose Tailoring. Crafted with 
                    <span class="text-rose-400">♥</span> for the perfect fit.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
