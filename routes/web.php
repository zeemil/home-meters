<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ return view('Welcome'); });
Route::resource('locations', LocationController::class);
