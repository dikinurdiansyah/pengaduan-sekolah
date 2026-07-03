@extends('layouts.admin')
@section('title', 'Daftar Pengaduan')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Pengaduan</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Export
        </button>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl p-4 shadow-sm mb-6 flex gap-4">
        <input type="text" placeholder="Cari judul laporan atau pelapor..." class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
            <option>Semua Status</option>
            <option>Diproses</option>
            <option>Selesai</option>
            <option>Ditolak</option>
        </select>
        <select class="px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
            <option>Semua Kategori</option>
            <option>Fasilitas</option>
            <option>Kebersihan</option>
            <option>Kurikulum</option>
        </select>
    </div>

    <!-- Empty State -->
    <div class="bg-white rounded-xl shadow-sm p-12 text-center">
        <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum ada pengaduan</h3>
        <p class="text-gray-500">Data pengaduan akan muncul di sini setelah ada yang masuk</p>
    </div>
</div>
@endsection