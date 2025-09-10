<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Not Found - DreamHome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --dark: #1e293b;
            --gray: #64748b;
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
            background-color: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        
        .error-code {
            font-size: 120px;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
            margin-bottom: 20px;
        }
        
        .error-title {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }
        
        .error-message {
            font-size: 18px;
            color: var(--gray);
            margin-bottom: 30px;
        }
        
        .error-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
        }
        
        .error-link {
            display: inline-block;
            padding: 12px 24px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.2s;
        }
        
        .error-link:hover {
            background-color: var(--primary-dark);
        }
        
        .error-link-secondary {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .error-link-secondary:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .logo i {
            font-size: 36px;
            color: var(--primary);
            margin-right: 10px;
        }
        
        .logo span {
            font-size: 28px;
            font-weight: 800;
            color: var(--dark);
        }
        
        @media (max-width: 480px) {
            .error-code {
                font-size: 80px;
            }
            
            .error-title {
                font-size: 24px;
            }
            
            .error-message {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-home"></i>
            <span>DreamHome</span>
        </div>
        
        <div class="error-code">404</div>
        <h1 class="error-title">Page not found</h1>
        <p class="error-message">
            Sorry, we couldn't find the page you're looking for. It might have been removed, renamed, or did not exist in the first place.
        </p>
        
        <div class="error-links">
            <a href="{{ url('/') }}" class="error-link">
                <i class="fas fa-home mr-2"></i> Go back home
            </a>
            
            <div style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                <a href="{{ route('login') }}" class="error-link error-link-secondary">Login</a>
                <a href="{{ route('register') }}" class="error-link error-link-secondary">Register</a>
                <a href="{{ url('/#features') }}" class="error-link error-link-secondary">Features</a>
            </div>
        </div>
    </div>
</body>
</html>