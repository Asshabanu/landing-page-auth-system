@extends('layouts.user')

@section('title', 'Booking Details')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Booking Details</h1>
            <p class="text-gray-600 mt-2">View and manage your booking information</p>
        </div>
        
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Booking #{{ $booking->id }}</h2>
                        <p class="text-gray-600">Created on {{ $booking->created_at->format('F d, Y') }}</p>
                    </div>
                    <div>
                        @if ($booking->status === 'confirmed')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Confirmed
                            </span>
                        @elseif ($booking->status === 'pending')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">
                                <i class="fas fa-clock mr-1"></i> Pending
                            </span>
                        @elseif ($booking->status === 'cancelled')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                <i class="fas fa-times-circle mr-1"></i> Cancelled
                            </span>
                        @elseif ($booking->status === 'completed')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                <i class="fas fa-check-circle mr-1"></i> Completed
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Property Information</h3>
                        <div class="flex items-start">
                            <img src="{{ $booking->property->image_url ?? 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80' }}" 
                                 class="w-24 h-24 rounded-lg object-cover mr-4" alt="{{ $booking->property->name }}">
                            <div>
                                <p class="font-medium text-gray-900">{{ $booking->property->name }}</p>
                                <p class="text-gray-600">{{ $booking->property->location }}</p>
                                <p class="text-gray-600 mt-1">${{ number_format($booking->property->price_per_night, 2) }} per night</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Booking Details</h3>
                        <dl class="space-y-2">
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Guest Name:</dt>
                                <dd class="text-gray-900">{{ $booking->guest_name }}</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Check-in Date:</dt>
                                <dd class="text-gray-900">{{ $booking->check_in_date->format('F d, Y') }}</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Check-out Date:</dt>
                                <dd class="text-gray-900">{{ $booking->check_out_date->format('F d, Y') }}</dd>
                            </div>
                            <div class="flex justify-between">
                                <dt class="text-gray-600">Total Price:</dt>
                                <dd class="text-gray-900 font-medium">${{ number_format($booking->total_price, 2) }}</dd>
                            </div>
                        </dl>
                    </div>
                </div>
                
                <div class="border-t border-gray-200 pt-6">
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('user.bookings') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-300">
                            <i class="fas fa-arrow-left mr-2"></i> Back to Bookings
                        </a>
                        @if ($booking->status !== 'cancelled' && $booking->status !== 'completed')
                        <a href="{{ route('user.bookings.edit', $booking->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="fas fa-edit mr-2"></i> Edit Booking
                        </a>
                        <button onclick="confirmCancel({{ $booking->id }})" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors duration-300">
                            <i class="fas fa-times mr-2"></i> Cancel Booking
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function confirmCancel(bookingId) {
    if (confirm('Are you sure you want to cancel this booking? This action cannot be undone.')) {
        // Create a form to submit the cancellation request
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/user/bookings/${bookingId}/cancel`;
        
        // Add CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]');
        if (csrfToken) {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = '_token';
            input.value = csrfToken.getAttribute('content');
            form.appendChild(input);
        }
        
        // Add method spoof for DELETE
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';
        form.appendChild(methodInput);
        
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endsection