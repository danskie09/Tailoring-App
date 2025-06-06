<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Rose Tailoring</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:300,400,500,600,700&family=playfair-display:400,500,600,700" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        peach: {
                            50: '#fef7f0',
                            100: '#fdeee1',
                            200: '#fad9c7',
                            300: '#f6bfa2',
                            400: '#f19e7b',
                            500: '#ec7f59',
                            600: '#de6347',
                            700: '#c44d3d',
                            800: '#9d4038',
                            900: '#7f3732',
                        },
                        rose: {
                            50: '#fdf2f8',
                            100: '#fce7f3',
                            200: '#fbcfe8',
                            300: '#f9a8d4',
                            400: '#f472b6',
                            500: '#ec4899',
                            600: '#db2777',
                            700: '#be185d',
                            800: '#9d174d',
                            900: '#831843',
                        }
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'playfair': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="font-poppins antialiased">
    <div class="min-h-screen flex">
        <!-- Left Side - Brand/Image (Hidden on mobile) -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-peach-50 to-peach-100 relative overflow-hidden">
            <!-- Rose Pattern Background -->
            <div class="absolute inset-0 opacity-5">
                <svg class="w-full h-full" viewBox="0 0 400 400" fill="none">
                    <defs>
                        <pattern id="rosePattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                            <g fill="currentColor" class="text-rose-500">
                                <path d="M50 30c-8.284 0-15 6.716-15 15 0 8.284-6.716 15-15 15s-15-6.716-15-15c0-8.284 6.716-15 15-15s15-6.716 15-15c0-8.284 6.716-15 15-15s15 6.716 15 15c0 8.284-6.716 15-15 15z"/>
                            </g>
                        </pattern>
                    </defs>
                    <rect width="400" height="400" fill="url(#rosePattern)"/>
                </svg>
            </div>
            
            <!-- Content -->
            <div class="relative z-10 flex flex-col justify-center items-center w-full px-12">
                <!-- Large Rose Heart -->
                <div class="mb-8">
                    <svg class="w-32 h-32 text-rose-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                
                <!-- Brand Text -->
                <div class="text-center">
                    <h1 class="text-4xl font-playfair font-bold text-gray-800 mb-4">Rose Tailoring</h1>
                    <p class="text-gray-600 text-lg leading-relaxed max-w-md">
                        Where every stitch tells a story and every garment is crafted with love and precision.
                    </p>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute top-10 left-10 text-rose-300">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <div class="absolute bottom-20 right-16 text-peach-400">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <div class="absolute top-1/3 right-8 text-rose-200">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Right Side - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 bg-white relative">
            <div class="w-full max-w-md">
                <!-- Mobile Brand Header -->
                <div class="lg:hidden text-center mb-8">
                    <div class="flex justify-center mb-4">
                        <svg class="w-16 h-16 text-rose-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-playfair font-bold text-gray-800">Rose Tailoring</h1>
                    <p class="text-gray-600 text-sm mt-2">Crafted with love</p>
                </div>

                <div class="text-center mb-8">
                    <h2 class="text-2xl sm:text-3xl font-playfair font-bold text-gray-800 mb-2">Create Account</h2>
                    <p class="text-gray-600">Join our community of style enthusiasts</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Full Name
                        </label>
                        <input id="name" 
                               type="text" 
                               name="name" 
                               value="{{ old('name') }}" 
                               required 
                               autofocus 
                               autocomplete="name"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-peach-500 focus:border-peach-500 transition-colors @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address
                        </label>
                        <input id="email" 
                               type="email" 
                               name="email" 
                               value="{{ old('email') }}" 
                               required 
                               autocomplete="username"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-peach-500 focus:border-peach-500 transition-colors @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <input id="password" 
                               type="password" 
                               name="password" 
                               required 
                               autocomplete="new-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-peach-500 focus:border-peach-500 transition-colors @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                            Confirm Password
                        </label>
                        <input id="password_confirmation" 
                               type="password" 
                               name="password_confirmation" 
                               required 
                               autocomplete="new-password"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-peach-500 focus:border-peach-500 transition-colors @error('password_confirmation') border-red-500 @enderror">
                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" 
                                   type="checkbox" 
                                   required
                                   class="w-4 h-4 text-peach-600 bg-gray-100 border-gray-300 rounded focus:ring-peach-500 focus:ring-2">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="text-gray-700">
                                I agree to the 
                                <a href="#" class="text-peach-600 hover:text-peach-700 font-medium">Terms and Conditions</a> 
                                and 
                                <a href="#" class="text-peach-600 hover:text-peach-700 font-medium">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <!-- Register Button -->
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-peach-500 to-rose-500 text-white py-3 px-4 rounded-lg font-medium hover:from-peach-600 hover:to-rose-600 focus:outline-none focus:ring-2 focus:ring-peach-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 shadow-lg">
                        Create Account
                    </button>
                </form>

                <!-- Login Link -->
                <div class="mt-8 text-center">
                    <p class="text-gray-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="text-peach-600 hover:text-peach-700 font-medium">Sign in</a>
                    </p>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute top-4 right-4 text-rose-200 opacity-50">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
