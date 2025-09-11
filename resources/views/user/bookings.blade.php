@extends('layouts.user')

@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">View and manage all your property bookings</p>
    </div>
    <a href="{{ route('user.properties') }}" 
       class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-plus mr-2"></i> Book New Property
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Bookings -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Bookings</h5>
                <h2 class="text-3xl font-bold text-gray-800">12</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>2 new this month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-calendar-check text-blue-600 text-xl"></i>
            </div>
        </div>
        <!-- Mini Chart -->
        <div class="mt-4 h-16">
            <canvas id="totalBookingsChart"></canvas>
        </div>
    </div>
    
    <!-- Upcoming -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Upcoming</h5>
                <h2 class="text-3xl font-bold text-gray-800">3</h2>
                <div class="flex items-center text-sm text-blue-600 mt-2">
                    <i class="fas fa-calendar-alt mr-1"></i>
                    <span>Next in 5 days</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-clock text-blue-600 text-xl"></i>
            </div>
        </div>
        <!-- Progress Bar -->
        <div class="mt-4">
            <div class="flex justify-between text-xs text-gray-600 mb-1">
                <span>Next Booking</span>
                <span>Oct 15</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 75%"></div>
            </div>
        </div>
    </div>
    
    <!-- Completed -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Completed</h5>
                <h2 class="text-3xl font-bold text-gray-800">8</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-check-circle mr-1"></i>
                    <span>All successful</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-check text-green-600 text-xl"></i>
            </div>
        </div>
        <!-- Completed Items -->
        <div class="mt-4 space-y-2">
            <div class="flex items-center justify-between text-xs">
                <span class="text-gray-600">This Month</span>
                <span class="font-medium">2</span>
            </div>
            <div class="flex items-center justify-between text-xs">
                <span class="text-gray-600">Total</span>
                <span class="font-medium">8</span>
            </div>
        </div>
    </div>
    
    <!-- Cancelled -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Cancelled</h5>
                <h2 class="text-3xl font-bold text-gray-800">1</h2>
                <div class="flex items-center text-sm text-red-600 mt-2">
                    <i class="fas fa-info-circle mr-1"></i>
                    <span>Refund processed</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-red-100 rounded-xl">
                <i class="fas fa-times-circle text-red-600 text-xl"></i>
            </div>
        </div>
        <!-- Progress Bar -->
        <div class="mt-4">
            <div class="flex justify-between text-xs text-gray-600 mb-1">
                <span>Cancellation Rate</span>
                <span>8.3%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-red-500 h-2 rounded-full" style="width: 8.3%"></div>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100">
    <form>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="relative">
                <input type="text" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" placeholder="Search bookings...">
                <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
            </div>
            <div>
                <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" placeholder="From date">
            </div>
            <div>
                <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" placeholder="To date">
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>All Status</option>
                    <option>Upcoming</option>
                    <option>Completed</option>
                    <option>Cancelled</option>
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
        <i class="fas fa-download mr-2"></i> Export Bookings
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-calendar-alt mr-2"></i> Calendar View
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-bell mr-2"></i> Notifications
    </button>
</div>

<!-- Bookings Table -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
            <h5 class="text-lg font-semibold text-gray-800">My Bookings</h5>
            <p class="text-gray-600 text-sm">View and manage all your property bookings</p>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booking ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Property</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">#BK001</div>
                        <div class="text-xs text-gray-500">Booked: Oct 5, 2023</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Modern Apartment</div>
                                <div class="text-xs text-gray-500">Downtown</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Oct 15, 2023</div>
                        <div class="text-xs text-gray-500">3:00 PM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Oct 20, 2023</div>
                        <div class="text-xs text-gray-500">11:00 AM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$1,250</div>
                        <div class="text-xs text-gray-500">5 nights</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-clock mr-1"></i> Upcoming
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Cancel Booking">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">#BK002</div>
                        <div class="text-xs text-gray-500">Booked: Sep 20, 2023</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Luxury Villa</div>
                                <div class="text-xs text-gray-500">Hillside</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Nov 1, 2023</div>
                        <div class="text-xs text-gray-500">4:00 PM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Nov 7, 2023</div>
                        <div class="text-xs text-gray-500">11:00 AM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$8,750</div>
                        <div class="text-xs text-gray-500">6 nights</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-clock mr-1"></i> Upcoming
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition-colors duration-300 p-2 rounded-full hover:bg-red-50" title="Cancel Booking">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">#BK003</div>
                        <div class="text-xs text-gray-500">Booked: Aug 15, 2023</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Family House</div>
                                <div class="text-xs text-gray-500">Suburbs</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Sep 10, 2023</div>
                        <div class="text-xs text-gray-500">2:00 PM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Sep 15, 2023</div>
                        <div class="text-xs text-gray-500">11:00 AM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$2,250</div>
                        <div class="text-xs text-gray-500">5 nights</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Completed
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-800 transition-colors duration-300 p-2 rounded-full hover:bg-yellow-50" title="Leave Review">
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">#BK004</div>
                        <div class="text-xs text-gray-500">Booked: Jul 20, 2023</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1570129477482-76b7ed4dbb8a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Beach House</div>
                                <div class="text-xs text-gray-500">Coastal</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Aug 5, 2023</div>
                        <div class="text-xs text-gray-500">3:00 PM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Aug 10, 2023</div>
                        <div class="text-xs text-gray-500">11:00 AM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$4,250</div>
                        <div class="text-xs text-gray-500">5 nights</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Completed
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-yellow-600 hover:text-yellow-800 transition-colors duration-300 p-2 rounded-full hover:bg-yellow-50" title="Leave Review">
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">#BK005</div>
                        <div class="text-xs text-gray-500">Booked: Jun 10, 2023</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-lg object-cover" src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Mountain Cabin</div>
                                <div class="text-xs text-gray-500">Highlands</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jul 15, 2023</div>
                        <div class="text-xs text-gray-500">4:00 PM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Jul 20, 2023</div>
                        <div class="text-xs text-gray-500">11:00 AM</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-bold text-gray-900">$3,450</div>
                        <div class="text-xs text-gray-500">5 nights</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <i class="fas fa-times-circle mr-1"></i> Cancelled
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="text-blue-600 hover:text-blue-800 transition-colors duration-300 p-2 rounded-full hover:bg-blue-50" title="View Details">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800 transition-colors duration-300 p-2 rounded-full hover:bg-green-50" title="Rebook">
                                <i class="fas fa-redo"></i>
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
            Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">12</span> entries
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

<!-- Booking Summary Card -->
<div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl p-6 text-white">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">Booking Summary</h3>
            <p class="text-blue-100 mb-4">Overview of your booking history and spending</p>
            <div class="flex flex-wrap gap-6">
                <div>
                    <p class="text-blue-200 text-sm">Total Spent</p>
                    <p class="text-2xl font-bold">$19,950</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Avg. Booking Value</p>
                    <p class="text-2xl font-bold">$1,663</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Avg. Stay Duration</p>
                    <p class="text-2xl font-bold">5.3 nights</p>
                </div>
            </div>
        </div>
        <button class="mt-4 md:mt-0 px-6 py-3 bg-white text-blue-600 font-medium rounded-lg shadow-md hover:bg-gray-100 transition-colors duration-300">
            <i class="fas fa-history mr-2"></i> View Full History
        </button>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mini Chart for Total Bookings
    if (document.getElementById('totalBookingsChart')) {
        const ctx = document.getElementById('totalBookingsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['', '', '', '', '', '', '', ''],
                datasets: [{
                    data: [2, 3, 1, 4, 2, 3, 2],
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