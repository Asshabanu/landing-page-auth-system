<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Dashboard page
    public function dashboard()
    {
        $bookingsCount = 5;
        $favoriteProperties = 3;

        return view('user.dashboard', [
            'title' => 'Dashboard',
            'bookingsCount' => $bookingsCount,
            'favoriteProperties' => $favoriteProperties
        ]);
    }

    // User Profile page
    public function profile()
    {
        return view('user.profile', [
            'title' => 'My Profile'
        ]);
    }

    // User Bookings page
    public function bookings()
    {
        $bookings = []; // fetch user bookings from DB later

        return view('user.bookings', [
            'title' => 'My Bookings',
            'bookings' => $bookings
        ]);
    }

    // User Properties page
    public function properties()
    {
        $properties = []; // fetch user properties from DB later

        return view('user.properties', [
            'title' => 'My Properties',
            'properties' => $properties
        ]);
    }

    // User Reviews page
    public function reviews()
    {
        $reviews = []; // fetch user reviews from DB later

        return view('user.reviews', [
            'title' => 'My Reviews',
            'reviews' => $reviews
        ]);
    }

    // User Earnings page
    public function earnings()
    {
        $earnings = 0; // fetch earnings from DB later

        return view('user.earnings', [
            'title' => 'My Earnings',
            'earnings' => $earnings
        ]);
    }

    // User Settings page
    public function settings()
    {
        return view('user.settings', [
            'title' => 'Settings'
        ]);
    }
}
