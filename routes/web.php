<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('onboarding');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});