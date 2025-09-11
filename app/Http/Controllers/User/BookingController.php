<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the user's bookings.
     */
    public function index()
    {
        $user = auth()->user();

        // Booking statistics
        $activeBookingsCount = $user->bookings()->where('status', 'confirmed')->count();
        $completedBookingsCount = $user->bookings()->where('status', 'completed')->count();
        $pendingBookingsCount = $user->bookings()->where('status', 'pending')->count();
        $upcomingBookingsCount = $user->bookings()
            ->where('status', 'confirmed')
            ->where('check_in_date', '>', now())
            ->count();
        $totalRevenue = $user->bookings()->where('status', 'completed')->sum('total_price');

        $thisMonthCompletedCount = $user->bookings()
            ->where('status', 'completed')
            ->whereMonth('created_at', now()->month)
            ->count();

        $lastMonthRevenue = $user->bookings()
            ->where('status', 'completed')
            ->whereMonth('created_at', now()->subMonth()->month)
            ->sum('total_price');

        $revenueIncrease = $lastMonthRevenue > 0
            ? round((($totalRevenue - $lastMonthRevenue) / $lastMonthRevenue) * 100)
            : 0;

        // Filtered bookings
        $bookings = $user->bookings()
            ->when(request('search'), function ($query, $search) {
                return $query->whereHas('property', fn($q) => $q->where('name', 'like', "%{$search}%"))
                             ->orWhere('guest_name', 'like', "%{$search}%");
            })
            ->when(request('start_date'), fn($query, $startDate) => $query->whereDate('check_in_date', '>=', $startDate))
            ->when(request('end_date'), fn($query, $endDate) => $query->whereDate('check_out_date', '<=', $endDate))
            ->when(request('status'), fn($query, $status) => $query->where('status', $status))
            ->with('property')
            ->latest()
            ->paginate(10);

        return view('user.bookings', compact(
            'bookings',
            'activeBookingsCount',
            'completedBookingsCount',
            'pendingBookingsCount',
            'upcomingBookingsCount',
            'totalRevenue',
            'thisMonthCompletedCount',
            'revenueIncrease'
        ));
    }

    /**
     * Show the form for creating a new booking.
     */
    public function create()
    {
        $properties = Property::all();
        return view('user.bookings-create', compact('properties'));
    }

    /**
     * Store a newly created booking.
     */
    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'guest_name' => 'required|string|max:255',
            'check_in_date' => 'required|date|after:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'total_price' => 'required|numeric|min:0',
        ]);

        $booking = auth()->user()->bookings()->create([
            'property_id' => $request->property_id,
            'guest_name' => $request->guest_name,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'total_price' => $request->total_price,
            'status' => 'pending',
        ]);

        return redirect()->route('user.bookings.show', $booking)
            ->with('success', 'Booking created successfully!');
    }

    /**
     * Display the specified booking.
     */
    public function show(Booking $booking)
    {
        $this->authorizeBooking($booking);
        $booking->load('property');

        return view('user.bookings-show', compact('booking'));
    }

    /**
     * Show the form for editing the booking.
     */
    public function edit(Booking $booking)
    {
        $this->authorizeBooking($booking);

        if (in_array($booking->status, ['cancelled', 'completed'])) {
            return redirect()->route('user.bookings.show', $booking)
                ->with('error', 'Cannot edit a ' . $booking->status . ' booking.');
        }

        $properties = Property::all();
        return view('user.bookings-edit', compact('booking', 'properties'));
    }

    /**
     * Update the specified booking.
     */
    public function update(Request $request, Booking $booking)
    {
        $this->authorizeBooking($booking);

        if (in_array($booking->status, ['cancelled', 'completed'])) {
            return redirect()->route('user.bookings.show', $booking)
                ->with('error', 'Cannot update a ' . $booking->status . ' booking.');
        }

        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'guest_name' => 'required|string|max:255',
            'check_in_date' => 'required|date|after:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'total_price' => 'required|numeric|min:0',
        ]);

        $booking->update($request->only('property_id', 'guest_name', 'check_in_date', 'check_out_date', 'total_price'));

        return redirect()->route('user.bookings.show', $booking)
            ->with('success', 'Booking updated successfully!');
    }

    /**
     * Delete the specified booking.
     */
    public function destroy(Booking $booking)
    {
        $this->authorizeBooking($booking);
        $booking->delete();

        return redirect()->route('user.bookings')
            ->with('success', 'Booking deleted successfully!');
    }

    /**
     * Cancel the specified booking.
     */
    public function cancel(Booking $booking)
    {
        $this->authorizeBooking($booking);

        if (in_array($booking->status, ['cancelled', 'completed'])) {
            return redirect()->route('user.bookings.show', $booking)
                ->with('error', 'Cannot cancel a ' . $booking->status . ' booking.');
        }

        $booking->update(['status' => 'cancelled']);

        return redirect()->route('user.bookings.show', $booking)
            ->with('success', 'Booking cancelled successfully!');
    }

    /**
     * Ensure the authenticated user owns the booking.
     */
    private function authorizeBooking(Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
    }
}
