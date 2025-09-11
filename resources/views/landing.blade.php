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
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        'primary-dark': '#2563eb',
                        secondary: '#10b981',
                        dark: '#1e293b',
                        light: '#f8fafc',
                        gray: '#64748b',
                        accent: '#f59e0b',
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                },
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom styles that can't be easily done with Tailwind */
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .property-img {
            transition: transform 0.5s ease;
        }
        
        .property-card:hover .property-img {
            transform: scale(1.05);
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
        
        /* Gradient background */
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body class="font-inter text-gray-800 overflow-x-hidden">
    <!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm shadow-md fixed w-full top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-5">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-2xl font-bold text-primary flex items-center">
                    <i class="fas fa-home mr-2"></i>
                    DreamHome
                </a>
                <ul class="hidden md:flex space-x-8">
                    <li><a href="#features" class="text-dark font-medium hover:text-primary transition-colors duration-300 relative">Features</a></li>
                    <li><a href="#properties" class="text-dark font-medium hover:text-primary transition-colors duration-300 relative">Properties</a></li>
                    <li><a href="#testimonials" class="text-dark font-medium hover:text-primary transition-colors duration-300 relative">Testimonials</a></li>
                    <li><a href="#contact" class="text-dark font-medium hover:text-primary transition-colors duration-300 relative">Contact</a></li>
                </ul>
                <div class="flex items-center">
                    <a href="{{ route('login') }}" class="hidden md:block text-dark font-medium hover:text-primary transition-colors duration-300 mr-4">Login</a>
                    <a href="{{ route('register') }}" class="bg-primary text-white px-5 py-2 rounded-md font-semibold hover:bg-primary-dark transition-colors duration-300">Sign up</a>
                    <button class="md:hidden ml-4 text-dark text-2xl">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="min-h-screen bg-gradient-to-r from-black/70 to-black/70 bg-[url('https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center flex items-center justify-center text-white px-5">
        <div class="max-w-4xl text-center animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-5 leading-tight animate-slide-up">Find Your Dream Home</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 max-w-2xl mx-auto">Discover the perfect property that suits your lifestyle and budget</p>
            
            <div class="bg-white/90 backdrop-blur-sm rounded-xl p-6 shadow-xl mb-8 animate-slide-up" style="animation-delay: 0.2s">
                <form class="flex flex-col gap-4">
                    <input type="text" class="flex-1 p-4 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Search by location, property type, or keyword">
                    <div class="flex flex-col md:flex-row gap-4">
                        <select class="flex-1 p-4 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent bg-white cursor-pointer">
                            <option>All Types</option>
                            <option>House</option>
                            <option>Apartment</option>
                            <option>Condo</option>
                            <option>Villa</option>
                        </select>
                        <button type="submit" class="bg-primary text-white px-6 py-4 rounded-lg font-semibold hover:bg-primary-dark transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                            <i class="fas fa-search mr-2"></i> Search
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="flex flex-col md:flex-row justify-center gap-5 animate-slide-up" style="animation-delay: 0.4s">
                <a href="#" class="bg-primary text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-dark transition-all duration-300 hover:-translate-y-1 hover:shadow-lg inline-block transform">
                    <i class="fas fa-rocket mr-2"></i> Get Started
                </a>
                <a href="#properties" class="bg-transparent text-white border-2 border-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-primary transition-all duration-300 hover:-translate-y-1 inline-block transform">
                    <i class="fas fa-th-large mr-2"></i> Browse Properties
                </a>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-5">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="stat-item p-6 rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-3xl font-bold text-primary mb-2 animate-float">500+</h3>
                    <p class="text-gray">Properties Listed</p>
                </div>
                <div class="stat-item p-6 rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-3xl font-bold text-primary mb-2 animate-float" style="animation-delay: 0.2s">350+</h3>
                    <p class="text-gray">Happy Clients</p>
                </div>
                <div class="stat-item p-6 rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-3xl font-bold text-primary mb-2 animate-float" style="animation-delay: 0.4s">25+</h3>
                    <p class="text-gray">Years Experience</p>
                </div>
                <div class="stat-item p-6 rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-3xl font-bold text-primary mb-2 animate-float" style="animation-delay: 0.6s">15+</h3>
                    <p class="text-gray">Cities Covered</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="py-20" id="features">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Why Choose Us</h2>
                <p class="text-lg text-gray max-w-2xl mx-auto">Everything you need to find your perfect home</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-search text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">Advanced Search</h3>
                    <p class="text-gray">Find your perfect home with our advanced search filters and intuitive interface.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-shield-alt text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">Verified Listings</h3>
                    <p class="text-gray">All our properties are verified to ensure you get accurate and reliable information.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-dollar-sign text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">Best Prices</h3>
                    <p class="text-gray">Get competitive prices and exclusive deals on properties that fit your budget.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-map-marked-alt text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">Virtual Tours</h3>
                    <p class="text-gray">Take virtual tours of properties from the comfort of your home.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-headset text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">24/7 Support</h3>
                    <p class="text-gray">Our team is available around the clock to assist you with any questions.</p>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-3 border border-gray-100">
                    <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-file-contract text-3xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-dark">Easy Paperwork</h3>
                    <p class="text-gray">Simplified documentation and legal assistance for a hassle-free experience.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Properties Section -->
    <section class="py-20 bg-light">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Featured Properties</h2>
                <p class="text-lg text-gray">Discover our latest listings</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <div class="bg-white border border-gray-200 px-5 py-2 rounded-full font-medium cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white shadow-sm">All Properties</div>
                <div class="bg-white border border-gray-200 px-5 py-2 rounded-full font-medium cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white shadow-sm">For Sale</div>
                <div class="bg-white border border-gray-200 px-5 py-2 rounded-full font-medium cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white shadow-sm">For Rent</div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Sale</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Modern Family Home</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$450,000</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Downtown, City Center</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>3 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>2 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>1,200 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                                <span class="ml-2 text-gray">4.5</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Rent</div>
                        <div class="absolute top-16 right-4 bg-accent text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">New</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Spacious Family House</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$1,800/mo</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Suburbs, Quiet Area</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>4 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>3 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>2,400 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-2 text-gray">5.0</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Sale</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Luxury Villa</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$1,250,000</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Hillside, Ocean View</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>5 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>4 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>4,500 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="far fa-star text-yellow-400"></i>
                                <span class="ml-2 text-gray">4.0</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-dark transition-all duration-300 transform hover:scale-105 inline-block shadow-md">
                    View All Properties <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Properties Section -->
    <section class="py-20" id="properties">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Property Listings</h2>
                <p class="text-lg text-gray">Browse our available properties</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Sale</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Modern Apartment</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$450,000</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Downtown, City Center</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>3 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>2 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>1,200 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                                <span class="ml-2 text-gray">4.5</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-secondary text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Rent</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Family House</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$1,800/mo</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Suburbs, Quiet Area</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>4 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>3 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>2,400 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="ml-2 text-gray">5.0</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl overflow-hidden shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl border border-gray-100">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Property" class="w-full h-56 object-cover">
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-md">For Sale</div>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-4">
                            <h3 class="text-xl font-bold text-dark">Luxury Villa</h3>
                            <div class="text-xl font-bold text-primary mt-2 md:mt-0">$1,250,000</div>
                        </div>
                        <div class="flex items-center text-gray mb-4">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span>Hillside, Ocean View</span>
                        </div>
                        <div class="flex justify-between mb-4">
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bed mr-2 text-primary"></i>
                                <span>5 Beds</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-bath mr-2 text-primary"></i>
                                <span>4 Baths</span>
                            </div>
                            <div class="flex items-center text-gray">
                                <i class="fas fa-ruler-combined mr-2 text-primary"></i>
                                <span>4,500 sqft</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="far fa-star text-yellow-400"></i>
                                <span class="ml-2 text-gray">4.0</span>
                            </div>
                            <a href="#" class="text-primary font-semibold hover:text-primary-dark transition-colors duration-300 flex items-center">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="py-20 bg-light" id="testimonials">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Testimonials</h2>
                <p class="text-lg text-gray">What our clients say</p>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white rounded-xl p-8 shadow-lg mb-12 border border-gray-100">
                <div class="flex flex-col md:flex-row md:items-center mb-6">
                    <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Property" class="w-20 h-20 rounded-full object-cover mr-6 mb-4 md:mb-0">
                    <div>
                        <h3 class="text-xl font-bold text-dark">Luxury Villa</h3>
                        <p class="text-gray">5 Beds, 4 Baths, 4,500 sqft</p>
                    </div>
                    <div class="flex md:ml-auto">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="far fa-star text-yellow-400"></i>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-primary-dark transition-all duration-300 transform hover:scale-105 inline-block shadow-md">
                        View All Properties <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl p-8 shadow-lg relative border border-gray-100">
                    <div class="text-gray italic mb-6">
                        "This platform helped me find my dream home in just two weeks. The search filters are amazing and the customer service is exceptional!"
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary font-bold">A</div>
                        <div>
                            <h4 class="font-bold text-dark">Alice Johnson</h4>
                            <p class="text-gray">New Homeowner</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg relative border border-gray-100">
                    <div class="text-gray italic mb-6">
                        "The team was very supportive throughout the process. I highly recommend their services to anyone looking for a property."
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary font-bold">B</div>
                        <div>
                            <h4 class="font-bold text-dark">Bob Smith</h4>
                            <p class="text-gray">Property Investor</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg relative border border-gray-100">
                    <div class="text-gray italic mb-6">
                        "Very useful platform with a wide range of options. Found the perfect apartment for my family. The virtual tour feature was a game-changer!"
                    </div>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary font-bold">C</div>
                        <div>
                            <h4 class="font-bold text-dark">Carol Williams</h4>
                            <p class="text-gray">Renter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white text-center">
        <div class="container mx-auto px-5">
            <h2 class="text-3xl md:text-4xl font-bold mb-5">Ready to Find Your Dream Home?</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Join thousands of satisfied customers who found their perfect home through our platform.</p>
            <div class="flex flex-col md:flex-row justify-center gap-5">
                <a href="#" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 inline-block shadow-lg">
                    <i class="fas fa-rocket mr-2"></i> Get Started
                </a>
                <a href="#contact" class="bg-transparent text-white border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-all duration-300 transform hover:scale-105 inline-block">
                    <i class="fas fa-envelope mr-2"></i> Contact Us
                </a>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="py-20" id="contact">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 text-dark">Contact Us</h2>
                <p class="text-lg text-gray">Have questions? We'd love to hear from you.</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="bg-white rounded-xl p-8 shadow-lg border border-gray-100">
                    <form>
                        <div class="mb-5">
                            <label for="name" class="block mb-2 font-medium text-dark">Name</label>
                            <input type="text" id="name" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your name">
                        </div>
                        <div class="mb-5">
                            <label for="email" class="block mb-2 font-medium text-dark">Email</label>
                            <input type="email" id="email" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Your email">
                        </div>
                        <div class="mb-5">
                            <label for="message" class="block mb-2 font-medium text-dark">Message</label>
                            <textarea id="message" class="w-full p-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent min-h-[120px] resize-vertical" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary-dark transition-all duration-300 w-full transform hover:scale-[1.02] shadow-md">
                            <i class="fas fa-paper-plane mr-2"></i> Send Message
                        </button>
                    </form>
                </div>
                
                <div class="bg-light rounded-xl p-8 border border-gray-100">
                    <h3 class="text-2xl font-bold mb-6 text-dark">Contact Information</h3>
                    <div class="mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Address</h4>
                                <p class="text-gray">123 Dream Street, City Center, NY 10001</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Phone</h4>
                                <p class="text-gray">(123) 456-7890</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Email</h4>
                                <p class="text-gray">info@dreamhome.com</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mr-4 text-primary">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-dark mb-1">Hours</h4>
                                <p class="text-gray">Mon-Fri: 9am-6pm<br>Sat-Sun: 10am-4pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-dark text-white py-16">
        <div class="container mx-auto px-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h3 class="text-xl font-bold mb-5 relative pb-3 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-12 after:h-0.5 after:bg-primary flex items-center">
                        <i class="fas fa-home mr-2"></i> DreamHome
                    </h3>
                    <p class="text-gray-300 mb-6">Your trusted partner in finding the perfect property.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-5 relative pb-3 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-12 after:h-0.5 after:bg-primary">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Home</a></li>
                        <li><a href="#features" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Features</a></li>
                        <li><a href="#properties" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Properties</a></li>
                        <li><a href="#testimonials" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Testimonials</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Login</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Register</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-5 relative pb-3 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-12 after:h-0.5 after:bg-primary">Properties</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> For Sale</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> For Rent</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Luxury Homes</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Apartments</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary transition-colors duration-300 flex items-center"><i class="fas fa-chevron-right mr-2 text-xs"></i> Commercial</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-5 relative pb-3 after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-12 after:h-0.5 after:bg-primary">Newsletter</h3>
                    <p class="text-gray-300 mb-4">Subscribe to get the latest property updates.</p>
                    <form class="flex">
                        <input type="email" class="flex-1 p-3 bg-white/10 text-white placeholder-gray-300 border-none rounded-l-lg focus:outline-none focus:ring-1 focus:ring-primary" placeholder="Your email">
                        <button type="submit" class="bg-primary text-white px-4 rounded-r-lg hover:bg-primary-dark transition-colors duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="pt-8 border-t border-white/10 text-center">
                <p class="text-gray-300 mb-2">&copy; 2025 DreamHome. All rights reserved.</p>
                <p class="text-gray-300">
                    <a href="#" class="hover:text-primary transition-colors duration-300">Privacy Policy</a> · 
                    <a href="#" class="hover:text-primary transition-colors duration-300">Terms of Service</a> · 
                    <a href="#" class="hover:text-primary transition-colors duration-300">Cookie Policy</a>
                </p>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <div class="fixed bottom-8 right-8 w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl cursor-pointer opacity-0 invisible transition-all duration-300 z-40 hover:bg-primary-dark hover:-translate-y-1 shadow-lg">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Back to top button
        const backToTopButton = document.querySelector('.fixed.bottom-8.right-8');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.add('opacity-0', 'invisible');
                backToTopButton.classList.remove('opacity-100', 'visible');
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
        const propertyTabs = document.querySelectorAll('.bg-white.border.border-gray-200');
        
        propertyTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                propertyTabs.forEach(t => {
                    t.classList.remove('bg-primary', 'text-white');
                    t.classList.add('bg-white', 'hover:bg-gray-100');
                });
                // Add active class to clicked tab
                tab.classList.remove('bg-white', 'hover:bg-gray-100');
                tab.classList.add('bg-primary', 'text-white');
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            // Fix for Blade template syntax
            const loginUrl = "{{ route('login') }}";
            const registerUrl = "{{ route('register') }}";
            
            // Ensure links work properly
            const loginLink = document.querySelector('a[href="' + loginUrl + '"]');
            const registerLink = document.querySelector('a[href="' + registerUrl + '"]');
            
            if (loginLink) {
                loginLink.addEventListener('click', function(e) {
                    // Only prevent default if there's a custom handler
                    if (!e.defaultPrevented) {
                        window.location.href = loginUrl;
                    }
                });
            }
            
            if (registerLink) {
                registerLink.addEventListener('click', function(e) {
                    // Only prevent default if there's a custom handler
                    if (!e.defaultPrevented) {
                        window.location.href = registerUrl;
                    }
                });
            }
        });
    </script>
</body>
</html>