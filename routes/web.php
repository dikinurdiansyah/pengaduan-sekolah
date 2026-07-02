<?php

use Illuminate\Support\Facades\Route;

// Onboarding / Splash Screen (Halaman Utama)
Route::get('/', function () {
    return view('onboarding');
});

// Route Auth bawaan Laravel (jika ada)
require __DIR__.'/auth.php';

// Route Admin (Contoh, sesuaikan dengan project Anda)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    // Tambahkan route admin lainnya di sini
});