<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\votetable;
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
            'first_name' => 'required|string|max:255|exists:user_exist,first_name',
            'middle_name' => 'nullable|string|max:255|exists:user_exist,middle_name',
            'last_name' => 'required|string|max:255|exists:user_exist,last_name',
            'phone_number' => 'required|numeric|exists:user_exist,phone_number',
            'citizenship_number' => 'required|numeric|exists:user_exist,citizenship_number',
            'voter_id' => 'nullable|numeric|exists:user_exist,voter_id',
            'dob' => 'required|date',
            'password' => 'required|string|confirmed',
        ]);

        // Create a new user
        $user = new votetable();
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

    public function loginUser(Request $request)
    {
        $request->validate([
            'voter_id' => 'required',
            'citizenship_number' => 'required',
        ]);

        $user = votetable::where('voter_id', '=', $request->voter_id)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return view('castvote');
            } else {
                return back()->with('fail', 'wrong password');
            }
        }
    }

    public function castevote()
    {
        return view('castvote');
    }

    public function voteresult()
    {
        return view('result');
    }
}