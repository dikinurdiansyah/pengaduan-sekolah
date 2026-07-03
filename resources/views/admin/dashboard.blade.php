@extends('layouts.admin')
@section('title', 'Dashboard - Admin')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
            <p class="text-gray-500 text-sm">1 Mei 2024 - 31 Mei 2024</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <span class="text-green-600 text-sm font-medium">+15%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">124</p>
            <p class="text-gray-500 text-sm mt-1">Total Laporan</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <span class="text-red-600 text-sm font-medium">+8%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">38</p>
            <p class="text-gray-500 text-sm mt-1">Diproses</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <span class="text-green-600 text-sm font-medium">+20%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">72</p>
            <p class="text-gray-500 text-sm mt-1">Selesai</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </div>
                <span class="text-red-600 text-sm font-medium">+5%</span>
            </div>
            <p class="text-3xl font-bold text-gray-900">14</p>
            <p class="text-gray-500 text-sm mt-1">Ditolak</p>
        </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Grafik Laporan</h3>
            <div class="h-64 flex items-end justify-between space-x-2">
                <div class="flex-1 bg-blue-200 rounded-t" style="height: 40%"></div>
                <div class="flex-1 bg-blue-300 rounded-t" style="height: 60%"></div>
                <div class="flex-1 bg-blue-400 rounded-t" style="height: 45%"></div>
                <div class="flex-1 bg-blue-500 rounded-t" style="height: 80%"></div>
                <div class="flex-1 bg-blue-600 rounded-t" style="height: 65%"></div>
                <div class="flex-1 bg-blue-500 rounded-t" style="height: 70%"></div>
                <div class="flex-1 bg-blue-400 rounded-t" style="height: 55%"></div>
            </div>
            <div class="flex justify-between mt-2 text-xs text-gray-500">
                <span>1 Mei</span><span>8 Mei</span><span>15 Mei</span><span>22 Mei</span><span>31 Mei</span>
            </div>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Laporan Berdasarkan Kategori</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div><span class="text-sm text-gray-700">Fasilitas</span></div>
                    <span class="text-sm font-medium">45 (36%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div><span class="text-sm text-gray-700">Kebersihan</span></div>
                    <span class="text-sm font-medium">32 (26%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div><span class="text-sm text-gray-700">Kurikulum</span></div>
                    <span class="text-sm font-medium">18 (15%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div><span class="text-sm text-gray-700">Lingkungan</span></div>
                    <span class="text-sm font-medium">16 (13%)</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center"><div class="w-3 h-3 bg-gray-400 rounded-full mr-2"></div><span class="text-sm text-gray-700">Lainnya</span></div>
                    <span class="text-sm font-medium">13 (10%)</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Reports -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
            <h3 class="font-semibold text-gray-900">Pengaduan Terbaru</h3>
            <a href="/admin/pengaduan" class="text-blue-600 text-sm font-medium hover:underline">Lihat Semua</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 text-sm">#PGD-2024-0012</td>
                        <td class="px-6 py-4 text-sm font-medium">Lampu kelas tidak menyala</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Andi Pratama</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                        <td class="px-6 py-4 text-sm text-gray-500">2 Mei 2024</td>
                        <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm">#PGD-2024-0011</td>
                        <td class="px-6 py-4 text-sm font-medium">Kebersihan kamar mandi</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Siti Nurhaliza</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Kebersihan</td>
                        <td class="px-6 py-4 text-sm text-gray-500">30 Apr 2024</td>
                        <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span></td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 text-sm">#PGD-2024-0010</td>
                        <td class="px-6 py-4 text-sm font-medium">Kursi di kelas rusak</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Budi Santoso</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                        <td class="px-6 py-4 text-sm text-gray-500">28 Apr 2024</td>
                        <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection