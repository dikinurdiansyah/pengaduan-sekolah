@extends('layouts.admin')
@section('title', 'Daftar Saran')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Saran</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg flex items-center hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            Export
        </button>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID Saran</th>
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
                    <td class="px-6 py-4 text-sm">#SAR-2024-0010</td>
                    <td class="px-6 py-4 text-sm font-medium">Perbaikan kantin sekolah</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Dinda Aulia (XI IPA 1)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">1 Mei 2024</td>
                    <td class="px-6 py-4"><span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-medium">Baru</span></td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#SAR-2024-0009</td>
                    <td class="px-6 py-4 text-sm font-medium">Program kelas tahfidz</td>
                    <td class="px-6 py-4 text-sm text-gray-500">M. Ikhlas (XI IPA 1)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Program</td>
                    <td class="px-6 py-4 text-sm text-gray-500">29 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span></td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm">#SAR-2024-0008</td>
                    <td class="px-6 py-4 text-sm font-medium">Penambahan wifi di kelas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fajar Nugraha (XI IPA 2)</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">28 Apr 2024</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                    <td class="px-6 py-4"><a href="#" class="text-blue-600 hover:underline text-sm">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection