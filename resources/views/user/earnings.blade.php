@extends('layouts.user')
@section('title', 'My Earnings')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Track your property rental income and payment status</p>
    </div>
    <div class="mt-4 md:mt-0 flex flex-wrap gap-3">
        <button class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-download mr-2"></i> Download Report
        </button>
        <button class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
            <i class="fas fa-filter mr-2"></i> Advanced Filters
        </button>
    </div>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Total Earnings Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Earnings</h5>
                <h2 class="text-3xl font-bold text-gray-800">${{ number_format($totalEarnings ?? 2450, 2) }}</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>12% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-wallet text-blue-600 text-xl"></i>
            </div>
        </div>
        <!-- Mini Chart -->
        <div class="mt-4 h-16">
            <canvas id="totalEarningsChart"></canvas>
        </div>
    </div>
    
    <!-- This Month Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">This Month</h5>
                <h2 class="text-3xl font-bold text-gray-800">${{ number_format($monthlyEarnings ?? 850, 2) }}</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>8% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-calendar-check text-green-600 text-xl"></i>
            </div>
        </div>
        <!-- Progress Bar -->
        <div class="mt-4">
            <div class="flex justify-between text-xs text-gray-600 mb-1">
                <span>Monthly Goal</span>
                <span>85%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
            </div>
        </div>
    </div>
    
    <!-- Pending Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Pending</h5>
                <h2 class="text-3xl font-bold text-gray-800">${{ number_format($pendingEarnings ?? 350, 2) }}</h2>
                <div class="flex items-center text-sm text-yellow-600 mt-2">
                    <i class="fas fa-clock mr-1"></i>
                    <span>Awaiting confirmation</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-hourglass-half text-yellow-600 text-xl"></i>
            </div>
        </div>
        <!-- Pending Items -->
        <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between text-xs">
                <span class="text-gray-600">Modern Apartment</span>
                <span class="font-medium">$125</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <span class="text-gray-600">Family House</span>
                <span class="font-medium">$225</span>
            </div>
        </div>
    </div>
</div>

<!-- Earnings Chart -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 transition-all duration-300 hover:shadow-lg border border-gray-100">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h3 class="text-lg font-bold text-gray-800">Earnings Overview</h3>
            <p class="text-gray-600 text-sm">Monthly earnings for the current year</p>
        </div>
        <div class="flex space-x-2 mt-4 md:mt-0">
            <button class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors duration-300">
                Year
            </button>
            <button class="px-4 py-2 text-sm bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition-colors duration-300">
                Quarter
            </button>
            <button class="px-4 py-2 text-sm bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition-colors duration-300">
                Month
            </button>
        </div>
    </div>
    <div class="h-96">
        <canvas id="earningsChart"></canvas>
    </div>
    <!-- Chart Legend -->
    <div class="flex justify-center mt-4 space-x-6">
        <div class="flex items-center">
            <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
            <span class="text-sm text-gray-600">Earnings</span>
        </div>
        <div class="flex items-center">
            <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
            <span class="text-sm text-gray-600">Target</span>
        </div>
    </div>
</div>

<!-- Quick Stats Row -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Avg. Daily Rate</h5>
                <h2 class="text-3xl font-bold text-gray-800">$82</h2>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                    <i class="fas fa-chart-line mr-1"></i>
                    <span>Per day</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-purple-100 rounded-xl">
                <i class="fas fa-chart-line text-purple-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Occupancy Rate</h5>
                <h2 class="text-3xl font-bold text-gray-800">78%</h2>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                    <i class="fas fa-percentage mr-1"></i>
                    <span>This month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-pink-100 rounded-xl">
                <i class="fas fa-percentage text-pink-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Bookings</h5>
                <h2 class="text-3xl font-bold text-gray-800">24</h2>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                    <i class="fas fa-calendar-check mr-1"></i>
                    <span>This month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-calendar-check text-yellow-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Revenue Growth</h5>
                <h2 class="text-3xl font-bold text-gray-800">+24%</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>From last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-arrow-trend-up text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Earnings Table -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 mb-8">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
            <h5 class="text-lg font-semibold text-gray-800">Earnings History</h5>
            <p class="text-gray-600 text-sm">Detailed view of all your earnings</p>
        </div>
        <div class="mt-4 md:mt-0 flex items-center space-x-2">
            <span class="text-sm text-gray-600">Show</span>
            <select class="px-3 py-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300 text-sm">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
            <span class="text-sm text-gray-600">entries</span>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @php
                    // Initialize earnings variable if not passed from controller
                    $earnings = $earnings ?? collect([
                        (object)[
                            'id' => 1,
                            'date' => '2023-10-15',
                            'description' => 'Modern Apartment Booking',
                            'amount' => 625,
                            'status' => 'completed',
                            'booking_id' => 'BK001'
                        ],
                        (object)[
                            'id' => 2,
                            'date' => '2023-10-10',
                            'description' => 'Family House Booking',
                            'amount' => 925,
                            'status' => 'completed',
                            'booking_id' => 'BK002'
                        ],
                        (object)[
                            'id' => 3,
                            'date' => '2023-10-05',
                            'description' => 'Luxury Villa Booking',
                            'amount' => 1350,
                            'status' => 'pending',
                            'booking_id' => 'BK003'
                        ]
                    ]);
                    
                    // Convert to Laravel Collection if it's an array
                    if (is_array($earnings)) {
                        $earnings = collect($earnings);
                    }
                @endphp
                @forelse ($earnings as $earning)
                    <tr class="hover:bg-gray-50 transition-colors duration-200">
                        <td class="px-6 py-4">
                            <div class="text-gray-700 font-medium">{{ date('M j, Y', strtotime($earning->date)) }}</div>
                            <div class="text-xs text-gray-500">{{ date('D', strtotime($earning->date)) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div>
                                <div class="font-medium text-gray-900">{{ $earning->description }}</div>
                                <div class="text-sm text-gray-500 flex items-center mt-1">
                                    <i class="fas fa-hashtag mr-1"></i>
                                    Booking #{{ $earning->booking_id ?? 'N/A' }}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-lg font-bold text-gray-900">${{ number_format($earning->amount, 2) }}</div>
                            <div class="text-xs text-gray-500">Net amount</div>
                        </td>
                        <td class="px-6 py-4">
                            @if($earning->status === 'completed')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i> Completed
                                </span>
                            @elseif($earning->status === 'pending')
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-clock mr-1"></i> Pending
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <i class="fas fa-minus-circle mr-1"></i> {{ ucfirst($earning->status) }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="text-gray-600 hover:text-gray-800 transition-colors duration-300 p-2 rounded-full hover:bg-gray-50" title="Download Receipt">
                                    <i class="fas fa-download"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Generate Invoice">
                                    <i class="fas fa-file-invoice"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-16 text-gray-500">
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-inbox text-2xl text-gray-400"></i>
                                </div>
                                <p class="text-lg font-medium text-gray-600">No earnings found</p>
                                <p class="text-sm text-gray-500 mt-1">Start earning by listing your properties</p>
                                <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                                    List Property
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center">
        <div class="text-sm text-gray-700 mb-4 md:mb-0">
            Showing <span class="font-medium">1</span> to <span class="font-medium">{{ $earnings->count() }}</span> of <span class="font-medium">{{ $earnings->count() }}</span> results
        </div>
        <nav class="inline-flex rounded-lg shadow-sm overflow-hidden">
            <button class="px-4 py-2 border-r border-gray-200 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                <i class="fas fa-chevron-left mr-1"></i> Previous
            </button>
            <button class="px-4 py-2 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700">
                1
            </button>
            <button class="px-4 py-2 border-l border-gray-200 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                2
            </button>
            <button class="px-4 py-2 border-l border-gray-200 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                3
            </button>
            <button class="px-4 py-2 border-l border-gray-200 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-r-lg">
                Next <i class="fas fa-chevron-right ml-1"></i>
            </button>
        </nav>
    </div>
</div>

<!-- Tips and Insights -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Earnings Tips -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-lightbulb text-blue-600 text-xl"></i>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-800 mb-3">Maximize Your Earnings</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                        <p class="text-gray-700">Update your property photos regularly to show seasonal appeal</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                        <p class="text-gray-700">Adjust pricing based on demand and local events</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                        <p class="text-gray-700">Offer discounts for longer stays to attract more bookings</p>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-check-circle text-green-500 mt-0.5 mr-2"></i>
                        <p class="text-gray-700">Respond quickly to guest inquiries and reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Performance Metrics -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-start">
            <div class="flex-shrink-0">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                </div>
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-bold text-gray-800 mb-3">Performance Metrics</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-xs text-gray-500">Avg. Rating</p>
                        <p class="text-lg font-bold text-gray-800">4.8</p>
                        <div class="flex text-yellow-400 text-xs">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-xs text-gray-500">Response Time</p>
                        <p class="text-lg font-bold text-gray-800">2.3 hrs</p>
                        <p class="text-xs text-green-600">Excellent</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-xs text-gray-500">Cancellation Rate</p>
                        <p class="text-lg font-bold text-gray-800">8%</p>
                        <p class="text-xs text-green-600">Low</p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <p class="text-xs text-gray-500">Repeat Guests</p>
                        <p class="text-lg font-bold text-gray-800">42%</p>
                        <p class="text-xs text-blue-600">Good</p>
                    </div>
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
    // Main Earnings Chart
    if (document.getElementById('earningsChart')) {
        const ctx = document.getElementById('earningsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Earnings',
                        data: [1200, 1900, 1500, 2100, 2400, 2200, 2600, 2300, 2800, 2500, 2900, 3200],
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderColor: 'rgba(59, 130, 246, 1)',
                        borderWidth: 3,
                        pointBackgroundColor: 'rgba(59, 130, 246, 1)',
                        pointBorderColor: '#fff',
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        tension: 0.4,
                        fill: true
                    },
                    {
                        label: 'Target',
                        data: [1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500, 1500],
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderColor: 'rgba(16, 185, 129, 1)',
                        borderWidth: 2,
                        borderDash: [5, 5],
                        pointRadius: 0,
                        tension: 0,
                        fill: false
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
                        padding: 12,
                        displayColors: true,
                        callbacks: {
                            label: function(context) {
                                return '$' + context.parsed.y;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value;
                            },
                            font: {
                                size: 12
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: 12
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });
    }
    
    // Mini Chart for Total Earnings
    if (document.getElementById('totalEarningsChart')) {
        const ctx = document.getElementById('totalEarningsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', '', '', '', ''],
                datasets: [{
                    data: [30, 45, 35, 50, 40, 60, 55],
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 2,
                    pointRadius: 0,
                    tension: 0.4,
                    fill: false
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
                        enabled: false
                    }
                },
                scales: {
                    x: {
                        display: false
                    },
                    y: {
                        display: false
                    }
                }
            }
        });
    }
});
</script>
@endpush