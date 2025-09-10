<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl overflow-hidden sm:rounded-2xl">
                <div class="bg-gradient-to-r from-primary-600 to-blue-700 px-6 py-8 sm:px-8">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="h-16 w-16 rounded-full bg-white/20 flex items-center justify-center">
                                <span class="text-white text-2xl font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                        </div>
                        <div class="ml-6">
                            <h3 class="text-2xl font-bold text-white">Profile Settings</h3>
                            <p class="text-primary-200">Manage your account information and preferences</p>
                        </div>
                    </div>
                </div>
                
                <form method="POST" action="{{ route('profile.update') }}" class="divide-y divide-gray-200">
                    @csrf
                    @method('patch')
                    
                    <!-- Profile Information -->
                    <div class="px-6 py-8 sm:p-8">
                        <div class="mb-6">
                            <h4 class="text-lg font-medium text-gray-900 flex items-center">
                                <i class="fas fa-user-circle text-primary-600 mr-2"></i>
                                Personal Information
                            </h4>
                            <p class="mt-1 text-sm text-gray-600">Update your account's profile information and email address.</p>
                        </div>
                        
                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <div class="mt-1">
                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" autocomplete="name" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 transition-colors duration-200">
                                </div>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <div class="mt-1">
                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" autocomplete="email" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 transition-colors duration-200">
                                </div>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Account Role</label>
                                <div class="mt-1">
                                    <input type="text" id="role" value="{{ Auth::user()->role }}" disabled class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 bg-gray-100">
                                    <p class="mt-1 text-xs text-gray-500">Role cannot be changed. Contact administrator for role changes.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:-translate-y-0.5">
                                Save Changes
                            </button>
                        </div>
                    </div>

                    <!-- Password Update -->
                    <div class="px-6 py-8 sm:p-8">
                        <div class="mb-6">
                            <h4 class="text-lg font-medium text-gray-900 flex items-center">
                                <i class="fas fa-key text-primary-600 mr-2"></i>
                                Update Password
                            </h4>
                            <p class="mt-1 text-sm text-gray-600">Ensure your account is using a long, random password to stay secure.</p>
                        </div>

                        <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                <div class="mt-1">
                                    <input type="password" name="current_password" id="current_password" autocomplete="current-password" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 transition-colors duration-200">
                                </div>
                                @error('current_password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                <div class="mt-1">
                                    <input type="password" name="password" id="password" autocomplete="new-password" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 transition-colors duration-200">
                                </div>
                                @error('password')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                <div class="mt-1">
                                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-lg px-4 py-3 transition-colors duration-200">
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end">
                            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-all duration-200 transform hover:-translate-y-0.5">
                                Update Password
                            </button>
                        </div>
                    </div>

                    <!-- Delete Account -->
                    <div class="px-6 py-8 sm:p-8 bg-gray-50">
                        <div class="mb-6">
                            <h4 class="text-lg font-medium text-gray-900 flex items-center">
                                <i class="fas fa-exclamation-triangle text-red-600 mr-2"></i>
                                Delete Account
                            </h4>
                            <p class="mt-1 text-sm text-gray-600">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
                        </div>

                        <div class="mt-6 flex justify-end">
                            <button type="submit" formaction="{{ route('profile.destroy') }}" formmethod="POST" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-all duration-200 transform hover:-translate-y-0.5">
                                <i class="fas fa-trash-alt mr-2"></i>
                                Delete Account
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>