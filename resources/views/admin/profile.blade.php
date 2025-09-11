@extends('layouts.admin')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage your personal information and account settings</p>
    </div>
    <button id="editBtn" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <i class="fas fa-user-edit mr-2"></i> Edit Profile
    </button>
</div>

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Profile Completion Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Profile Completion</h5>
                <h2 class="text-3xl font-bold text-gray-800">85%</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>Almost complete</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-blue-100 rounded-xl">
                <i class="fas fa-user-check text-blue-600 text-xl"></i>
            </div>
        </div>
        <!-- Progress Bar -->
        <div class="mt-4">
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
            </div>
        </div>
    </div>
    
    <!-- Account Status Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Account Status</h5>
                <h2 class="text-3xl font-bold text-gray-800">Active</h2>
                <div class="flex items-center text-sm text-green-600 mt-2">
                    <i class="fas fa-check-circle mr-1"></i>
                    <span>Since {{ Auth::user()->created_at->format('M d, Y') }}</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-green-100 rounded-xl">
                <i class="fas fa-check-circle text-green-600 text-xl"></i>
            </div>
        </div>
    </div>
    
    <!-- Last Login Card -->
    <div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
        <div class="flex items-center justify-between">
            <div>
                <h5 class="text-gray-600 font-medium text-sm uppercase tracking-wider mb-1">Last Login</h5>
                <h2 class="text-3xl font-bold text-gray-800">{{ Auth::user()->last_login ? Auth::user()->last_login->diffForHumans() : 'Today' }}</h2>
                <div class="flex items-center text-sm text-gray-600 mt-2">
                    <i class="fas fa-clock mr-1"></i>
                    <span>{{ Auth::user()->last_login ? Auth::user()->last_login->format('M d, Y h:i A') : 'First time' }}</span>
                </div>
            </div>
            <div class="w-14 h-14 flex items-center justify-center bg-indigo-100 rounded-xl">
                <i class="fas fa-history text-indigo-600 text-xl"></i>
            </div>
        </div>
    </div>
</div>

@if(session('status'))
    <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-800 rounded-lg flex items-start">
        <i class="fas fa-check-circle mt-0.5 mr-2"></i>
        <div>{{ session('status') }}</div>
    </div>
@endif

<!-- Profile Form -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800">Personal Information</h3>
        <p class="text-gray-600 text-sm">Update your account details and profile information</p>
    </div>
    
    <form id="profileForm" method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PATCH')
        
        <!-- Avatar Section -->
        <div class="mb-8">
            <label class="block text-sm font-medium text-gray-700 mb-2">Profile Picture</label>
            <div class="flex items-center space-x-6">
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                    <img src="{{ Auth::user()->avatar ? asset('storage/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=0D8ABC&color=fff&size=128' }}" 
                         alt="Avatar" class="w-full h-full object-cover">
                </div>
                <div>
                    <input type="file" name="avatar" id="avatar" class="hidden" disabled>
                    <label for="avatar" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg cursor-pointer transition-colors duration-300">
                        <i class="fas fa-upload mr-2"></i> Upload New
                    </label>
                    <p class="mt-2 text-sm text-gray-500">JPG, GIF or PNG. Max size of 5MB.</p>
                </div>
            </div>
        </div>
        
        <!-- Personal Info Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" 
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" disabled>
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" 
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" disabled>
            </div>
            
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone ?? '' }}" 
                       placeholder="Enter your phone number"
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" disabled>
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                <input type="password" name="password" id="password" 
                       placeholder="Leave blank to keep current password"
                       class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" disabled>
            </div>
        </div>
        
        <!-- Bio Section -->
        <div class="mb-6">
            <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
            <textarea name="bio" id="bio" rows="4" 
                      placeholder="Tell us about yourself..."
                      class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors" disabled>{{ Auth::user()->bio ?? '' }}</textarea>
        </div>
        
        <!-- Form Buttons -->
        <div class="flex justify-end space-x-4 pt-4 hidden" id="formButtons">
            <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-save mr-2"></i> Save Changes
            </button>
            <button type="button" id="cancelBtn" class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-300">
                <i class="fas fa-times mr-2"></i> Cancel
            </button>
        </div>
    </form>
</div>

<!-- Account Security Card -->
<div class="mt-8 bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-bold text-gray-800">Account Security</h3>
        <div class="relative">
            <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                <i class="fas fa-ellipsis-v"></i>
            </button>
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Activity Log</a>
            </div>
        </div>
    </div>
    
    <div class="space-y-4">
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div>
                <h4 class="font-medium text-gray-800">Two-Factor Authentication</h4>
                <p class="text-sm text-gray-600">Add an extra layer of security to your account</p>
            </div>
            <button class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors duration-300">
                <i class="fas fa-shield-alt mr-2"></i> Enable
            </button>
        </div>
        
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div>
                <h4 class="font-medium text-gray-800">Active Sessions</h4>
                <p class="text-sm text-gray-600">Manage your active login sessions</p>
            </div>
            <button class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition-colors duration-300">
                <i class="fas fa-laptop mr-2"></i> Manage
            </button>
        </div>
        
        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
            <div>
                <h4 class="font-medium text-gray-800">Delete Account</h4>
                <p class="text-sm text-gray-600">Permanently delete your account and all data</p>
            </div>
            <button class="inline-flex items-center px-4 py-2 bg-red-100 hover:bg-red-200 text-red-700 rounded-lg transition-colors duration-300">
                <i class="fas fa-trash-alt mr-2"></i> Delete
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editBtn = document.getElementById('editBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const form = document.getElementById('profileForm');
        const formFields = form.querySelectorAll('input, textarea');
        const formButtons = document.getElementById('formButtons');
        const avatarInput = document.getElementById('avatar');
        
        editBtn.addEventListener('click', () => {
            formFields.forEach(field => field.disabled = false);
            formButtons.classList.remove('hidden');
            editBtn.classList.add('hidden');
        });
        
        cancelBtn.addEventListener('click', () => {
            formFields.forEach(field => field.disabled = true);
            formButtons.classList.add('hidden');
            editBtn.classList.remove('hidden');
        });
        
        // Handle avatar upload
        avatarInput.addEventListener('change', function(e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    document.querySelector('img[alt="Avatar"]').src = e.target.result;
                }
                
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    });
</script>
@endpush