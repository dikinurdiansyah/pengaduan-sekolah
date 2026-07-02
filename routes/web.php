<?php

use Illuminate\Support\Facades\Route;

// Onboarding / Splash Screen
Route::get('/', function () {
    return view('onboarding');
});

// Auth Routes
require __DIR__.'/auth.php';

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});