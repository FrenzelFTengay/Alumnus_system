<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GraduatesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes for graduates
Route::get('/graduates', [GraduatesController::class, 'index']);

// Routes for events
Route::get('/events', [EventsController::class, 'index']);
