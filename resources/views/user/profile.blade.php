@extends('layouts.user')
@section('title', 'My Profile')
@section('content')
<div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
    <div>
        <p class="text-gray-600 mt-1">Manage your personal information and account settings</p>
    </div>
    <button id="editBtn" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
        Edit Profile
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
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <div>{{ session('status') }}</div>
    </div>
@endif

<!-- Profile Form -->
<div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 mb-8">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800">Personal Information</h3>
        <p class="text-gray-600 text-sm">Update your account details and profile information</p>
    </div>
    
    <form id="profileForm" method="POST" action="{{ route('user.profile.update') }}" enctype="multipart/form-data" class="p-6">
        @csrf
        @method('PATCH')
        
        <!-- Avatar Section -->
        <div class="mb-8">
            <label class="block text-sm font-medium text-gray-700 mb-2">Profile Picture</label>
            <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6">
                <div class="relative">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                        <img src="{{ Auth::user()->avatar ? asset('storage/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?name='.urlencode(Auth::user()->name).'&background=0D8ABC&color=fff&size=128' }}" 
                             alt="Avatar" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-2 -right-2 bg-blue-600 rounded-full p-1.5 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                
                <div class="flex-1 w-full">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Change Avatar</label>
                    <div class="flex items-center">
                        <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>
                                <p class="text-sm text-gray-500"><span class="font-medium">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 1MB</p>
                            </div>
                            <input type="file" name="avatar" id="avatar" class="hidden" disabled>
                        </label>
                    </div>
                    @error('avatar') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
        
        <!-- Personal Information Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" 
                           class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white" 
                           disabled>
                </div>
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" 
                           class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white" 
                           disabled>
                </div>
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                    </div>
                    <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone ?? '' }}" 
                           class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white" 
                           disabled>
                </div>
                @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Leave blank to keep current" 
                           class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white" 
                           disabled>
                </div>
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        </div>
        
        <!-- Bio Section -->
        <div class="mb-6">
            <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-start pt-3 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <textarea name="bio" id="bio" rows="4" placeholder="Tell us about yourself..." 
                          class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition-colors bg-white" 
                          disabled>{{ Auth::user()->bio ?? '' }}</textarea>
            </div>
            <p class="text-sm text-gray-500 mt-1">Brief description about yourself</p>
            @error('bio') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        
        <!-- Form Buttons -->
        <div class="flex justify-end space-x-4 pt-4 hidden" id="formButtons">
            <button type="submit" class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Save Changes
            </button>
            <button type="button" id="cancelBtn" class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
                Cancel
            </button>
        </div>
    </form>
</div>

<!-- Account Security Card -->
<div class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-lg border border-gray-100">
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
            
            // Scroll to top of form
            form.scrollIntoView({ behavior: 'smooth', block: 'start' });
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