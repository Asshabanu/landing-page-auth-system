<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'DreamHome') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <style>
        /* Global styles */
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --primary-600: #3b82f6;
            --primary-700: #2563eb;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            color: #333;
            background-color: #f8fafc;
        }
        
        .bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, #f8fafc, #e2e8f0);
        }
        
        .text-primary-600 {
            color: #3b82f6;
        }
        
        .text-primary-500 {
            color: #3b82f6;
        }
        
        .text-primary-300 {
            color: #93c5fd;
        }
        
        .text-primary-200 {
            color: #bfdbfe;
        }
        
        .bg-primary-600 {
            background-color: #3b82f6;
        }
        
        .bg-primary-700 {
            background-color: #2563eb;
        }
        
        .hover\:bg-primary-700:hover {
            background-color: #2563eb;
        }
        
        .hover\:text-primary-500:hover {
            color: #3b82f6;
        }
        
        .focus\:ring-primary-500:focus {
            --tw-ring-color: #3b82f6;
        }
        
        .focus\:border-primary-500:focus {
            border-color: #3b82f6;
        }
        
        .focus\:ring-primary-500:focus {
            --tw-ring-color: #3b82f6;
        }
        
        .focus\:ring-offset-2:focus {
            --tw-ring-offset-width: 2px;
        }
        
        .transition-colors {
            transition-property: color, background-color, border-color;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        
        .duration-200 {
            transition-duration: 200ms;
        }
        
        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        
        .hover\:-translate-y-0\.5:hover {
            --tw-translate-y: -0.125rem;
        }
        
        .shadow-md {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .hover\:shadow-lg:hover {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .rounded-lg {
            border-radius: 0.5rem;
        }
        
        .rounded-xl {
            border-radius: 0.75rem;
        }
        
        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }
        
        .focus\:ring-2:focus {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }
    </style>
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
</html>