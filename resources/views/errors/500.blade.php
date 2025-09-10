<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Error - DreamHome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full text-center">
        <div class="flex justify-center mb-8">
            <div class="flex items-center text-primary-600">
                <i class="fas fa-home text-4xl mr-2"></i>
                <span class="text-3xl font-bold">DreamHome</span>
            </div>
        </div>
        
        <div class="mx-auto flex items-center justify-center h-32 w-32 rounded-full bg-red-100 mb-8">
            <i class="fas fa-exclamation-circle text-red-600 text-5xl"></i>
        </div>
        
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4">500</h1>
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Server error</h2>
        <p class="text-gray-600 mb-8 max-w-md mx-auto">
            Sorry, something went wrong on our servers. Our team has been notified and is working on a fix.
        </p>
        
        <div class="space-y-4">
            <a href="{{ url('/') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:-translate-y-0.5">
                <i class="fas fa-home mr-2"></i>
                Go back home
            </a>
            
            <div class="text-sm text-gray-500">
                <p>If the problem persists, please contact our support team:</p>
                <div class="mt-2">
                    <a href="mailto:support@dreamhome.com" class="text-primary-600 hover:text-primary-800 transition-colors duration-200">
                        <i class="fas fa-envelope mr-1"></i> support@dreamhome.com
                    </a>
                </div>
                <div class="mt-1">
                    <a href="tel:+1234567890" class="text-primary-600 hover:text-primary-800 transition-colors duration-200">
                        <i class="fas fa-phone mr-1"></i> (123) 456-7890
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>