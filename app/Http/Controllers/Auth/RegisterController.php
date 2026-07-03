<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nis' => 'required|string|digits_between:5,20|unique:users,nis',
            'email' => 'required|email|max:255|unique:users,email|ends_with:@sekolah.sch.id',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Nama lengkap wajib diisi',
            'nis.required' => 'NIS wajib diisi',
            'nis.unique' => 'NIS sudah terdaftar',
            'nis.digits_between' => 'NIS harus 5-20 digit',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'email.ends_with' => 'Gunakan email sekolah (@sekolah.sch.id)',
            'password.required' => 'Kata sandi wajib diisi',
            'password.min' => 'Kata sandi minimal 6 karakter',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}