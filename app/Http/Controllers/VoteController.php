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
        $request->validate([
            'voter_id' => 'required|exists:user_exists,voter_id',
            'citizenship_number' => 'required|exists:user_exists,citizenship_number',
            'first_name' => 'required|exists:user_exists,first_name',
            'last_name' => 'required|exists:user_exists,last_name',
            'dob' => 'required',
            'password' => 'required|confirmed',
            'confirm_password' => 'required'
        ]);

        $user = new votingtable();
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        // $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->citizenship_number = $request->citizenship_number;
        $user->voter_id = $request->id;
        $user->dob = $request = $request->dob;
        $user->password = Hash::make($request->password);
        $user->confirm_password = Hash::make($request->confirm_password);
        $result = $user->save();

        if ($result) {
            return back()->with('success', 'Congratulations! you are successfully Registered');
            return redirect('/login');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}