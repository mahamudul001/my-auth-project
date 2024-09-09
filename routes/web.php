<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
});


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'index'])->name('dashboard');
});



require __DIR__ . '/auth.php';
