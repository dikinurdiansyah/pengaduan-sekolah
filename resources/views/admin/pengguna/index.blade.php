@extends('layouts.admin')
@section('title', 'Pengguna')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Pengguna</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Pengguna</button>
    </div>

    <div class="bg-white rounded-xl p-4 shadow-sm mb-6 flex gap-4">
        <input type="text" placeholder="Cari nama atau email..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
            <option>Semua Role</option>
            <option>Admin</option>
            <option>Petugas</option>
            <option>Siswa</option>
        </select>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-12 text-center">
        <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
        </svg>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum ada pengguna</h3>
        <p class="text-gray-500">Klik "Tambah Pengguna" untuk membuat pengguna baru</p>
    </div>
</div>
@endsection