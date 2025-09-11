@extends('layouts.admin')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage all property listings and details</p>
    </div>
    <a href="#" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-plus mr-2"></i> Add New Property
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Properties -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Properties</h5>
                <h2 class="text-3xl font-bold text-gray-800">128</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>12% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-building text-blue-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Active Listings -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Active Listings</h5>
                <h2 class="text-3xl font-bold text-gray-800">96</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>8% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-clipboard-list text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Pending Approval -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Pending Approval</h5>
                <h2 class="text-3xl font-bold text-gray-800">18</h2>
                <div class="flex items-center text-sm text-yellow-600 mt-2">
                    <i class="fas fa-clock mr-1"></i>
                    <span>Awaiting review</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-hourglass-half text-yellow-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Featured Properties -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Featured</h5>
                <h2 class="text-3xl font-bold text-gray-800">24</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-star mr-1"></i>
                    <span>Premium listings</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-purple-100 rounded-xl">
                <i class="fas fa-star text-purple-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100">
    <form>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="relative">
                <input type="text" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" placeholder="Search properties...">
                <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>All Types</option>
                    <option>Apartment</option>
                    <option>House</option>
                    <option>Villa</option>
                    <option>Condo</option>
                    <option>Land</option>
                </select>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>All Status</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Inactive</option>
                    <option>Sold</option>
                </select>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>Price Range</option>
                    <option>$0 - $100,000</option>
                    <option>$100,000 - $500,000</option>
                    <option>$500,000 - $1M</option>
                    <option>$1M+</option>
                </select>
            </div>
        </div>
        <div class="flex justify-end space-x-3">
            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105 flex items-center">
                <i class="fas fa-filter mr-2"></i> Apply Filters
            </button>
            <button type="reset" class="px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-300 flex items-center">
                <i class="fas fa-redo mr-2"></i> Reset
            </button>
        </div>
    </form>
</div>

<!-- Quick Actions -->
<div class="flex flex-wrap gap-3 mb-6">
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-download mr-2"></i> Export Properties
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-map-marked-alt mr-2"></i> Map View
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-chart-bar mr-2"></i> Analytics
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-bell mr-2"></i> Notifications
    </button>
</div>

<!-- Properties Table -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
            <h5 class="text-lg font-semibold text-gray-800">Properties List</h5>
            <p class="text-gray-600 text-sm">Manage all property listings and details</p>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Featured</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-16 w-16">
                                <img class="h-16 w-16 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Modern Apartment</div>
                                <div class="text-xs text-gray-500">Added: Oct 5, 2023</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Apartment</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">Downtown</div>
                        <div class="text-xs text-gray-500">New York, NY</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$350,000</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            <i class="fas fa-star mr-1"></i> Featured
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800 transition-colors duration-300 p-2 rounded-full hover:bg-gray-50" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-16 w-16">
                                <img class="h-16 w-16 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Luxury Villa</div>
                                <div class="text-xs text-gray-500">Added: Oct 10, 2023</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Villa</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">Hillside</div>
                        <div class="text-xs text-gray-500">Beverly Hills, CA</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$2,500,000</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            <i class="fas fa-clock mr-1"></i> Pending
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <i class="far fa-star mr-1"></i> Standard
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800 transition-colors duration-300 p-2 rounded-full hover:bg-gray-50" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-16 w-16">
                                <img class="h-16 w-16 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Family House</div>
                                <div class="text-xs text-gray-500">Added: Sep 25, 2023</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">House</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">Suburbs</div>
                        <div class="text-xs text-gray-500">Austin, TX</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$750,000</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                            <i class="fas fa-star mr-1"></i> Featured
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800 transition-colors duration-300 p-2 rounded-full hover:bg-gray-50" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-16 w-16">
                                <img class="h-16 w-16 rounded-lg object-cover" src="https://images.unsplash.com/photo-1570129477482-76b7ed4dbb8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Beach House</div>
                                <div class="text-xs text-gray-500">Added: Sep 15, 2023</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">House</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">Coastal</div>
                        <div class="text-xs text-gray-500">Miami, FL</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$1,200,000</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <i class="fas fa-times-circle mr-1"></i> Sold
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <i class="far fa-star mr-1"></i> Standard
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-gray-600 hover:text-gray-800 transition-colors duration-300 p-2 rounded-full hover:bg-gray-50" title="Edit">
                                <i class="fas fa-edit"></i>
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
            Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">4</span> entries
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

<!-- Property Summary Card -->
<div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl p-6 text-white">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">Property Summary</h3>
            <p class="text-blue-100 mb-4">Overview of your property statistics and performance</p>
            <div class="flex flex-wrap gap-6">
                <div>
                    <p class="text-blue-200 text-sm">Total Value</p>
                    <p class="text-2xl font-bold">$48.5M</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Avg. Property Value</p>
                    <p class="text-2xl font-bold">$379K</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Days on Market</p>
                    <p class="text-2xl font-bold">32 days</p>
                </div>
            </div>
        </div>
        <button class="mt-4 md:mt-0 px-6 py-3 bg-white text-blue-600 font-medium rounded-lg shadow-md hover:bg-gray-100 transition-colors duration-300">
            <i class="fas fa-chart-line mr-2"></i> View Full Report
        </button>
    </div>
</div>
@endsection