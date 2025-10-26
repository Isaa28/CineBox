<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::resource('movies', MovieController::class);
Route::resource('rooms', MovieController::class);
Route::resource('sessions', MovieController::class);