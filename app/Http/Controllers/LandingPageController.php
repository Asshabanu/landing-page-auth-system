<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    // app/Http/Controllers/LandingPageController.php
public function index()
{
    return view('landing');
}
}