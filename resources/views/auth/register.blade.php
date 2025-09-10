<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - DreamHome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
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
            background: linear-gradient(to bottom right, #f8fafc, #e2e8f0);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            margin-bottom: 30px;
        }
        
        .logo i {
            font-size: 36px;
            margin-right: 10px;
        }
        
        .logo span {
            font-size: 28px;
            font-weight: 800;
        }
        
        .form-container {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .form-header h2 {
            font-size: 24px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }
        
        .form-header p {
            color: #64748b;
            font-size: 14px;
        }
        
        .form-header a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
            color: #1e293b;
        }
        
        .input-group {
            position: relative;
        }
        
        .input-group i {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.2s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .btn-register {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .btn-register:hover {
            background-color: var(--primary-dark);
        }
        
        .terms {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #64748b;
        }
        
        .terms a {
            color: var(--primary);
            text-decoration: none;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-home"></i>
            <span>DreamHome</span>
        </div>
        
        <div class="form-container">
            <div class="form-header">
                <h2>Create your account</h2>
                <p>
                    Or
                    <a href="{{ route('login') }}">sign in to your existing account</a>
                </p>
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input id="name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" class="form-control" placeholder="John Doe">
                    </div>
                    @error('name')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email">Email address</label>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="form-control" placeholder="you@example.com">
                    </div>
                    @error('email')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="form-control" placeholder="••••••••">
                    </div>
                    @error('password')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="form-control" placeholder="••••••••">
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn-register">
                        Create Account
                    </button>
                </div>
            </form>
            
            <div class="terms">
                By creating an account, you agree to our
                <a href="#">Terms of Service</a>
                and
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</body>
</html>