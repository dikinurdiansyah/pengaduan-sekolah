<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('onboarding');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request \) {
    \ = \->only('email', 'password');

    if (Auth::attempt(\)) {
        \->session()->regenerate();
        return redirect()->intended('/admin/dashboard');
    }

    return back()->withErrors(['email' => 'Email atau password salah']);
});

Route::post('/logout', function (Request \) {
    Auth::logout();
    \->session()->invalidate();
    \->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});