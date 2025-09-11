<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'DreamHome' }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center font-bold text-blue-600 text-xl">
                        <i class="fas fa-home mr-2"></i> DreamHome
                    </a>
                    <div class="hidden md:flex space-x-4 ml-6">
                        <a href="{{ route('user.dashboard') }}" class="{{ request()->is('user/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Dashboard</a>
                        <a href="{{ route('user.properties') }}" class="{{ request()->is('user/properties*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Properties</a>
                        <a href="{{ route('user.bookings') }}" class="{{ request()->is('user/bookings*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Bookings</a>
                        <a href="{{ route('user.earnings') }}" class="{{ request()->is('user/earnings*') ? 'text-blue-600 font-semibold' : 'text-gray-700 hover:text-blue-600' }}">Earnings</a>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Login</a>
                        @if(Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-blue-600">Register</a>
                        @endif
                    @else
                        <div class="relative">
                            <button type="button" class="flex items-center space-x-2 focus:outline-none" id="userMenuButton">
                                <span>{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-gray-600"></i>
                            </button>
                            <div class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg z-50" id="userDropdown">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</button>
                                </form>
                            </div>
                        </div>
                        <script>
                            const btn = document.getElementById('userMenuButton');
                            const dropdown = document.getElementById('userDropdown');
                            btn.addEventListener('click', () => {
                                dropdown.classList.toggle('hidden');
                            });
                        </script>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} DreamHome. All rights reserved.</p>
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="#" class="text-gray-500 hover:text-blue-600 text-sm">Privacy Policy</a>
                <span class="text-gray-400">|</span>
                <a href="#" class="text-gray-500 hover:text-blue-600 text-sm">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
