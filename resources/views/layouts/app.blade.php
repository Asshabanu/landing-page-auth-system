<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Find your perfect home with our advanced search filters and intuitive interface">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fonts & Icons --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }
        .btn-primary {
            background-color: var(--primary);
            color: white;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
        }
        .text-gradient {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="font-sans text-gray-900">
    <div class="min-h-screen flex flex-col">

        <!-- Navbar -->
        <nav class="bg-white shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">

                    <!-- Brand -->
                    <div class="flex items-center">
                        <a href="{{ url('/') }}" class="text-xl font-bold flex items-center text-gray-900">
                            <i class="fas fa-home mr-2 text-blue-600"></i>
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex items-center space-x-6">
                        <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600">Home</a>
                        <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600">About</a>
                        <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-600">Contact</a>

                        <!-- Authentication Links -->
                        @guest
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
                            @endif
                        @else
                            <!-- User Dropdown -->
                            <div class="relative">
                                <button id="user-menu-button" type="button" class="flex items-center text-sm rounded-full focus:outline-none">
                                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                        <span class="text-blue-800 font-medium">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                </button>

                                <!-- Dropdown Menu -->
                                <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white border border-gray-200">
                                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                    <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t mt-6 py-4 text-center text-sm text-gray-600">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </footer>
    </div>

    {{-- User Dropdown Script --}}
    <script>
        const userBtn = document.getElementById('user-menu-button');
        const dropdown = document.getElementById('user-dropdown');

        if (userBtn && dropdown) {
            userBtn.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!userBtn.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>
