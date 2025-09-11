@props(['title' => 'Dashboard'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - DreamHome Admin Dashboard</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Custom Configuration -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#2c3e50',
                        secondary: '#34495e',
                        accent: '#3498db',
                        light: '#ecf0f1',
                        dark: '#2c3e50',
                        border: '#e0e6ed',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <style>
        :root {
            --sidebar-width: 250px;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
        }
        
        /* Sidebar Styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: var(--sidebar-width);
            background-color: white;
            z-index: 1000;
            transition: all 0.3s;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
            overflow-y: auto;
        }
        
        .sidebar-brand {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary);
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .sidebar-link:hover {
            background-color: #f8f9fa;
            color: var(--accent);
        }
        
        .sidebar-link.active {
            background-color: #f8f9fa;
            color: var(--accent);
            border-left: 3px solid var(--accent);
        }
        
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
        }
        
        /* Topbar */
        .topbar {
            height: 70px;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        
        /* Dark Mode Styles */
        .dark {
            background-color: #1a202c;
            color: #e2e8f0;
        }
        
        .dark .sidebar {
            background-color: #2d3748;
        }
        
        .dark .sidebar-brand {
            background-color: #1a202c;
        }
        
        .dark .sidebar-link {
            color: #e2e8f0;
        }
        
        .dark .sidebar-link:hover {
            background-color: #4a5568;
        }
        
        .dark .topbar {
            background-color: #2d3748;
        }
        
        .dark .bg-white {
            background-color: #2d3748;
        }
        
        .dark .text-dark {
            color: #e2e8f0;
        }
        
        .dark .text-gray-500 {
            color: #a0aec0;
        }
        
        .dark .border-gray-200 {
            border-color: #4a5568;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                margin-left: -250px;
            }
            
            .sidebar.active {
                margin-left: 0;
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <i class="fas fa-home me-2"></i>
            <span>DreamHome</span>
        </div>
        
        <div class="sidebar-menu">
            <div class="sidebar-item">
                <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt w-6"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="{{ route('properties.index') }}" class="sidebar-link {{ request()->routeIs('properties.index') ? 'active' : '' }}">
                    <i class="fas fa-building w-6"></i>
                    <span>My Properties</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="{{ route('bookings.index') }}" class="sidebar-link {{ request()->routeIs('bookings.index') ? 'active' : '' }}">
                    <i class="fas fa-calendar-check w-6"></i>
                    <span>My Bookings</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="{{ route('reviews.index') }}" class="sidebar-link {{ request()->routeIs('reviews.index') ? 'active' : '' }}">
                    <i class="fas fa-comments w-6"></i>
                    <span>Reviews</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="{{ route('earnings.index') }}" class="sidebar-link {{ request()->routeIs('earnings.index') ? 'active' : '' }}">
                    <i class="fas fa-coins w-6"></i>
                    <span>Earnings</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="{{ route('profile.show') }}" class="sidebar-link {{ request()->routeIs('profile.show') ? 'active' : '' }}">
                    <i class="fas fa-user w-6"></i>
                    <span>Profile</span>
                </a>
            </div>
            
            <div class="sidebar-item mt-4">
                <a href="{{ route('logout') }}" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt w-6"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="flex items-center">
                <div class="menu-toggle hidden lg:block mr-5 text-xl cursor-pointer" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="page-title text-xl font-semibold text-dark">{{ $title }}</h1>
            </div>
            
            <div class="flex items-center space-x-4 ml-auto">
                <div class="w-9 h-9 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-dark dark:text-gray-300 cursor-pointer hover:bg-accent hover:text-white transition-all">
                    <i class="fas fa-search"></i>
                </div>
                
                <div class="w-9 h-9 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-dark dark:text-gray-300 cursor-pointer hover:bg-accent hover:text-white transition-all">
                    <i class="fas fa-bell"></i>
                </div>
                
                <div class="w-9 h-9 rounded-full bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-dark dark:text-gray-300 cursor-pointer hover:bg-accent hover:text-white transition-all" id="dark-mode-toggle">
                    <i class="fas fa-moon dark:hidden"></i>
                    <i class="fas fa-sun hidden dark:inline"></i>
                </div>
                
                <div class="relative" id="user-dropdown">
                    <div class="flex items-center cursor-pointer" onclick="toggleDropdown()">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=6366f1&color=fff&size=36" alt="User" class="w-9 h-9 rounded-full object-cover">
                        <div class="ml-2.5 user-info">
                            <p class="user-name text-sm font-semibold text-dark dark:text-gray-200 m-0">{{ Auth::user()->name }}</p>
                            <p class="user-role text-xs text-gray-500 dark:text-gray-400 m-0">{{ ucfirst(Auth::user()->role) }}</p>
                        </div>
                        <i class="fas fa-chevron-down ml-2 text-xs text-gray-500"></i>
                    </div>
                    
                    <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 z-50">
                        <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i class="fas fa-user mr-2"></i> My Profile
                        </a>
                        <a href="{{ route('settings.index') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <i class="fas fa-cog mr-2"></i> Settings
                        </a>
                        <form action="{{ route('logout') }}" method="POST" class="block">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Flash Messages -->
        @if (session('status'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p>{{ session('error') }}</p>
            </div>
        @endif
        
        <!-- Content -->
        <div class="content p-8">
            {{ $slot }}
        </div>
        
        <!-- Footer -->
        <div class="footer bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 py-5 text-center">
            <p class="text-gray-500 dark:text-gray-400 text-sm">&copy; 2025 DreamHome User Dashboard. All rights reserved.</p>
        </div>
    </div>
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Toggle Sidebar
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const menuToggle = document.getElementById('menu-toggle');
            
            if (window.innerWidth <= 992 && 
                !sidebar.contains(event.target) && 
                !menuToggle.contains(event.target) && 
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });
        
        // Toggle Dropdown Menu
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-menu');
            dropdown.classList.toggle('hidden');
        }
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('dropdown-menu');
            const userDropdown = document.getElementById('user-dropdown');
            
            if (!userDropdown.contains(event.target) && !dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        });
        
        // Dark Mode Toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const html = document.documentElement;
        
        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'true') {
            html.classList.add('dark');
        }
        
        darkModeToggle.addEventListener('click', function() {
            html.classList.toggle('dark');
            
            // Save preference
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        });
    </script>
    
    @stack('scripts')
</body>
</html>