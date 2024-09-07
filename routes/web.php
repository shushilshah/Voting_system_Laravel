<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;

Route::get('/', function () {
    return view('index');
});
Route::get('/vote', function () {
    return view('vote');
});
Route::get('/login', [VoteController::class, 'login']);