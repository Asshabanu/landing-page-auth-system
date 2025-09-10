@extends('layouts.app')

@section('content')

<!-- Navigation -->
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <i class="fas fa-home text-blue-600 text-2xl"></i>
                    <span class="font-bold text-xl text-gray-800">DreamHomes</span>
                </a>
            </div>
            <div class="hidden sm:flex sm:space-x-8 sm:ml-6">
                <a href="#features" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Features</a>
                <a href="#properties" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Properties</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">About</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Contact</a>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium">Login</a>
                <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Sign Up</a>
            </div>
            <div class="flex items-center sm:hidden">
                <button class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mobile-menu hidden sm:hidden px-2 pt-2 pb-3 space-y-1">
        <a href="#features" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">Features</a>
        <a href="#properties" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">Properties</a>
        <a href="#about" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">About</a>
        <a href="#contact" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">Contact</a>
        <a href="{{ route('login') }}" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">Login</a>
        <a href="{{ route('register') }}" class="block px-3 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Sign Up</a>
    </div>
</nav>

<!-- Hero Section -->
<header class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold">Find Your Dream Home</h1>
        <p class="mt-6 text-lg sm:text-xl max-w-3xl mx-auto">
            Discover the perfect home that fits your lifestyle with our advanced search filters and intuitive interface.
        </p>
        <div class="mt-8 flex justify-center">
            <a href="#properties" class="px-6 py-3 bg-white text-blue-700 font-semibold rounded-md shadow-md hover:bg-gray-100">Browse Properties</a>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Our Features</h2>
            <p class="mt-4 text-lg text-gray-600">Making your home search easier and faster.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <i class="fas fa-search text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-lg font-semibold">Advanced Search</h3>
                <p class="mt-2 text-gray-600">Filter properties by location, price, size, and more to find exactly what you need.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <i class="fas fa-map-marked-alt text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-lg font-semibold">Interactive Maps</h3>
                <p class="mt-2 text-gray-600">Explore properties directly on an interactive map for a better neighborhood view.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow">
                <i class="fas fa-heart text-blue-600 text-3xl mb-4"></i>
                <h3 class="text-lg font-semibold">Favorites</h3>
                <p class="mt-2 text-gray-600">Save your favorite properties and compare them anytime.</p>
            </div>
        </div>
    </div>
</section>

<!-- Properties Section -->
<section id="properties" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Featured Properties</h2>
            <p class="mt-4 text-lg text-gray-600">Handpicked properties just for you.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/400x300/?house" alt="Property 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Luxury Villa</h3>
                    <p class="mt-2 text-gray-600">$500,000 · 4 Beds · 3 Baths</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/400x300/?apartment" alt="Property 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Modern Apartment</h3>
                    <p class="mt-2 text-gray-600">$300,000 · 2 Beds · 2 Baths</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://source.unsplash.com/400x300/?interior" alt="Property 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Cozy Cottage</h3>
                    <p class="mt-2 text-gray-600">$200,000 · 3 Beds · 2 Baths</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900">About Us</h2>
                <p class="mt-4 text-lg text-gray-600">
                    At DreamHomes, we believe everyone deserves a perfect home. Our mission is to simplify your house-hunting process with cutting-edge tools and a user-friendly platform.
                </p>
                <div class="mt-6">
                    <a href="#contact" class="px-6 py-3 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700">Contact Us</a>
                </div>
            </div>
            <div class="mt-10 lg:mt-0">
                <img src="https://source.unsplash.com/600x400/?real-estate" alt="About Us" class="rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900">Contact Us</h2>
            <p class="mt-4 text-lg text-gray-600">We’d love to hear from you. Get in touch today.</p>
        </div>
        <div class="mt-12 max-w-3xl mx-auto">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="4" required
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-3 px-6 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 text-center">
        <p>&copy; {{ date('Y') }} DreamHomes. All rights reserved.</p>
    </div>
</footer>

@endsection
