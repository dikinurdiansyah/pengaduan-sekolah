@extends('layouts.admin')
@section('title', 'Laporan & Statistik')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Laporan & Statistik</h1>
            <p class="text-gray-500 text-sm">1 Mei 2024 - 31 Mei 2024</p>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Export
        </button>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <p class="text-gray-500 text-sm">Total Laporan</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">124</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <p class="text-gray-500 text-sm">Total Saran</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">32</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <p class="text-gray-500 text-sm">Rata-rata Waktu Penyelesaian</p>
            <p class="text-3xl font-bold text-gray-900 mt-2">3.6 hari</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <p class="text-gray-500 text-sm">Tingkat Penyelesaian</p>
            <p class="text-3xl font-bold text-green-600 mt-2">78%</p>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-2 gap-6">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Laporan per Hari</h3>
            <div class="h-64 flex items-end justify-between space-x-2">
                <div class="flex-1 bg-blue-300 rounded-t" style="height: 30%"></div>
                <div class="flex-1 bg-blue-400 rounded-t" style="height: 50%"></div>
                <div class="flex-1 bg-blue-500 rounded-t" style="height: 40%"></div>
                <div class="flex-1 bg-blue-600 rounded-t" style="height: 70%"></div>
                <div class="flex-1 bg-blue-500 rounded-t" style="height: 55%"></div>
                <div class="flex-1 bg-blue-400 rounded-t" style="height: 65%"></div>
                <div class="flex-1 bg-blue-300 rounded-t" style="height: 45%"></div>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Status Laporan</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div><span class="text-sm">Diproses</span></div>
                    <span class="text-sm font-medium">38 (31%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div><span class="text-sm">Selesai</span></div>
                    <span class="text-sm font-medium">72 (58%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div><span class="text-sm">Ditolak</span></div>
                    <span class="text-sm font-medium">14 (11%)</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection