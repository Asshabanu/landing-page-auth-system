@extends('layouts.app')
@section('content')
<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <i class="fas fa-home text-blue-600 text-2xl"></i>
                    <span class="font-bold text-xl text-gray-800">DreamHomes</span>
                </a>
            </div>
            <div class="hidden sm:flex sm:space-x-8 sm:ml-6">
                <a href="#features" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Features</a>
                <a href="#properties" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Properties</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-300">About</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Contact</a>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-300">Login</a>
                <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300 transform hover:scale-105">Sign Up</a>
            </div>
            <div class="flex items-center sm:hidden">
                <button class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="mobile-menu hidden sm:hidden px-2 pt-2 pb-3 space-y-1">
        <a href="#features" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium transition-colors duration-300">Features</a>
        <a href="#properties" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium transition-colors duration-300">Properties</a>
        <a href="#about" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium transition-colors duration-300">About</a>
        <a href="#contact" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium transition-colors duration-300">Contact</a>
        <a href="{{ route('login') }}" class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium transition-colors duration-300">Login</a>
        <a href="{{ route('register') }}" class="block px-3 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">Sign Up</a>
    </div>
</nav>

<!-- Hero Section -->
<header class="relative bg-gradient-to-r from-blue-600 to-indigo-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Hero background" class="w-full h-full object-cover mix-blend-overlay">
    </div>
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold animate-fade-in">Find Your Dream Home</h1>
        <p class="mt-6 text-lg sm:text-xl max-w-3xl mx-auto animate-slide-up">
            Discover the perfect home that fits your lifestyle with our advanced search filters and intuitive interface.
        </p>
        <div class="mt-10 flex justify-center animate-slide-up" style="animation-delay: 0.2s">
            <a href="#properties" class="px-8 py-4 bg-white text-blue-700 font-semibold rounded-lg shadow-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 flex items-center">
                <i class="fas fa-search mr-2"></i> Browse Properties
            </a>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900">Our Features</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Making your home search easier and faster with our innovative tools.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-search text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Advanced Search</h3>
                <p class="text-gray-600">Filter properties by location, price, size, and more to find exactly what you need.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-map-marked-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Interactive Maps</h3>
                <p class="text-gray-600">Explore properties directly on an interactive map for a better neighborhood view.</p>
            </div>
            <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                    <i class="fas fa-heart text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Favorites</h3>
                <p class="text-gray-600">Save your favorite properties and compare them anytime with our easy-to-use tools.</p>
            </div>
        </div>
    </div>
</section>

<!-- Properties Section -->
<section id="properties" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900">Featured Properties</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Handpicked properties just for you.</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-gray-100">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property 1" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">Featured</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Luxury Villa</h3>
                    <p class="text-gray-600 mb-4">Modern villa with stunning views and premium amenities.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-blue-600">$500,000</p>
                        <div class="flex space-x-3 text-gray-500 text-sm">
                            <span><i class="fas fa-bed mr-1"></i> 4 Beds</span>
                            <span><i class="fas fa-bath mr-1"></i> 3 Baths</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-gray-100">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property 2" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">New</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Modern Apartment</h3>
                    <p class="text-gray-600 mb-4">Stylish apartment in the heart of the city with all amenities.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-blue-600">$300,000</p>
                        <div class="flex space-x-3 text-gray-500 text-sm">
                            <span><i class="fas fa-bed mr-1"></i> 2 Beds</span>
                            <span><i class="fas fa-bath mr-1"></i> 2 Baths</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border border-gray-100">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property 3" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">Popular</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Cozy Cottage</h3>
                    <p class="text-gray-600 mb-4">Charming cottage with a beautiful garden and peaceful surroundings.</p>
                    <div class="flex justify-between items-center">
                        <p class="text-lg font-bold text-blue-600">$200,000</p>
                        <div class="flex space-x-3 text-gray-500 text-sm">
                            <span><i class="fas fa-bed mr-1"></i> 3 Beds</span>
                            <span><i class="fas fa-bath mr-1"></i> 2 Baths</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                View All Properties <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">About Us</h2>
                <p class="mt-4 text-lg text-gray-600 mb-6">
                    At DreamHomes, we believe everyone deserves a perfect home. Our mission is to simplify your house-hunting process with cutting-edge tools and a user-friendly platform.
                </p>
                <p class="text-lg text-gray-600 mb-8">
                    With over 25 years of experience in the real estate industry, our team of experts is dedicated to helping you find the property that meets your needs and exceeds your expectations.
                </p>
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div>
                        <h3 class="text-2xl font-bold text-blue-600">500+</h3>
                        <p class="text-gray-600">Properties Listed</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-blue-600">350+</h3>
                        <p class="text-gray-600">Happy Clients</p>
                    </div>
                </div>
                <a href="#contact" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 inline-flex items-center">
                    Contact Us <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
            <div class="mt-10 lg:mt-0">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" alt="About Us" class="rounded-xl shadow-xl w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gray-900">Contact Us</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">We'd love to hear from you. Get in touch today.</p>
        </div>
        <div class="mt-12 max-w-3xl mx-auto bg-gray-50 rounded-xl p-8 shadow-lg">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" id="name" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border focus:ring-2 transition-all duration-300">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" id="email" required
                               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border focus:ring-2 transition-all duration-300">
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" id="message" rows="4" required
                              class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3 border focus:ring-2 transition-all duration-300"></textarea>
                </div>
                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-3 px-6 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300 transform hover:scale-[1.02]">
                        <i class="fas fa-paper-plane mr-2"></i> Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <i class="fas fa-home text-blue-400 text-2xl"></i>
                    <span class="font-bold text-xl">DreamHomes</span>
                </div>
                <p class="text-gray-400 mb-4">Your trusted partner in finding the perfect property.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#features" class="text-gray-400 hover:text-white transition-colors duration-300">Features</a></li>
                    <li><a href="#properties" class="text-gray-400 hover:text-white transition-colors duration-300">Properties</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-300">About</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Property Types</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Houses</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Apartments</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Villas</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Commercial</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                <p class="text-gray-400 mb-4">Subscribe to get the latest property updates.</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg text-gray-800 focus:outline-none w-full">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-r-lg transition-colors duration-300">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} DreamHomes. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-button').addEventListener('click', function() {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
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
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes slideUp {
        from { 
            opacity: 0;
            transform: translateY(20px);
        }
        to { 
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.8s ease-out;
    }
    
    .animate-slide-up {
        animation: slideUp 0.8s ease-out;
    }
</style>
@endsection