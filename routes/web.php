<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Onboarding
Route::get('/', function () {
    return view('onboarding');
});

// Login Routes (Simple)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request \) {
    \ = \->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt(\)) {
        \->session()->regenerate();
        
        if (auth()->user()->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }
        
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah',
    ])->onlyInput('email');
});

Route::post('/logout', function (Request \) {
    Auth::logout();
    \->session()->invalidate();
    \->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});