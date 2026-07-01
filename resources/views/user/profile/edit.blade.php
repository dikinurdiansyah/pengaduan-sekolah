@extends('layouts.user')
@section('title','Profil')
@section('content')
<div class="max-w-2xl mx-auto space-y-4">
    <div class="bg-white rounded-xl shadow-sm border p-6">
        <div class="flex items-center space-x-4 mb-6">
            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold">{{ substr(auth()->user()->name,0,1) }}</div>
            <div><h2 class="text-lg font-bold">{{ auth()->user()->name }}</h2><p class="text-sm text-gray-500">{{ auth()->user()->email }}</p></div>
        </div>
        <form method="POST" action="{{ route('user.profile.update') }}" class="space-y-3">
            @csrf
            @method('PUT')
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Nama</label><input type="text" name="name" value="{{ auth()->user()->name }}" class="w-full border rounded-lg px-4 py-2" required></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Email</label><input type="email" name="email" value="{{ auth()->user()->email }}" class="w-full border rounded-lg px-4 py-2" required></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">NIS</label><input type="text" name="nis" value="{{ auth()->user()->nis }}" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Telepon</label><input type="text" name="phone" value="{{ auth()->user()->phone }}" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Kelas</label><input type="text" name="kelas" value="{{ auth()->user()->kelas }}" class="w-full border rounded-lg px-4 py-2"></div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Simpan</button>
        </form>
    </div>
    <div class="bg-white rounded-xl shadow-sm border p-6">
        <h3 class="font-bold mb-4">Ubah Password</h3>
        <form method="POST" action="{{ route('user.profile.password') }}" class="space-y-3">
            @csrf
            @method('PUT')
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Password Lama</label><input type="password" name="current_password" class="w-full border rounded-lg px-4 py-2" required></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label><input type="password" name="password" class="w-full border rounded-lg px-4 py-2" required></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi</label><input type="password" name="password_confirmation" class="w-full border rounded-lg px-4 py-2" required></div>
            <button type="submit" class="w-full bg-gray-800 text-white py-3 rounded-lg font-semibold hover:bg-gray-900">Ubah Password</button>
        </form>
    </div>
</div>
@endsection