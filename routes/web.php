<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::resource('jobs', JobController::class);
Route::view('/contact', 'contact');
