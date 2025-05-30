<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TailorCraft - Premium Tailoring Services</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-gray-900">TailorCraft</h1>
                </div>

                @if (Route::has('login'))
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md font-medium">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
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
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Perfect Fit, <span class="text-yellow-300">Perfect Style</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    Professional tailoring services for the modern wardrobe
                </p>
                @guest
                    <div class="space-x-4">
                        <a href="{{ route('register') }}"
                            class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-300 transition">
                            Book Appointment
                        </a>
                        <a href="#services"
                            class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                            Our Services
                        </a>
                    </div>
                @else
                    <a href="{{ url('/dashboard') }}"
                        class="bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-300 transition">
                        Go to Dashboard
                    </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-xl text-gray-600">Expert craftsmanship for every occasion</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-lg border border-gray-200 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Custom Suits</h3>
                    <p class="text-gray-600">Bespoke suits tailored to your exact measurements and style preferences.
                    </p>
                </div>

                <div class="text-center p-8 rounded-lg border border-gray-200 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a4 4 0 004-4V5z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Alterations</h3>
                    <p class="text-gray-600">Professional alterations to make your existing garments fit perfectly.</p>
                </div>

                <div class="text-center p-8 rounded-lg border border-gray-200 hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Express Service</h3>
                    <p class="text-gray-600">Quick turnaround for urgent tailoring needs without compromising quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Why Choose TailorCraft?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1 mr-4">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Expert Craftsmanship</h3>
                                <p class="text-gray-600">Over 20 years of experience in professional tailoring</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1 mr-4">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Premium Materials</h3>
                                <p class="text-gray-600">Only the finest fabrics and materials for lasting quality</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center mt-1 mr-4">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Perfect Fit Guarantee</h3>
                                <p class="text-gray-600">We ensure every garment fits you perfectly or we'll make it
                                    right</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8">
                    <h3 class="text-2xl font-bold mb-6 text-center">Book Your Appointment</h3>
                    @guest
                        <p class="text-gray-600 mb-6 text-center">Create an account to schedule your tailoring consultation
                        </p>
                        <div class="space-y-4">
                            <a href="{{ route('register') }}"
                                class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition text-center block">
                                Sign Up Now
                            </a>
                            <a href="{{ route('login') }}"
                                class="w-full border border-gray-300 text-gray-700 py-3 px-4 rounded-lg hover:bg-gray-50 transition text-center block">
                                Already have an account?
                            </a>
                        </div>
                    @else
                        <p class="text-gray-600 mb-6 text-center">Welcome back! Ready to schedule your next appointment?
                        </p>
                        <a href="{{ url('/dashboard') }}"
                            class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 transition text-center block">
                            Go to Dashboard
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">TailorCraft</h3>
                    <p class="text-gray-400">Professional tailoring services for the modern wardrobe. Quality
                        craftsmanship since 2003.</p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Custom Suits</li>
                        <li>Alterations</li>
                        <li>Express Service</li>
                        <li>Wedding Attire</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <div class="text-gray-400 space-y-2">
                        <p>123 Fashion Street</p>
                        <p>City, State 12345</p>
                        <p>Phone: (555) 123-4567</p>
                        <p>Email: info@tailorcraft.com</p>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} TailorCraft. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>
