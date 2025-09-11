@extends('layouts.user')

@section('title', 'Edit Booking')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Edit Booking</h1>
            <p class="text-gray-600 mt-2">Update your booking information below</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <form action="{{ route('user.bookings.update', $booking->id) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')
                
                <div class="mb-6">
                    <label for="property_id" class="block text-sm font-medium text-gray-700 mb-1">Property</label>
                    <select id="property_id" name="property_id" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select a property</option>
                        @foreach ($properties as $property)
                            <option value="{{ $property->id }}" {{ $booking->property_id == $property->id ? 'selected' : '' }}>{{ $property->name }} - {{ $property->location }}</option>
                        @endforeach
                    </select>
                    @error('property_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-6">
                    <label for="guest_name" class="block text-sm font-medium text-gray-700 mb-1">Guest Name</label>
                    <input type="text" id="guest_name" name="guest_name" value="{{ old('guest_name', $booking->guest_name) }}" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('guest_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="check_in_date" class="block text-sm font-medium text-gray-700 mb-1">Check-in Date</label>
                        <input type="date" id="check_in_date" name="check_in_date" value="{{ old('check_in_date', $booking->check_in_date->format('Y-m-d')) }}" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        @error('check_in_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="check_out_date" class="block text-sm font-medium text-gray-700 mb-1">Check-out Date</label>
                        <input type="date" id="check_out_date" name="check_out_date" value="{{ old('check_out_date', $booking->check_out_date->format('Y-m-d')) }}" required 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        @error('check_out_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-6">
                    <label for="total_price" class="block text-sm font-medium text-gray-700 mb-1">Total Price ($)</label>
                    <input type="number" id="total_price" name="total_price" value="{{ old('total_price', $booking->total_price) }}" step="0.01" min="0" required 
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @error('total_price')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('user.bookings.show', $booking->id) }}" class="px-5 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-300">
                        Cancel
                    </a>
                    <button type="submit" class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                        Update Booking
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection