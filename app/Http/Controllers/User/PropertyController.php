<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('user.properties');
    }
    
    public function show($id)
    {
        return view('user.properties.show', ['propertyId' => $id]);
    }
    
    public function edit($id)
    {
        return view('user.properties.edit', ['propertyId' => $id]);
    }
}