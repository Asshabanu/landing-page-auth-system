@extends('layouts.admin')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage all user accounts and permissions</p>
    </div>
    <a href="#" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-user-plus mr-2"></i> Add New User
    </a>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Users Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Total Users</h5>
                <h2 class="text-3xl font-bold text-gray-800">1,245</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>8% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-users text-blue-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Active Users Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Active</h5>
                <h2 class="text-3xl font-bold text-gray-800">1,120</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>5% from last month</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-user-check text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Pending Users Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Pending</h5>
                <h2 class="text-3xl font-bold text-gray-800">98</h2>
                <div class="flex items-center text-sm text-yellow-600 mt-2">
                    <i class="fas fa-clock mr-1"></i>
                    <span>Awaiting approval</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-yellow-100 rounded-xl">
                <i class="fas fa-user-clock text-yellow-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Banned Users Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Banned</h5>
                <h2 class="text-3xl font-bold text-gray-800">27</h2>
                <div class="flex items-center text-sm text-red-600 mt-2">
                    <i class="fas fa-exclamation-triangle mr-1"></i>
                    <span>Requires attention</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-red-100 rounded-xl">
                <i class="fas fa-user-times text-red-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Filters and Search -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100">
    <form>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
            <div class="relative">
                <input type="text" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300" placeholder="Search users...">
                <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>All Roles</option>
                    <option>Admin</option>
                    <option>Agent</option>
                    <option>User</option>
                </select>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>All Status</option>
                    <option>Active</option>
                    <option>Pending</option>
                    <option>Banned</option>
                </select>
            </div>
            <div>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors duration-300">
                    <option selected>Registration Date</option>
                    <option>Last 7 days</option>
                    <option>Last 30 days</option>
                    <option>Last 90 days</option>
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
        <i class="fas fa-download mr-2"></i> Export Users
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-user-shield mr-2"></i> Manage Permissions
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-envelope mr-2"></i> Send Email
    </button>
    <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors duration-300">
        <i class="fas fa-bell mr-2"></i> Notifications
    </button>
</div>

<!-- Users Table -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
            <h5 class="text-lg font-semibold text-gray-800">Users List</h5>
            <p class="text-gray-600 text-sm">Manage all user accounts and permissions</p>
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Joined</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors duration-200">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person1" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                <div class="text-sm text-gray-500">ID: #USR001</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">john.smith@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            <i class="fas fa-user-shield mr-1"></i> Admin
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-08-15</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
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
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person2" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                <div class="text-sm text-gray-500">ID: #USR002</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">sarah.j@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                            <i class="fas fa-briefcase mr-1"></i> Agent
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-08-20</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
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
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person3" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                <div class="text-sm text-gray-500">ID: #USR003</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">michael.b@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <i class="fas fa-user mr-1"></i> User
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            <i class="fas fa-clock mr-1"></i> Pending
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-09-01</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
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
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="https://source.unsplash.com/random/40x40?person4" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                <div class="text-sm text-gray-500">ID: #USR004</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">emily.d@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <i class="fas fa-user mr-1"></i> User
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            <i class="fas fa-times-circle mr-1"></i> Banned
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-08-25</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
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
            Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">1,245</span> entries
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

<!-- User Summary Card -->
<div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl p-6 text-white">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div>
            <h3 class="text-xl font-bold mb-2">User Summary</h3>
            <p class="text-blue-100 mb-4">Overview of your user statistics and activity</p>
            <div class="flex flex-wrap gap-6">
                <div>
                    <p class="text-blue-200 text-sm">New Users (30 days)</p>
                    <p class="text-2xl font-bold">324</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Active Rate</p>
                    <p class="text-2xl font-bold">90%</p>
                </div>
                <div>
                    <p class="text-blue-200 text-sm">Avg. Session</p>
                    <p class="text-2xl font-bold">12.4 min</p>
                </div>
            </div>
        </div>
        <button class="mt-4 md:mt-0 px-6 py-3 bg-white text-blue-600 font-medium rounded-lg shadow-md hover:bg-gray-100 transition-colors duration-300">
            <i class="fas fa-chart-line mr-2"></i> View Full Report
        </button>
    </div>
</div>
@endsection