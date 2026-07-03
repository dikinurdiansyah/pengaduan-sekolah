<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request \)
    {
        \ = \->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(\, \->filled('remember'))) {
            \->session()->regenerate();

            if (auth()->user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            }
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->onlyInput('email');
    }

    public function logout(Request \)
    {
        Auth::logout();
        \->session()->invalidate();
        \->session()->regenerateToken();
        
        return redirect('/');
    }
}