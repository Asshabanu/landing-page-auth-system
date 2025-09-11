<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarningController extends Controller
{
    /**
     * Display user earnings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mock data for demonstration
        $totalEarnings = 2450;
        $monthlyEarnings = 850;
        $pendingEarnings = 320;
        
        // Mock earnings data as objects
        $earnings = [
            (object)[
                'id' => 1,
                'description' => 'Modern Apartment - Oct 15-20',
                'amount' => 625,
                'status' => 'completed',
                'date' => '2023-10-15'
            ],
            (object)[
                'id' => 2,
                'description' => 'Family House - Sep 25-30',
                'amount' => 925,
                'status' => 'completed',
                'date' => '2023-09-25'
            ],
            (object)[
                'id' => 3,
                'description' => 'Luxury Villa - Sep 10-17',
                'amount' => 900,
                'status' => 'pending',
                'date' => '2023-09-10'
            ]
        ];
        
        return view('user.earnings', compact('totalEarnings', 'monthlyEarnings', 'pendingEarnings', 'earnings'));
    }
}