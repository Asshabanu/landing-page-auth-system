<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamHome Admin Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #34495e;
            --accent: #3498db;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --sidebar-width: 250px;
            --border-color: #e0e6ed;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fa;
            color: var(--dark);
            font-size: 14px;
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
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .sidebar-item {
            margin-bottom: 5px;
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
        
        .sidebar-link i {
            width: 24px;
            margin-right: 15px;
            text-align: center;
            font-size: 1rem;
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
        
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
            margin-right: 20px;
        }
        
        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
        }
        
        .topbar-right {
            margin-left: auto;
            display: flex;
            align-items: center;
        }
        
        .topbar-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            font-size: 0.9rem;
            margin-left: 15px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .topbar-icon:hover {
            background: var(--accent);
            color: white;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            margin-left: 20px;
            cursor: pointer;
        }
        
        .user-profile img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .user-info {
            margin-left: 10px;
        }
        
        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
            margin: 0;
        }
        
        .user-role {
            font-size: 0.75rem;
            color: #6c757d;
            margin: 0;
        }
        
        /* Content Area */
        .content {
            padding: 30px;
        }
        
        /* Stats Cards */
        .stats-card {
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            transition: all 0.3s;
            margin-bottom: 30px;
        }
        
        .stats-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }
        
        .stats-icon.primary {
            background-color: var(--accent);
        }
        
        .stats-icon.success {
            background-color: #2ecc71;
        }
        
        .stats-icon.warning {
            background-color: #f39c12;
        }
        
        .stats-icon.info {
            background-color: #9b59b6;
        }
        
        .stats-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            color: var(--dark);
        }
        
        .stats-label {
            font-size: 0.9rem;
            color: #6c757d;
            margin: 0;
        }
        
        .stats-change {
            font-size: 0.8rem;
            margin-top: 5px;
        }
        
        .stats-change.positive {
            color: #2ecc71;
        }
        
        /* Section Headers */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
            color: var(--dark);
        }
        
        .section-link {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        /* Cards */
        .card {
            border-radius: 8px;
            border: 1px solid var(--border-color);
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid var(--border-color);
            padding: 15px 20px;
            font-weight: 600;
            color: var(--dark);
        }
        
        .card-body {
            padding: 20px;
        }
        
        /* Activity Timeline */
        .activity-timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .activity-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 10px;
            height: 100%;
            width: 2px;
            background: var(--border-color);
        }
        
        .activity-item {
            position: relative;
            padding-bottom: 20px;
        }
        
        .activity-item:last-child {
            padding-bottom: 0;
        }
        
        .activity-item::before {
            content: '';
            position: absolute;
            top: 5px;
            left: -30px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: white;
            border: 2px solid var(--accent);
        }
        
        .activity-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .activity-desc {
            color: #6c757d;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .activity-time {
            font-size: 0.8rem;
            color: #adb5bd;
        }
        
        /* Table */
        .table {
            margin-bottom: 0;
        }
        
        .table thead th {
            border-bottom: 2px solid var(--border-color);
            color: #6c757d;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .table td, .table th {
            padding: 15px;
            vertical-align: middle;
        }
        
        .badge {
            padding: 5px 10px;
            font-weight: 500;
            font-size: 0.75rem;
            border-radius: 4px;
        }
        
        .badge-success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .badge-warning {
            background-color: #fff3cd;
            color: #856404;
        }
        
        /* Buttons */
        .btn-action {
            padding: 5px 10px;
            font-size: 0.8rem;
            border-radius: 4px;
            margin-right: 5px;
            border: none;
        }
        
        .btn-action:hover {
            opacity: 0.8;
        }
        
        /* Footer */
        .footer {
            background: white;
            padding: 20px 0;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
            border-top: 1px solid var(--border-color);
        }
        
        /* Progress bars */
        .progress {
            height: 8px;
            border-radius: 4px;
            background-color: #e9ecef;
        }
        
        .progress-bar {
            border-radius: 4px;
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
    <!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-brand">
        <i class="fas fa-home me-2"></i>
        <span>DreamHome</span>
    </div>
    
    <div class="sidebar-menu">
        <div class="sidebar-item">
            <a href="{{ route('admin.dashboard') }}" class="sidebar-link active">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a href="{{ route('admin.properties') }}" class="sidebar-link">
                <i class="fas fa-building"></i>
                <span>Properties</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a href="{{ route('admin.users') }}" class="sidebar-link">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a href="{{ route('admin.bookings') }}" class="sidebar-link">
                <i class="fas fa-calendar-check"></i>
                <span>Bookings</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a href="{{ route('admin.reviews') }}" class="sidebar-link">
                <i class="fas fa-comments"></i>
                <span>Reviews</span>
            </a>
        </div>
        
        <div class="sidebar-item">
            <a href="{{ route('admin.settings') }}" class="sidebar-link">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </div>
        
        <div class="sidebar-item mt-4">
            <a href="{{ route('logout') }}" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
    <!-- Main Content -->
    <div class="main-content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="topbar-left">
                <div class="menu-toggle" id="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="page-title">Dashboard</h1>
            </div>
            
            <div class="topbar-right">
                <div class="topbar-icon">
                    <i class="fas fa-search"></i>
                </div>
                
                <div class="topbar-icon">
                    <i class="fas fa-bell"></i>
                </div>
                
                <div class="topbar-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                
                <div class="user-profile">
                    <img src="https://source.unsplash.com/random/36x36?person" alt="User">
                    <div class="user-info">
                        <p class="user-name">{{ Auth::user()->name }}</p>
                        <p class="user-role">Administrator</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <div class="container-fluid">
                <p>&copy; 2025 DreamHome Admin Dashboard. All rights reserved.</p>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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
    </script>
    
    @stack('scripts')
</body>
</html>