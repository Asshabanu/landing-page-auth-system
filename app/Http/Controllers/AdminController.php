<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        ));
    }

    public function properties()
    {
        return view('admin.properties');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function bookings()
    {
        return view('admin.bookings');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}