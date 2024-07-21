<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){ 
    $links = [
        'Meters' => route('locations.index'),
        'Cars' =>
         '/',
    ];
    return view('Welcome', compact('links'));
 });
Route::resource('locations', LocationController::class)->only([
    'index', 'create'
]);
