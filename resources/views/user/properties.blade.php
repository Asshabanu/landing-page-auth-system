@extends('layouts.user')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage your property listings and bookings</p>
    </div>
    <a href="{{ url('/user/properties/create') }}" 
       class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-plus mr-2"></i> Add New Property
    </a>
</div>
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @php
        $stats = [
            ['icon'=>'fas fa-building', 'value'=>3, 'label'=>'Total Properties', 'change'=>'1 new this month', 'bg'=>'blue', 'text'=>'blue-600', 'iconBg'=>'blue-100'],
            ['icon'=>'fas fa-check-circle', 'value'=>2, 'label'=>'Available', 'change'=>'Available now', 'bg'=>'green', 'text'=>'green-600', 'iconBg'=>'green-100'],
            ['icon'=>'fas fa-calendar-check', 'value'=>1, 'label'=>'Booked', 'change'=>'Currently occupied', 'bg'=>'yellow', 'text'=>'yellow-600', 'iconBg'=>'yellow-100'],
            ['icon'=>'fas fa-eye', 'value'=>1245, 'label'=>'Total Views', 'change'=>'12% this month', 'bg'=>'indigo', 'text'=>'indigo-600', 'iconBg'=>'indigo-100'],
        ];
    @endphp
    @foreach($stats as $stat)
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100 hover:-translate-y-1">
        <div class="flex items-center">
            <div class="w-12 h-12 flex items-center justify-center bg-{{ $stat['iconBg'] }} rounded-lg mr-4">
                <i class="{{ $stat['icon'] }} text-{{ $stat['text'] }} text-xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">{{ $stat['value'] }}</p>
                <p class="text-gray-600 text-sm">{{ $stat['label'] }}</p>
                <p class="text-{{ $stat['text'] }} text-xs mt-1 flex items-center">
                    <i class="fas fa-arrow-up mr-1"></i> {{ $stat['change'] }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Filters and Search -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100">
    <form method="GET" action="{{ url('/user/properties') }}">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            <div class="md:col-span-2">
                <div class="relative">
                    <input type="text" name="search" value="{{ request('search') }}" 
                           class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" 
                           placeholder="Search properties...">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
            </div>
            <div>
                <select name="type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option value="">All Types</option>
                    <option value="Apartment" {{ request('type')=='Apartment'?'selected':'' }}>Apartment</option>
                    <option value="House" {{ request('type')=='House'?'selected':'' }}>House</option>
                    <option value="Villa" {{ request('type')=='Villa'?'selected':'' }}>Villa</option>
                    <option value="Commercial" {{ request('type')=='Commercial'?'selected':'' }}>Commercial</option>
                </select>
            </div>
            <div>
                <select name="status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option value="">All Status</option>
                    <option value="Available" {{ request('status')=='Available'?'selected':'' }}>Available</option>
                    <option value="Booked" {{ request('status')=='Booked'?'selected':'' }}>Booked</option>
                    <option value="Maintenance" {{ request('status')=='Maintenance'?'selected':'' }}>Maintenance</option>
                </select>
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                    <i class="fas fa-filter mr-2"></i> Filter
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Quick Actions -->
<div class="flex flex-wrap gap-3 mb-6">
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-download mr-2"></i> Export Properties
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-calendar-alt mr-2"></i> Booking Calendar
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-chart-bar mr-2"></i> Analytics
    </button>
</div>

<!-- Properties Grid -->
@php
    // Initialize properties variable if not passed from controller
    $properties = $properties ?? collect([]);
@endphp

@if($properties->count() > 0)
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($properties as $property)
    <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl border border-gray-100 hover:-translate-y-1">
        <div class="relative">
            <img src="{{ $property->image_url ?? 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80' }}" 
                 class="w-full h-48 object-cover" alt="{{ $property->title }}">
            <div class="absolute top-4 right-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ strtolower($property->status)=='available'?'bg-green-100 text-green-800':'bg-yellow-100 text-yellow-800' }}">
                    {{ $property->status }}
                </span>
            </div>
            <!-- Quick actions overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-0 hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center">
                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300 flex space-x-3">
                    <a href="{{ url('/user/properties/' . $property->id) }}" 
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-blue-600 hover:bg-blue-100 transition-colors duration-300">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ url('/user/properties/' . $property->id . '/edit') }}" 
                       class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-gray-600 hover:bg-gray-100 transition-colors duration-300">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-red-600 hover:bg-red-100 transition-colors duration-300">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="flex justify-between items-start mb-2">
                <h5 class="text-xl font-bold text-gray-800">{{ $property->title }}</h5>
                <div class="flex items-center bg-blue-50 px-2 py-1 rounded">
                    <i class="fas fa-star text-yellow-500 mr-1"></i>
                    <span class="text-sm font-medium text-gray-700">{{ $property->rating ?? '4.5' }}</span>
                </div>
            </div>
            <p class="text-gray-600 text-sm mb-4 flex items-center">
                <i class="fas fa-map-marker-alt mr-2 text-gray-500"></i> {{ $property->location ?? 'Downtown' }}
            </p>
            <div class="flex justify-between items-center mb-4">
                <div class="text-blue-600 font-bold text-lg">${{ number_format($property->price ?? 125) }}<span class="text-sm font-normal text-gray-600">/night</span></div>
                <div class="flex space-x-3">
                    <span class="text-gray-600 text-sm flex items-center">
                        <i class="fas fa-bed mr-1 text-gray-500"></i> {{ $property->beds ?? 3 }}
                    </span>
                    <span class="text-gray-600 text-sm flex items-center">
                        <i class="fas fa-bath mr-1 text-gray-500"></i> {{ $property->baths ?? 2 }}
                    </span>
                </div>
            </div>
            <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                <div class="flex space-x-2">
                    <a href="{{ url('/user/properties/' . $property->id) }}" 
                       class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center transition-colors duration-300">
                        <i class="fas fa-eye mr-1"></i> View
                    </a>
                    <a href="{{ url('/user/properties/' . $property->id . '/edit') }}" 
                       class="text-gray-600 hover:text-gray-800 text-sm font-medium flex items-center transition-colors duration-300">
                        <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                </div>
                <span class="text-xs text-gray-500">Updated {{ \Carbon\Carbon::parse($property->updated_at ?? now())->diffForHumans() }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Pagination -->
<div class="mt-8 flex justify-center">
    <div class="inline-flex rounded-md shadow-sm -space-x-px">
        {{ $properties->links(function($links) {
            return $links->url 
                ? '<a href="' . $links->url . '" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">' . $links->label . '</a>' 
                : '<span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-500">' . $links->label . '</span>';
        }) }}
    </div>
</div>
@else
<!-- Empty State -->
<div class="bg-white rounded-xl shadow-md p-12 text-center border border-gray-100">
    <div class="w-16 h-16 mx-auto bg-blue-100 rounded-full flex items-center justify-center mb-4">
        <i class="fas fa-home text-blue-600 text-2xl"></i>
    </div>
    <h3 class="text-lg font-medium text-gray-900 mb-2">No properties found</h3>
    <p class="text-gray-500 mb-6">Get started by adding your first property listing.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-3">
        <a href="{{ url('/user/properties/create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-plus mr-2"></i> Add Property
        </a>
        <button class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-300">
            <i class="fas fa-question-circle mr-2"></i> Learn More
        </button>
    </div>
</div>

<!-- Sample Properties for Demo -->
<div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900 mb-4">Featured Properties</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 class="w-full h-48 object-cover" alt="Modern Apartment">
            <div class="p-6">
                <h5 class="text-xl font-bold text-gray-800 mb-2">Modern Apartment</h5>
                <p class="text-gray-600 text-sm mb-4 flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-gray-500"></i> Downtown
                </p>
                <div class="flex justify-between items-center mb-4">
                    <div class="text-blue-600 font-bold text-lg">$125<span class="text-sm font-normal text-gray-600">/night</span></div>
                    <div class="flex items-center bg-blue-50 px-2 py-1 rounded">
                        <i class="fas fa-star text-yellow-500 mr-1"></i>
                        <span class="text-sm font-medium text-gray-700">4.5</span>
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div class="flex space-x-2">
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bed mr-1 text-gray-500"></i> 3
                        </span>
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bath mr-1 text-gray-500"></i> 2
                        </span>
                    </div>
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 class="w-full h-48 object-cover" alt="Family House">
            <div class="p-6">
                <h5 class="text-xl font-bold text-gray-800 mb-2">Family House</h5>
                <p class="text-gray-600 text-sm mb-4 flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-gray-500"></i> Suburbs
                </p>
                <div class="flex justify-between items-center mb-4">
                    <div class="text-blue-600 font-bold text-lg">$185<span class="text-sm font-normal text-gray-600">/night</span></div>
                    <div class="flex items-center bg-blue-50 px-2 py-1 rounded">
                        <i class="fas fa-star text-yellow-500 mr-1"></i>
                        <span class="text-sm font-medium text-gray-700">4.8</span>
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div class="flex space-x-2">
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bed mr-1 text-gray-500"></i> 4
                        </span>
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bath mr-1 text-gray-500"></i> 3
                        </span>
                    </div>
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        Booked
                    </span>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl border border-gray-100">
            <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" 
                 class="w-full h-48 object-cover" alt="Luxury Villa">
            <div class="p-6">
                <h5 class="text-xl font-bold text-gray-800 mb-2">Luxury Villa</h5>
                <p class="text-gray-600 text-sm mb-4 flex items-center">
                    <i class="fas fa-map-marker-alt mr-2 text-gray-500"></i> Hillside
                </p>
                <div class="flex justify-between items-center mb-4">
                    <div class="text-blue-600 font-bold text-lg">$450<span class="text-sm font-normal text-gray-600">/night</span></div>
                    <div class="flex items-center bg-blue-50 px-2 py-1 rounded">
                        <i class="fas fa-star text-yellow-500 mr-1"></i>
                        <span class="text-sm font-medium text-gray-700">5.0</span>
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div class="flex space-x-2">
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bed mr-1 text-gray-500"></i> 5
                        </span>
                        <span class="text-gray-600 text-sm flex items-center">
                            <i class="fas fa-bath mr-1 text-gray-500"></i> 4
                        </span>
                    </div>
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Available
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Quick Help Section -->
<div class="mt-8 bg-blue-50 rounded-xl p-6 border border-blue-100">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <i class="fas fa-info-circle text-blue-600 text-xl"></i>
        </div>
        <div class="ml-4">
            <h3 class="text-lg font-medium text-blue-800">Need help with your properties?</h3>
            <div class="mt-2 text-blue-700">
                <p>Check out our resources to help you get started:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">How to add your first property</a></li>
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Property listing best practices</a></li>
                    <li><a href="#" class="text-blue-600 hover:text-blue-800 underline">Managing bookings and inquiries</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection