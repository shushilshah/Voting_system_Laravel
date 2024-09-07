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
}