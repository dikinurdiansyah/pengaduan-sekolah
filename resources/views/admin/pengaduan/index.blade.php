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

    <!-- Table -->
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID Laporan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#PGD-2024-0012</td>
                    <td class="px-6 py-4 text-sm font-medium">Lampu kelas tidak menyala</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Andi Pratama (XI IPA 2)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">2 Mei 2024</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                    <td class="px-6 py-4"><a href="/admin/pengaduan/1" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#PGD-2024-0011</td>
                    <td class="px-6 py-4 text-sm font-medium">Kebersihan kamar mandi</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Siti Nurhaliza (X IPA 1)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Kebersihan</td>
                    <td class="px-6 py-4 text-sm text-gray-500">30 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span></td>
                    <td class="px-6 py-4"><a href="/admin/pengaduan/2" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#PGD-2024-0010</td>
                    <td class="px-6 py-4 text-sm font-medium">Kursi di kelas rusak</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Budi Santoso (XI IPS 1)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">28 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                    <td class="px-6 py-4"><a href="/admin/pengaduan/3" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#PGD-2024-0009</td>
                    <td class="px-6 py-4 text-sm font-medium">Halaman sekolah kotor</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Dewi Lestari (XI IPA 3)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Kebersihan</td>
                    <td class="px-6 py-4 text-sm text-gray-500">25 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full font-medium">Ditolak</span></td>
                    <td class="px-6 py-4"><a href="/admin/pengaduan/4" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#PGD-2024-0008</td>
                    <td class="px-6 py-4 text-sm font-medium">Air di wastafel tidak mengalir</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Rizky Maulana (X IPS 2)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">24 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span></td>
                    <td class="px-6 py-4"><a href="/admin/pengaduan/5" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
            </tbody>
        </table>
        
        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex justify-between items-center">
            <p class="text-sm text-gray-500">Menampilkan 1-5 dari 124 data</p>
            <div class="flex space-x-1">
                <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">3</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">...</button>
                <button class="px-3 py-1 border border-gray-300 rounded text-sm hover:bg-gray-50">13</button>
            </div>
        </div>
    </div>
</div>
@endsection