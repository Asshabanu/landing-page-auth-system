@extends('layouts.admin')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage property reviews and ratings</p>
    </div>
    <a href="#" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-download mr-2"></i> Export Reviews
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Average Rating Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Average Rating</h5>
                <h2 class="text-3xl font-bold text-gray-800">4.6</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>0.2 from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-star text-yellow-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Total Reviews Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Reviews</h5>
                <h2 class="text-3xl font-bold text-gray-800">1,842</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>12% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-comments text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Pending Approval Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Pending Approval</h5>
                <h2 class="text-3xl font-bold text-gray-800">24</h2>
                <div class="flex items-center text-sm text-yellow-600 mt-2">
                    <i class="fas fa-clock mr-1"></i>
                    <span>Awaiting review</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-clock text-yellow-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Reported Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Reported</h5>
                <h2 class="text-3xl font-bold text-gray-800">12</h2>
                <div class="flex items-center text-sm text-red-600 mt-2">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    <span>Requires attention</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-red-100 rounded-xl">
                <i class="fas fa-flag text-red-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Rating Distribution -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 transition-all duration-300 hover:shadow-lg border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-bold text-gray-800">Rating Distribution</h3>
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
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-4">
            <!-- 5 Stars -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">5 stars</span>
                    <span class="text-sm font-medium text-gray-700">65%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-green-600 h-2.5 rounded-full" style="width: 65%"></div>
                </div>
            </div>
            
            <!-- 4 Stars -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">4 stars</span>
                    <span class="text-sm font-medium text-gray-700">20%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 20%"></div>
                </div>
            </div>
            
            <!-- 3 Stars -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">3 stars</span>
                    <span class="text-sm font-medium text-gray-700">10%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 10%"></div>
                </div>
            </div>
            
            <!-- 2 Stars -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">2 stars</span>
                    <span class="text-sm font-medium text-gray-700">3%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 3%"></div>
                </div>
            </div>
            
            <!-- 1 Star -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <span class="text-sm font-medium text-gray-700">1 star</span>
                    <span class="text-sm font-medium text-gray-700">2%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-red-600 h-2.5 rounded-full" style="width: 2%"></div>
                </div>
            </div>
        </div>
        
        <!-- Average Rating Display -->
        <div class="flex flex-col items-center justify-center bg-gray-50 rounded-xl p-6">
            <div class="text-4xl font-bold text-blue-600 mb-2">4.6</div>
            <div class="flex mb-3">
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star text-yellow-400"></i>
                <i class="fas fa-star-half-alt text-yellow-400"></i>
            </div>
            <div class="text-gray-600 text-sm">Based on 1,842 reviews</div>
        </div>
    </div>
</div>

<!-- Quick Actions -->
<div class="flex flex-wrap gap-3 mb-6">
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-filter mr-2"></i> Filter Reviews
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-check-double mr-2"></i> Approve All
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-bell mr-2"></i> Notifications
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-chart-bar mr-2"></i> Analytics
    </button>
</div>

<!-- Reviews Table -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
            <h5 class="text-lg font-semibold text-gray-800">Reviews List</h5>
            <p class="text-gray-600 text-sm">Manage all property reviews and ratings</p>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviewer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rating</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comment</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person5" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                <div class="text-sm text-gray-500">john.smith@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Modern Apartment</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <div class="truncate max-w-xs" title="Amazing apartment! Very clean and well-maintained.">
                            Amazing apartment! Very clean and well-maintained.
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-15</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Approved
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person6" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                <div class="text-sm text-gray-500">sarah.j@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Luxury Villa</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <div class="truncate max-w-xs" title="Great location but could use some updates.">
                            Great location but could use some updates.
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-14</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            <i class="fas fa-clock mr-1"></i> Pending
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-300 p-2 rounded-full hover:bg-green-50" title="Approve">
                                <i class="fas fa-check"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person7" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                <div class="text-sm text-gray-500">michael.b@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Family House</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <div class="truncate max-w-xs" title="Perfect for families! Kids loved the backyard.">
                            Perfect for families! Kids loved the backyard.
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-12</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Approved
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person8" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                <div class="text-sm text-gray-500">emily.d@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Beach House</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">
                        <div class="truncate max-w-xs" title="Not as described. Very disappointed.">
                            Not as described. Very disappointed.
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-10</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <i class="fas fa-exclamation-circle mr-1"></i> Reported
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center">
        <div class="text-sm text-gray-700 mb-4 md:mb-0">
            Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">1,842</span> entries
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

<!-- Reviews Summary Card -->
<div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl p-6 text-white">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">Reviews Summary</h3>
            <p class="text-blue-100 mb-4">Overview of your reviews statistics and performance</p>
            <div class="flex flex-wrap gap-6">
                <div>
                    <p class="text-blue-200 text-sm">Response Rate</p>
                    <p class="text-2xl font-bold">92%</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Avg. Response Time</p>
                    <p class="text-2xl font-bold">4.2 hours</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Positive Reviews</p>
                    <p class="text-2xl font-bold">85%</p>
                </div>
            </div>
        </div>
        <button class="mt-4 md:mt-0 px-6 py-3 bg-white text-blue-600 font-medium rounded-lg shadow-md hover:bg-gray-100 transition-colors duration-300">
            <i class="fas fa-chart-line mr-2"></i> View Full Report
        </button>
    </div>
</div>
@endsection