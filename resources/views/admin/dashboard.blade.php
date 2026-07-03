@extends('layouts.admin')
@section('title', 'Dashboard - Admin')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-gray-500 text-sm">Belum ada data</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <span class="text-gray-400 text-sm font-medium">0%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">0</p>
            <p class="text-gray-500 text-sm mt-1">Total Laporan</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <span class="text-gray-400 text-sm font-medium">0%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">0</p>
            <p class="text-gray-500 text-sm mt-1">Diproses</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <span class="text-gray-400 text-sm font-medium">0%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">0</p>
            <p class="text-gray-500 text-sm mt-1">Selesai</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </div>
                <span class="text-gray-400 text-sm font-medium">0%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">0</p>
            <p class="text-gray-500 text-sm mt-1">Ditolak</p>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Grafik Laporan</h3>
            <div class="h-64 flex items-center justify-center">
                <p class="text-gray-400">Belum ada data untuk ditampilkan</p>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Laporan Berdasarkan Kategori</h3>
            <div class="h-64 flex items-center justify-center">
                <p class="text-gray-400">Belum ada data untuk ditampilkan</p>
            </div>
        </div>
    </div>

    <!-- Recent Reports -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
            <h3 class="font-semibold text-gray-900">Pengaduan Terbaru</h3>
            <a href="/admin/pengaduan" class="text-blue-600 text-sm font-medium hover:underline">Lihat Semua</a>
        </div>
        <div class="p-8 text-center">
            <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <p class="text-gray-500">Belum ada pengaduan</p>
            <p class="text-gray-400 text-sm mt-1">Data akan muncul setelah ada pengaduan masuk</p>
        </div>
    </div>
</div>
@endsection