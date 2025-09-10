@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-12 px-6">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">
                Welcome to <span class="text-gradient">{{ config('app.name', 'Laravel') }}</span>
            </h1>
            <p class="text-gray-600 text-lg mb-6">
                Find your perfect home with our advanced search filters and intuitive interface.
            </p>

            @guest
                <div class="space-x-4">
                    <a href="{{ route('login') }}" class="btn-primary px-5 py-2 rounded-lg shadow-md">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary px-5 py-2 rounded-lg shadow-md">Register</a>
                    @endif
                </div>
            @else
                <a href="{{ url('/dashboard') }}" class="btn-primary px-6 py-2 rounded-lg shadow-md">
                    Go to Dashboard
                </a>
            @endguest
        </div>

        <!-- Feature Section -->
        <div class="grid md:grid-cols-3 gap-8 mt-16">
            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <i class="fas fa-search text-3xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Advanced Search</h3>
                <p class="text-gray-600">Use filters to quickly find homes that match your preferences.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <i class="fas fa-map-marked-alt text-3xl text-green-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Interactive Maps</h3>
                <p class="text-gray-600">Explore properties with integrated maps and nearby facilities.</p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <i class="fas fa-heart text-3xl text-red-500 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Save Favorites</h3>
                <p class="text-gray-600">Bookmark your favorite homes and access them anytime.</p>
            </div>
        </div>
    </div>
@endsection
