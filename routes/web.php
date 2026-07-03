<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return '<h1 style="text-align:center;font-family:Arial;margin-top:50px;">Pengaduan Sekolah - Online</h1><p style="text-align:center;"><a href="/login">Login</a></p>';
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {
    if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return redirect('/admin/dashboard');
    }
    return back()->withErrors(['email' => 'Email atau password salah']);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    return redirect('/');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');