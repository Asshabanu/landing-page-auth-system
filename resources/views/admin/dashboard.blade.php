@extends('layouts.admin')
@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Properties Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-blue-100 text-blue-600 mr-4">
                <i class="fas fa-building text-xl"></i>
            </div>
            <div>
                <p class="text-3xl font-bold text-gray-800">{{ $totalProperties }}</p>
                <p class="text-gray-500 text-sm">Total Properties</p>
                <div class="flex items-center mt-1">
                    <span class="text-green-500 text-sm font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 12%
                    </span>
                    <span class="text-gray-400 text-xs ml-1">from last month</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Active Listings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-green-100 text-green-600 mr-4">
                <i class="fas fa-clipboard-list text-xl"></i>
            </div>
            <div>
                <p class="text-3xl font-bold text-gray-800">{{ $activeListings }}</p>
                <p class="text-gray-500 text-sm">Active Listings</p>
                <div class="flex items-center mt-1">
                    <span class="text-green-500 text-sm font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 8%
                    </span>
                    <span class="text-gray-400 text-xs ml-1">from last month</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pending Approvals Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-yellow-100 text-yellow-600 mr-4">
                <i class="fas fa-exclamation-circle text-xl"></i>
            </div>
            <div>
                <p class="text-3xl font-bold text-gray-800">{{ $pendingApprovals }}</p>
                <p class="text-gray-500 text-sm">Pending Approvals</p>
                <div class="mt-1">
                    <span class="text-yellow-600 text-sm font-medium">Requires attention</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Total Users Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-indigo-100 text-indigo-600 mr-4">
                <i class="fas fa-users text-xl"></i>
            </div>
            <div>
                <p class="text-3xl font-bold text-gray-800">{{ $totalUsers }}</p>
                <p class="text-gray-500 text-sm">Total Users</p>
                <div class="flex items-center mt-1">
                    <span class="text-green-500 text-sm font-medium">
                        <i class="fas fa-arrow-up mr-1"></i> 5%
                    </span>
                    <span class="text-gray-400 text-xs ml-1">from last month</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Property Status Overview -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-bold text-gray-800">Property Status Overview</h2>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Generate Report</a>
                </div>
            </div>
        </div>
        <div class="h-80">
            <canvas id="propertyChart"></canvas>
        </div>
    </div>
    
    <!-- User Growth -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg font-bold text-gray-800">User Growth</h2>
            <div class="relative">
                <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Generate Report</a>
                </div>
            </div>
        </div>
        <div class="h-64">
            <canvas id="userChart"></canvas>
        </div>
        <div class="flex justify-center mt-4 space-x-4">
            <div class="flex items-center">
                <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                <span class="text-sm text-gray-600">New Users</span>
            </div>
            <div class="flex items-center">
                <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                <span class="text-sm text-gray-600">Returning Users</span>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Recent Activity -->
    <div class="bg-white rounded-xl shadow-md border border-gray-100">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 class="text-lg font-bold text-gray-800">Recent Activity</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                @foreach ($recentActivities as $activity)
                <div class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-3">
                        <i class="fas fa-bell text-blue-600 text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-800">{{ $activity['title'] }}</p>
                        <p class="text-gray-600 text-sm">{{ $activity['description'] }}</p>
                        <p class="text-gray-400 text-xs mt-1">{{ $activity['time'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- Recent Properties -->
    <div class="bg-white rounded-xl shadow-md border border-gray-100">
        <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
            <h2 class="text-lg font-bold text-gray-800">Recent Properties</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Modern Apartment</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$250,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Family House</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$450,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">Luxury Villa</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$1,250,000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-900">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- User Profile Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Profile Card -->
    <div class="bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <h2 class="text-lg font-bold text-gray-800 mb-6">Your Profile</h2>
        <div class="text-center">
            <img src="https://source.unsplash.com/random/150x150?person" alt="Profile" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-white shadow-md">
            <h3 class="text-xl font-bold text-gray-800">{{ Auth::user()->name }}</h3>
            <p class="text-gray-600 mb-2">{{ Auth::user()->email }}</p>
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full mb-4">Administrator</span>
            <p class="text-gray-500 text-sm mb-6">Joined: {{ Auth::user()->created_at->format('M d, Y') }}</p>
            <button class="w-full py-2 px-4 bg-white border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-300">
                <i class="fas fa-user-edit mr-2"></i> Edit Profile
            </button>
        </div>
    </div>
    
    <!-- Property Types Distribution -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-md p-6 border border-gray-100">
        <h2 class="text-lg font-bold text-gray-800 mb-6">Property Types Distribution</h2>
        <div class="space-y-5">
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">Apartment</span>
                    <span class="text-sm font-medium text-gray-700">45%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                </div>
            </div>
            
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">House</span>
                    <span class="text-sm font-medium text-gray-700">30%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-green-600 h-2.5 rounded-full" style="width: 30%"></div>
                </div>
            </div>
            
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">Villa</span>
                    <span class="text-sm font-medium text-gray-700">15%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 15%"></div>
                </div>
            </div>
            
            <div>
                <div class="flex justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">Other</span>
                    <span class="text-sm font-medium text-gray-700">10%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 10%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Property Status Chart
    const propertyCtx = document.getElementById('propertyChart').getContext('2d');
    const propertyChart = new Chart(propertyCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                label: 'Properties',
                data: [65, 78, 90, 81, 96, 105, 134, 156, 186],
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 3,
                pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(59, 130, 246, 1)',
                pointRadius: 5,
                pointHoverRadius: 7,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    titleColor: '#1f2937',
                    bodyColor: '#1f2937',
                    borderColor: '#e5e7eb',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: false,
                    boxPadding: 6,
                    usePointStyle: true,
                    callbacks: {
                        label: function(context) {
                            return 'Properties: ' + context.parsed.y;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(229, 231, 235, 0.5)',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 11
                        },
                        padding: 10
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 11
                        },
                        padding: 10
                    }
                }
            }
        }
    });
    
    // User Growth Chart
    const userCtx = document.getElementById('userChart').getContext('2d');
    const userChart = new Chart(userCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [
                {
                    label: 'New Users',
                    data: [30, 45, 35, 50, 40, 60, 55, 70, 65],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    borderRadius: 6,
                    barThickness: 12,
                    categoryPercentage: 0.7,
                    barPercentage: 0.7
                },
                {
                    label: 'Returning Users',
                    data: [80, 90, 85, 95, 100, 110, 105, 115, 120],
                    backgroundColor: 'rgba(16, 185, 129, 0.8)',
                    borderColor: 'rgba(16, 185, 129, 1)',
                    borderWidth: 1,
                    borderRadius: 6,
                    barThickness: 12,
                    categoryPercentage: 0.7,
                    barPercentage: 0.7
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(255, 255, 255, 0.95)',
                    titleColor: '#1f2937',
                    bodyColor: '#1f2937',
                    borderColor: '#e5e7eb',
                    borderWidth: 1,
                    padding: 10,
                    displayColors: true,
                    boxPadding: 6,
                    usePointStyle: true,
                    bodyFont: {
                        size: 12
                    },
                    titleFont: {
                        size: 13
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(229, 231, 235, 0.5)',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 10
                        },
                        padding: 8
                    }
                },
                x: {
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6b7280',
                        font: {
                            size: 10
                        },
                        padding: 8
                    }
                }
            },
            layout: {
                padding: {
                    top: 10,
                    bottom: 10,
                    left: 10,
                    right: 10
                }
            }
        }
    });
</script>
@endpush