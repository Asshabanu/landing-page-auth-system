<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProperties = Property::count();
        $activeListings = Property::where('status', 'active')->count();
        $pendingApprovals = Property::where('status', 'pending')->count();
        $totalUsers = User::where('role', 'user')->count();

        // Example recent activities
        $recentActivities = [
            ['title' => 'New property added', 'description' => 'Modern Apartment added by John', 'time' => '2 hours ago'],
            ['title' => 'Booking approved', 'description' => 'Booking #1234 approved', 'time' => '5 hours ago'],
            ['title' => 'User registered', 'description' => 'New user Mary joined', 'time' => '1 day ago'],
        ];

        return view('admin.dashboard', compact(
            'totalProperties',
            'activeListings',
            'pendingApprovals',
            'totalUsers',
            'recentActivities'
        ));
    }
}
