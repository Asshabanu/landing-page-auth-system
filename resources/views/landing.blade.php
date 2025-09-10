<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Dream Home - DreamHome</title>
    <meta name="description" content="Find your perfect home with our advanced search filters and intuitive interface">
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
            --accent: #f59e0b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Navigation */
        nav {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .nav-actions {
            display: flex;
            align-items: center;
        }
        
        .nav-actions a {
            margin-left: 15px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-actions a:hover {
            color: var(--primary);
        }
        
        .btn-signup {
            background-color: var(--primary);
            color: white;
            padding: 8px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        
        .btn-signup:hover {
            background-color: var(--primary-dark);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--dark);
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
        }
        
        .hero-content {
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .search-container {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        .search-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .search-input {
            flex: 1;
            padding: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .search-row {
            display: flex;
            gap: 15px;
        }
        
        .search-select {
            flex: 1;
            padding: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
            cursor: pointer;
        }
        
        .search-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .search-btn:hover {
            background-color: var(--primary-dark);
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }
        
        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-secondary:hover {
            background-color: white;
            color: var(--primary);
            transform: translateY(-3px);
        }
        
        /* Stats Section */
        .stats {
            padding: 80px 0;
            background-color: #f8fafc;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }
        
        .stat-item h3 {
            font-size: 36px;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 16px;
            color: var(--gray);
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .section-header p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(59, 130, 246, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .feature-icon i {
            font-size: 30px;
            color: var(--primary);
        }
        
        .feature-card h3 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .feature-card p {
            color: var(--gray);
        }
        
        /* Featured Properties Section */
        .featured-properties {
            padding: 80px 0;
            background-color: #f8fafc;
        }
        
        .property-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }
        
        .property-tab {
            background-color: white;
            border: 1px solid #e2e8f0;
            padding: 10px 20px;
            margin: 0 5px 10px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .property-tab.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .property-tab:hover:not(.active) {
            background-color: #f1f5f9;
        }
        
        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .property-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .property-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .property-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .property-card:hover .property-img {
            transform: scale(1.05);
        }
        
        .property-content {
            padding: 20px;
        }
        
        .property-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .property-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .property-price {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
        }
        
        .property-location {
            display: flex;
            align-items: center;
            color: var(--gray);
            margin-bottom: 15px;
        }
        
        .property-location i {
            margin-right: 8px;
            color: var(--primary);
        }
        
        .property-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .property-detail {
            display: flex;
            align-items: center;
            color: var(--gray);
        }
        
        .property-detail i {
            margin-right: 5px;
            color: var(--primary);
        }
        
        .property-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
        }
        
        .property-rating {
            display: flex;
            align-items: center;
        }
        
        .property-rating i {
            color: #fbbf24;
            margin-right: 5px;
        }
        
        .property-rating span {
            color: var(--gray);
            margin-left: 5px;
        }
        
        .property-btn {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .property-btn:hover {
            color: var(--primary-dark);
        }
        
        .property-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            z-index: 1;
        }
        
        .badge-sale {
            background-color: #ef4444;
            color: white;
        }
        
        .badge-rent {
            background-color: #10b981;
            color: white;
        }
        
        .badge-new {
            background-color: var(--accent);
            color: white;
        }
        
        /* Properties Section */
        .properties {
            padding: 80px 0;
        }
        
        .properties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        /* Testimonials Section */
        .testimonials {
            padding: 80px 0;
            background-color: #f8fafc;
        }
        
        .testimonial-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }
        
        .testimonial-info h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .testimonial-info p {
            color: var(--gray);
        }
        
        .testimonial-rating {
            display: flex;
            margin-left: auto;
        }
        
        .testimonial-rating i {
            color: #fbbf24;
            font-size: 18px;
        }
        
        .testimonial-content {
            font-style: italic;
            color: var(--gray);
            line-height: 1.8;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-card::before {
            content: """;
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: 60px;
            color: rgba(59, 130, 246, 0.1);
            font-family: serif;
        }
        
        .testimonial-card-content {
            margin-bottom: 20px;
            color: var(--gray);
            font-style: italic;
        }
        
        .testimonial-card-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(59, 130, 246, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
            font-weight: 700;
            font-size: 18px;
        }
        
        .author-info h4 {
            font-size: 16px;
            font-weight: 700;
            color: var(--dark);
        }
        
        .author-info p {
            font-size: 14px;
            color: var(--gray);
        }
        
        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .contact-form {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        
        .contact-info {
            background-color: #f8fafc;
            border-radius: 10px;
            padding: 30px;
        }
        
        .contact-info h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--dark);
        }
        
        .info-item {
            display: flex;
            margin-bottom: 20px;
        }
        
        .info-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(59, 130, 246, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary);
        }
        
        .info-content h4 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .info-content p {
            color: var(--gray);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-col h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }
        
        .footer-col p {
            color: #94a3b8;
            margin-bottom: 20px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--primary);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: background-color 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
        }
        
        .newsletter-form {
            display: flex;
            margin-top: 15px;
        }
        
        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .newsletter-input::placeholder {
            color: #94a3b8;
        }
        
        .newsletter-btn {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .newsletter-btn:hover {
            background-color: var(--primary-dark);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 14px;
        }
        
        .footer-bottom a {
            color: #94a3b8;
            text-decoration: none;
            margin: 0 5px;
            transition: color 0.3s ease;
        }
        
        .footer-bottom a:hover {
            color: var(--primary);
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 999;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            background-color: var(--primary-dark);
            transform: translateY(-5px);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .nav-actions a:not(.btn-signup) {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .search-row {
                flex-direction: column;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .property-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .property-price {
                margin-top: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 28px;
            }
            
            .section-header h2 {
                font-size: 28px;
            }
            
            .cta h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container">
            <div class="nav-container">
                <a href="#" class="logo">DreamHome</a>
                <ul class="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#properties">Properties</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                    <a href="{{ route('register') }}" class="nav-link btn-signup">Sign up</a>
                    <button class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Find Your Dream Home</h1>
                <p>Discover the perfect property that suits your lifestyle and budget</p>
                
                <div class="search-container">
                    <form class="search-form">
                        <input type="text" class="search-input" placeholder="Search by location, property type, or keyword">
                        <div class="search-row">
                            <select class="search-select">
                                <option>All Types</option>
                                <option>House</option>
                                <option>Apartment</option>
                                <option>Condo</option>
                                <option>Villa</option>
                            </select>
                            <button type="submit" class="search-btn">Search</button>
                        </div>
                    </form>
                </div>
                
                <div class="hero-buttons">
                    <a href="#" class="btn-primary">Get Started</a>
                    <a href="#properties" class="btn-secondary">Browse Properties</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Properties Listed</p>
                </div>
                <div class="stat-item">
                    <h3>350+</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item">
                    <h3>25+</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item">
                    <h3>15+</h3>
                    <p>Cities Covered</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Us</h2>
                <p>Everything you need to find your perfect home</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Advanced Search</h3>
                    <p>Find your perfect home with our advanced search filters and intuitive interface.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Verified Listings</h3>
                    <p>All our properties are verified to ensure you get accurate and reliable information.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Best Prices</h3>
                    <p>Get competitive prices and exclusive deals on properties that fit your budget.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Virtual Tours</h3>
                    <p>Take virtual tours of properties from the comfort of your home.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our team is available around the clock to assist you with any questions.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>Easy Paperwork</h3>
                    <p>Simplified documentation and legal assistance for a hassle-free experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="featured-properties">
        <div class="container">
            <div class="section-header">
                <h2>Featured Properties</h2>
                <p>Discover our latest listings</p>
            </div>
            
            <div class="property-tabs">
                <div class="property-tab active">All Properties</div>
                <div class="property-tab">For Sale</div>
                <div class="property-tab">For Rent</div>
            </div>
            
            <div class="featured-grid">
                <div class="property-card">
                    <div style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="property-img">
                        <div class="property-badge badge-sale">For Sale</div>
                    </div>
                    <div class="property-content">
                        <div class="property-header">
                            <h3 class="property-title">Modern Family Home</h3>
                            <div class="property-price">$450,000</div>
                        </div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Downtown, City Center</span>
                        </div>
                        <div class="property-details">
                            <div class="property-detail">
                                <i class="fas fa-bed"></i>
                                <span>3 Beds</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-bath"></i>
                                <span>2 Baths</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-ruler-combined"></i>
                                <span>1,200 sqft</span>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="property-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.5</span>
                            </div>
                            <a href="#" class="property-btn">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="property-card">
                    <div style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="property-img">
                        <div class="property-badge badge-rent">For Rent</div>
                        <div class="property-badge badge-new" style="top: 55px;">New</div>
                    </div>
                    <div class="property-content">
                        <div class="property-header">
                            <h3 class="property-title">Spacious Family House</h3>
                            <div class="property-price">$1,800/mo</div>
                        </div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Suburbs, Quiet Area</span>
                        </div>
                        <div class="property-details">
                            <div class="property-detail">
                                <i class="fas fa-bed"></i>
                                <span>4 Beds</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-bath"></i>
                                <span>3 Baths</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-ruler-combined"></i>
                                <span>2,400 sqft</span>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="property-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>5.0</span>
                            </div>
                            <a href="#" class="property-btn">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center" style="margin-top: 40px;">
                <a href="#" class="btn-primary">View All Properties</a>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section class="properties" id="properties">
        <div class="container">
            <div class="section-header">
                <h2>Property Listings</h2>
                <p>Browse our available properties</p>
            </div>
            
            <div class="properties-grid">
                <div class="property-card">
                    <div style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="property-img">
                        <div class="property-badge badge-sale">For Sale</div>
                    </div>
                    <div class="property-content">
                        <div class="property-header">
                            <h3 class="property-title">Modern Apartment</h3>
                            <div class="property-price">$450,000</div>
                        </div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Downtown, City Center</span>
                        </div>
                        <div class="property-details">
                            <div class="property-detail">
                                <i class="fas fa-bed"></i>
                                <span>3 Beds</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-bath"></i>
                                <span>2 Baths</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-ruler-combined"></i>
                                <span>1,200 sqft</span>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="property-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>4.5</span>
                            </div>
                            <a href="#" class="property-btn">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="property-card">
                    <div style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="property-img">
                        <div class="property-badge badge-rent">For Rent</div>
                    </div>
                    <div class="property-content">
                        <div class="property-header">
                            <h3 class="property-title">Family House</h3>
                            <div class="property-price">$1,800/mo</div>
                        </div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Suburbs, Quiet Area</span>
                        </div>
                        <div class="property-details">
                            <div class="property-detail">
                                <i class="fas fa-bed"></i>
                                <span>4 Beds</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-bath"></i>
                                <span>3 Baths</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-ruler-combined"></i>
                                <span>2,400 sqft</span>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="property-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span>5.0</span>
                            </div>
                            <a href="#" class="property-btn">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="property-card">
                    <div style="position: relative;">
                        <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="property-img">
                        <div class="property-badge badge-sale">For Sale</div>
                    </div>
                    <div class="property-content">
                        <div class="property-header">
                            <h3 class="property-title">Luxury Villa</h3>
                            <div class="property-price">$1,250,000</div>
                        </div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Hillside, Ocean View</span>
                        </div>
                        <div class="property-details">
                            <div class="property-detail">
                                <i class="fas fa-bed"></i>
                                <span>5 Beds</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-bath"></i>
                                <span>4 Baths</span>
                            </div>
                            <div class="property-detail">
                                <i class="fas fa-ruler-combined"></i>
                                <span>4,500 sqft</span>
                            </div>
                        </div>
                        <div class="property-footer">
                            <div class="property-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>4.0</span>
                            </div>
                            <a href="#" class="property-btn">View Details <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>Testimonials</h2>
                <p>What our clients say</p>
            </div>
            
            <div class="testimonial-container">
                <div class="testimonial-header">
                    <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Property" class="testimonial-img">
                    <div class="testimonial-info">
                        <h3>Luxury Villa</h3>
                        <p>5 Beds, 4 Baths, 4,500 sqft</p>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn-primary">View All Properties</a>
                </div>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-card-content">
                        "This platform helped me find my dream home in just two weeks. The search filters are amazing and the customer service is exceptional!"
                    </div>
                    <div class="testimonial-card-author">
                        <div class="author-avatar">A</div>
                        <div class="author-info">
                            <h4>Alice Johnson</h4>
                            <p>New Homeowner</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-card-content">
                        "The team was very supportive throughout the process. I highly recommend their services to anyone looking for a property."
                    </div>
                    <div class="testimonial-card-author">
                        <div class="author-avatar">B</div>
                        <div class="author-info">
                            <h4>Bob Smith</h4>
                            <p>Property Investor</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-card-content">
                        "Very useful platform with a wide range of options. Found the perfect apartment for my family. The virtual tour feature was a game-changer!"
                    </div>
                    <div class="testimonial-card-author">
                        <div class="author-avatar">C</div>
                        <div class="author-info">
                            <h4>Carol Williams</h4>
                            <p>Renter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Find Your Dream Home?</h2>
            <p>Join thousands of satisfied customers who found their perfect home through our platform.</p>
            <div class="hero-buttons">
                <a href="#" class="btn-primary">Get Started</a>
                <a href="#contact" class="btn-secondary">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Have questions? We'd love to hear from you.</p>
            </div>
            
            <div class="contact-container">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Address</h4>
                            <p>123 Dream Street, City Center, NY 10001</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h4>Phone</h4>
                            <p>(123) 456-7890</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email</h4>
                            <p>info@dreamhome.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h4>Hours</h4>
                            <p>Mon-Fri: 9am-6pm<br>Sat-Sun: 10am-4pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>DreamHome</h3>
                    <p>Your trusted partner in finding the perfect property.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#properties">Properties</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Properties</h3>
                    <ul class="footer-links">
                        <li><a href="#">For Sale</a></li>
                        <li><a href="#">For Rent</a></li>
                        <li><a href="#">Luxury Homes</a></li>
                        <li><a href="#">Apartments</a></li>
                        <li><a href="#">Commercial</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to get the latest property updates.</p>
                    <form class="newsletter-form">
                        <input type="email" class="newsletter-input" placeholder="Your email">
                        <button type="submit" class="newsletter-btn"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 DreamHome. All rights reserved.</p>
                <p>
                    <a href="#">Privacy Policy</a> · 
                    <a href="#">Terms of Service</a> · 
                    <a href="#">Cookie Policy</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Property tabs
        const propertyTabs = document.querySelectorAll('.property-tab');
        
        propertyTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                propertyTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure links work properly
            const loginLink = document.querySelector('a[href="{{ route('login') }}"]');
            const registerLink = document.querySelector('a[href="{{ route('register') }}"]');
            
            if (loginLink) {
                loginLink.addEventListener('click', function(e) {
                    // Only prevent default if there's a custom handler
                    if (!e.defaultPrevented) {
                        window.location.href = "{{ route('login') }}";
                    }
                });
            }
            
            if (registerLink) {
                registerLink.addEventListener('click', function(e) {
                    // Only prevent default if there's a custom handler
                    if (!e.defaultPrevented) {
                        window.location.href = "{{ route('register') }}";
                    }
                });
            }
        });
    </script>
</body>
</html>