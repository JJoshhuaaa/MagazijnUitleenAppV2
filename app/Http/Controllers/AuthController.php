<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            // Authentication passed, redirect to intended location
            return redirect()->intended('/dashboard')->with('status', 'Login successful');
        }

        // Authentication failed, redirect back with an error message
        return redirect()->back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
}
