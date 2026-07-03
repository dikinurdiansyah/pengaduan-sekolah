<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Public Routes
Route::get('/', function () { return view('splash'); });
Route::get('/onboarding', function () { return view('onboarding'); });
Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return auth()->user()->role === 'admin' ? redirect('/admin/dashboard') : redirect('/user/dashboard');
    }
    return back()->withErrors(['email' => 'Email atau password salah']);
});

Route::post('/register', function (Request $request) {
    // Simplified register - implement full logic later
    return back()->with('success', 'Registrasi berhasil! Silakan login.');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// User Routes
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/dashboard', function () { return view('user.dashboard'); });
    Route::get('/pengaduan/create', function () { return view('user.buat-pengaduan'); });
    Route::get('/saran/create', function () { return view('user.buat-saran'); });
    Route::get('/riwayat', function () { return view('user.riwayat'); });
    Route::get('/pengaduan/{id}', function () { return view('user.detail-pengaduan'); });
    Route::get('/notifikasi', function () { return view('user.notifikasi'); });
    Route::get('/akun', function () { return view('user.akun'); });
    Route::get('/akun/password', function () { return view('user.ubah-password'); });
});

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); });
});