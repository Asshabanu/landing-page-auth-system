@extends('layouts.user')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-4">Edit Profile</h2>

    @if(session('status'))
        <div class="mb-4 text-green-600">{{ session('status') }}</div>
    @endif

    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="w-full border rounded px-3 py-2">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="w-full border rounded px-3 py-2">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="w-full border rounded px-3 py-2">
            @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Bio</label>
            <textarea name="bio" class="w-full border rounded px-3 py-2">{{ old('bio', $user->bio) }}</textarea>
            @error('bio') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>Avatar</label>
            <input type="file" name="avatar" class="w-full">
            @error('avatar') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label>New Password</label>
            <input type="password" name="password" class="w-full border rounded px-3 py-2">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update Profile</button>
        </div>
    </form>

    <hr class="my-6">

    <form action="{{ route('user.profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded">Delete Account</button>
    </form>
</div>
@endsection
