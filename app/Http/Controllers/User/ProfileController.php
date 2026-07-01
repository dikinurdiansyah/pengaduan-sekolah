<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller {
    public function edit() { return view('user.profile.edit'); }
    public function update(Request $request) {
        $request->validate([
            'name'=>'required|max:255','email'=>'required|email|unique:users,email,'.auth()->id(),
            'nis'=>'nullable|unique:users,nis,'.auth()->id(),'phone'=>'nullable|max:20','kelas'=>'nullable|max:50',
        ]);
        auth()->user()->update($request->only(['name','email','nis','phone','kelas']));
        return back()->with('success','Profil berhasil diperbarui!');
    }
    public function updatePassword(Request $request) {
        $request->validate(['current_password'=>'required','password'=>'required|min:8|confirmed']);
        if (!Hash::check($request->current_password, auth()->user()->password))
            return back()->with('error','Kata sandi lama salah!');
        auth()->user()->update(['password'=>Hash::make($request->password)]);
        return back()->with('success','Kata sandi berhasil diperbarui!');
    }
}