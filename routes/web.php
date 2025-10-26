<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RoomController;

Route::resource('movies', MovieController::class);
Route::resource('rooms', MovieController::class);
Route::resource('sessions', MovieController::class);