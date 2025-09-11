@extends('layouts.user')
@section('title', 'User Dashboard')
@section('content')
<div class="container mx-auto px-4 py-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
        <!-- My Properties -->
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-5 transition-all duration-300 hover:shadow-lg border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 text-blue-600 rounded-xl">
                <i class="fas fa-home text-2xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">3</p>
                <p class="text-gray-500">My Properties</p>
                <p class="text-green-500 text-sm flex items-center gap-1 mt-1">
                    <i class="fas fa-arrow-up text-xs"></i> 1 new this month
                </p>
            </div>
        </div>
        
        <!-- Active Bookings -->
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-5 transition-all duration-300 hover:shadow-lg border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 text-green-600 rounded-xl">
                <i class="fas fa-calendar-check text-2xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">2</p>
                <p class="text-gray-500">Active Bookings</p>
                <p class="text-green-500 text-sm flex items-center gap-1 mt-1">
                    <i class="fas fa-arrow-up text-xs"></i> 1 upcoming
                </p>
            </div>
        </div>
        
        <!-- Avg Rating -->
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-5 transition-all duration-300 hover:shadow-lg border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 text-yellow-500 rounded-xl">
                <i class="fas fa-star text-2xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">4.8</p>
                <p class="text-gray-500">Avg Rating</p>
                <p class="text-gray-400 text-sm">Based on 24 reviews</p>
            </div>
        </div>
        
        <!-- Total Earnings -->
        <div class="bg-white rounded-xl shadow-md p-6 flex items-center gap-5 transition-all duration-300 hover:shadow-lg border border-gray-100">
            <div class="w-14 h-14 flex items-center justify-center bg-indigo-100 text-indigo-600 rounded-xl">
                <i class="fas fa-wallet text-2xl"></i>
            </div>
            <div>
                <p class="text-2xl font-bold text-gray-800">$2,450</p>
                <p class="text-gray-500">Total Earnings</p>
                <p class="text-green-500 text-sm flex items-center gap-1 mt-1">
                    <i class="fas fa-arrow-up text-xs"></i> 12% this month
                </p>
            </div>
        </div>
    </div>
    
    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <!-- Booking History Chart -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 flex flex-col border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h5 class="font-semibold text-lg text-gray-800">Booking History</h5>
                <div class="relative inline-block text-left">
                    <button id="dropdownMenuButton1" class="text-gray-500 hover:text-gray-700 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
            <div class="flex-1">
                <canvas id="userBookingChart" class="w-full h-64"></canvas>
            </div>
        </div>
        
        <!-- Property Views Chart -->
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h5 class="font-semibold text-lg text-gray-800">Property Views</h5>
                <div class="relative inline-block text-left">
                    <button id="dropdownMenuButton2" class="text-gray-500 hover:text-gray-700 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
            </div>
            <div class="flex-1">
                <canvas id="userViewsChart" class="w-full h-44"></canvas>
            </div>
            <div class="flex justify-center mt-4 gap-6 text-sm text-gray-500">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-blue-500 rounded-sm"></span> This Month
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-green-500 rounded-sm"></span> Last Month
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Recent Bookings -->
        <div class="bg-white rounded-xl shadow-md p-6 flex flex-col border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h5 class="font-semibold text-lg text-gray-800">Recent Bookings</h5>
                <a href="{{ route('user.bookings') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-300">View All</a>
            </div>
            <div class="space-y-5">
                <div class="border-b pb-4 last:border-0 last:pb-0">
                    <h6 class="font-semibold text-gray-800">Modern Apartment</h6>
                    <p class="text-gray-500 text-sm mt-1">Booked by John Smith - Oct 15-20, 2023</p>
                    <p class="text-gray-400 text-xs mt-2">2 days ago</p>
                </div>
                <div class="border-b pb-4 last:border-0 last:pb-0">
                    <h6 class="font-semibold text-gray-800">Family House</h6>
                    <p class="text-gray-500 text-sm mt-1">Booked by Sarah Johnson - Sep 25-30, 2023</p>
                    <p class="text-gray-400 text-xs mt-2">1 week ago</p>
                </div>
                <div>
                    <h6 class="font-semibold text-gray-800">Luxury Villa</h6>
                    <p class="text-gray-500 text-sm mt-1">Booked by Michael Brown - Sep 10-17, 2023</p>
                    <p class="text-gray-400 text-xs mt-2">2 weeks ago</p>
                </div>
            </div>
        </div>
        
        <!-- My Properties Table -->
        <div class="bg-white rounded-xl shadow-md p-6 overflow-x-auto border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h5 class="font-semibold text-lg text-gray-800">My Properties</h5>
                <a href="{{ route('user.properties') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-300">View All</a>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price/Night</th>
                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-4 py-3 font-medium text-gray-900">Modern Apartment</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-900">$125</td>
                        <td class="px-4 py-3 space-x-3">
                            <a href="{{ route('user.properties.show', 1) }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('user.properties.edit', 1) }}" class="text-gray-600 hover:text-gray-800 transition-colors duration-300">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-4 py-3 font-medium text-gray-900">Family House</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Booked
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-900">$185</td>
                        <td class="px-4 py-3 space-x-3">
                            <a href="{{ route('user.properties.show', 2) }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('user.properties.edit', 2) }}" class="text-gray-600 hover:text-gray-800 transition-colors duration-300">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-4 py-3 font-medium text-gray-900">Luxury Villa</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Available
                            </span>
                        </td>
                        <td class="px-4 py-3 font-medium text-gray-900">$450</td>
                        <td class="px-4 py-3 space-x-3">
                            <a href="{{ route('user.properties.show', 3) }}" class="text-blue-600 hover:text-blue-800 transition-colors duration-300">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('user.properties.edit', 3) }}" class="text-gray-600 hover:text-gray-800 transition-colors duration-300">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- User Profile & Reviews -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Profile -->
        <div class="bg-white rounded-xl shadow-md p-6 text-center border border-gray-100">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" class="mx-auto rounded-full mb-4 w-36 h-36 object-cover border-4 border-white shadow-md" alt="Profile">
            <h5 class="font-semibold text-lg text-gray-800">{{ Auth::user()->name }}</h5>
            <p class="text-gray-500 mb-3">{{ Auth::user()->email }}</p>
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium mb-4 inline-block">Property Owner</span>
            <p class="text-gray-400 text-sm mb-5">Member since: {{ Auth::user()->created_at->format('M d, Y') }}</p>
            <a href="{{ route('user.profile') }}" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-800 border border-blue-600 px-4 py-2 rounded-lg font-medium transition-all duration-300 hover:bg-blue-50">
                <i class="fas fa-user-edit"></i> Edit Profile
            </a>
        </div>
        
        <!-- Reviews -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h5 class="font-semibold text-lg text-gray-800">Recent Reviews</h5>
                <a href="{{ route('user.reviews') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition-colors duration-300">View All</a>
            </div>
            <div class="space-y-5">
                <!-- Review Item -->
                <div class="border-b pb-5 last:border-0 last:pb-0">
                    <div class="flex justify-between items-center mb-3">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-full w-12 h-12 object-cover" alt="">
                            <div>
                                <div class="font-semibold text-gray-800">John Smith</div>
                                <div class="text-gray-400 text-sm">Modern Apartment</div>
                            </div>
                        </div>
                        <div class="text-yellow-500">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">Amazing place! Very clean and well-maintained. The host was very responsive and helpful.</p>
                    <p class="text-gray-400 text-xs">2 days ago</p>
                </div>
                
                <div class="border-b pb-5 last:border-0 last:pb-0">
                    <div class="flex justify-between items-center mb-3">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-full w-12 h-12 object-cover" alt="">
                            <div>
                                <div class="font-semibold text-gray-800">Sarah Johnson</div>
                                <div class="text-gray-400 text-sm">Family House</div>
                            </div>
                        </div>
                        <div class="text-yellow-500">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">Great location and spacious. Could use some updates in the kitchen but overall good value.</p>
                    <p class="text-gray-400 text-xs">1 week ago</p>
                </div>
                
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <div class="flex items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-full w-12 h-12 object-cover" alt="">
                            <div>
                                <div class="font-semibold text-gray-800">Michael Brown</div>
                                <div class="text-gray-400 text-sm">Luxury Villa</div>
                            </div>
                        </div>
                        <div class="text-yellow-500">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">Absolutely stunning villa! Perfect for our family vacation. The pool was amazing and the view was breathtaking.</p>
                    <p class="text-gray-400 text-xs">2 weeks ago</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Booking History Chart
    if (document.getElementById('userBookingChart')) {
        const ctx = document.getElementById('userBookingChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
                datasets: [{
                    label: 'Bookings',
                    data: [2,3,1,4,3,5,4,6,5],
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 2,
                    pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                    pointBorderColor: '#fff',
                    tension: 0.3,
                    fill: true
                }]
            },
            options: { 
                responsive:true, 
                maintainAspectRatio:false, 
                plugins:{legend:{display:false}},
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
    
    // Property Views Chart
    if (document.getElementById('userViewsChart')) {
        const ctx = document.getElementById('userViewsChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep'],
                datasets: [
                    { 
                        label:'This Month', 
                        data:[120,150,100,180,160,200,190,220,210], 
                        backgroundColor:'rgba(59, 130, 246, 0.8)' 
                    },
                    { 
                        label:'Last Month', 
                        data:[100,120,90,150,140,180,170,190,180], 
                        backgroundColor:'rgba(16, 185, 129, 0.8)' 
                    }
                ]
            },
            options: { 
                responsive:true, 
                maintainAspectRatio:false, 
                plugins:{legend:{display:false}},
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    }
});
</script>
@endpush