<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\votingtable;
use Hash;
use Session;

class VoteController extends Controller
{
    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }

    public function signupRegister(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'citizenship_number' => 'required|numeric',
            'voter_id' => 'nullable|numeric',
            'dob' => 'required|date',
            'password' => 'required|string|confirmed',
        ]);

        // Create a new user
        $user = new votingtable();
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->citizenship_number = $request->citizenship_number;
        $user->voter_id = $request->voter_id;
        $user->dob = $request->dob;
        $user->password = Hash::make($request->password); // Hash the password

        // Save the user
        if ($user->save()) {
            return redirect()->back()->with('success', 'Registration successful.');
        } else {
            return redirect()->back()->with('fail', 'Registration failed. Please try again.');
        }
    }
}