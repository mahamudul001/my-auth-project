<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;

Route::get('/register', [RegisteredUserController::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
  ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
  ->middleware('guest')
  ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
  ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
  ->middleware('auth')
  ->name('logout');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
  ->middleware('guest')
  ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
  ->middleware('guest')
  ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
  ->middleware('guest')
  ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
  ->middleware('guest')
  ->name('password.update');
