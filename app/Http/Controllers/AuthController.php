<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Show the registration form
    public function showRegister()
    {
        return view('auth.register');
    }

    // Registration Method
    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'password' => 'required|string|size:4', // PIN must be exactly 4 characters
        ]);

        // Create a new user with hashed PIN stored as password
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password), // Store hashed PIN as password
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'phone_number' => 'required|string',
            'password' => 'required|string|min:4|max:4', // Ensure you are validating for a 4-character PIN
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
            // return redirect()->route('register')->with('success', 'Registration successful! You can now log in.');
            return redirect()->intended('/dashboard')->with('success', 'Welcome back!');
        }

        return back()->withErrors(['phone_number' => 'The provided credentials do not match our records.']);
    }

    // Logout Method
    public function logout()
    {
        Auth::logout(); // Log the user out
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
