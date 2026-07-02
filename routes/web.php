<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama Onboarding
Route::get('/', function () {
    return view('onboarding');
});

// Route Admin Dashboard
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});