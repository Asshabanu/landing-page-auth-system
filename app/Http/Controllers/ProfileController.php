<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Show profile (user or admin)
    public function show()
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            return view('admin.profile', ['admin' => $user]);
        }
        return view('user.profile', ['user' => $user]);
    }

    // Update profile info
    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|max:1024',
        ]);

        // Handle avatar upload
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        } else {
            $validated['avatar'] = $user->avatar;
        }

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? $user->phone,
            'bio' => $validated['bio'] ?? $user->bio,
            'avatar' => $validated['avatar'],
        ]);

        $route = $user->role === 'admin' ? 'admin.profile.show' : 'user.profile';
        return redirect()->route($route)->with('status', 'Profile updated successfully.');
    }

    // Update password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        $route = $user->role === 'admin' ? 'admin.profile.show' : 'user.profile';
        return redirect()->route($route)->with('status', 'Password updated successfully.');
    }

    // Delete account
    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();
        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Account deleted successfully.');
    }
}
