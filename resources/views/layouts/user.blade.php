<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'DreamHome User Dashboard' }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans text-gray-800">
    
    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-white shadow-md z-50 transform -translate-x-full lg:translate-x-0 transition-transform overflow-y-auto">
        <div class="h-16 flex items-center justify-center bg-blue-800 text-white font-semibold text-lg">
            <i class="fas fa-home mr-2"></i> DreamHome
        </div>
        <nav class="mt-4 px-2">
            <a href="{{ route('user.dashboard') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.dashboard') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-tachometer-alt w-5"></i>
                <span class="ml-3">Dashboard</span>
            </a>
            <a href="{{ route('user.properties') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.properties*') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-home w-5"></i>
                <span class="ml-3">My Properties</span>
            </a>
            <a href="{{ route('user.bookings') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.bookings*') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-calendar-check w-5"></i>
                <span class="ml-3">My Bookings</span>
            </a>
            <a href="{{ route('user.reviews') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.reviews*') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-star w-5"></i>
                <span class="ml-3">Reviews</span>
            </a>
            <a href="{{ route('user.earnings') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.earnings*') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-wallet w-5"></i>
                <span class="ml-3">Earnings</span>
            </a>
            <a href="{{ route('user.profile') }}" class="flex items-center p-3 rounded-lg mb-1 hover:bg-gray-100 {{ request()->routeIs('user.profile') ? 'bg-gray-100 border-l-4 border-blue-600 text-blue-600' : 'text-gray-800' }}">
                <i class="fas fa-user w-5"></i>
                <span class="ml-3">My Profile</span> 
            </a>
            <form action="{{ route('logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="flex items-center p-3 w-full text-left rounded-lg hover:bg-gray-100 text-gray-800">
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <span class="ml-3">Logout</span>
                </button>
            </form>
        </nav>
    </aside>
    <!-- Main Content -->
    <div class="lg:ml-64 flex flex-col min-h-screen">
        <!-- Topbar -->
        <header class="flex items-center justify-between h-16 bg-white shadow px-6 sticky top-0 z-40">
            <div class="flex items-center">
                <button id="menu-toggle" class="text-gray-800 text-xl lg:hidden mr-4">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold">
                    {{ 
                        request()->routeIs('user.dashboard') ? 'Dashboard' :
                        (request()->routeIs('user.properties*') ? 'My Properties' :
                        (request()->routeIs('user.bookings*') ? 'My Bookings' :
                        (request()->routeIs('user.reviews*') ? 'Reviews' :
                        (request()->routeIs('user.earnings*') ? 'Earnings' :
                        (request()->routeIs('user.profile') ? 'My Profile' : ($title ?? 'Dashboard'))))))
                    }}
                </h1>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-gray-100 p-2 rounded-full hover:bg-blue-600 hover:text-white transition">
                    <i class="fas fa-search"></i>
                </button>
                <button class="bg-gray-100 p-2 rounded-full hover:bg-blue-600 hover:text-white transition">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="bg-gray-100 p-2 rounded-full hover:bg-blue-600 hover:text-white transition">
                    <i class="fas fa-envelope"></i>
                </button>
                <div class="flex items-center space-x-2">
                    <img src="https://source.unsplash.com/random/36x36?person" alt="User" class="w-9 h-9 rounded-full object-cover">
                    <div>
                        <p class="font-semibold text-sm">{{ Auth::user()->name }}</p>
                        <p class="text-gray-500 text-xs">Property Owner</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="bg-white text-gray-500 text-sm text-center py-4 border-t">
            &copy; 2025 DreamHome User Dashboard. All rights reserved.
        </footer>
    </div>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Sidebar Toggle -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
    @stack('scripts')
</body>
</html>