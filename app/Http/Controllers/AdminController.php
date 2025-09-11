<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProperties = 3;
        $activeListings = 2;
        $pendingApprovals = 1;
        $totalUsers = 2;
        
        $recentActivities = [
            [
                'title' => 'New Property Added',
                'description' => 'Luxury Villa has been added to the system',
                'time' => '2 hours ago'
            ],
            [
                'title' => 'Property Approved',
                'description' => 'Modern Apartment has been approved',
                'time' => '5 hours ago'
            ],
            [
                'title' => 'New User Registered',
                'description' => 'John Doe (john@example.com)',
                'time' => '2 days ago'
            ]
        ];

        return view('admin.dashboard', compact(
            'totalProperties',
            'activeListings',
            'pendingApprovals',
            'totalUsers',
            'recentActivities'
        ))->with('title', 'Dashboard');
    }

    public function properties()
    {
        return view('admin.properties')->with('title', 'Properties');
    }

    public function users()
    {
        return view('admin.users')->with('title', 'Users');
    }

    public function bookings()
    {
        return view('admin.bookings')->with('title', 'Bookings');
    }

    public function reviews()
    {
        return view('admin.reviews')->with('title', 'Reviews');
    }

    public function settings()
    {
        return view('admin.settings')->with('title', 'Settings');
    }

    public function profile()
    {
        return view('admin.profile')->with('title', 'My Profile');
    }
}
