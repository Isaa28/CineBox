<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SnackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('movies', MovieController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('sessions', SessionController::class);
    Route::resource('tickets', TicketController::class);
    Route::resource('snacks', SnackController::class);
});

require __DIR__.'/auth.php';
