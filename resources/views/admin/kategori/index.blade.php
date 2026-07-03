@extends('layouts.admin')
@section('title', 'Kategori')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Kategori</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Kategori</button>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah Laporan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium">Fasilitas</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Masalah terkait sarana dan prasarana sekolah</td>
                    <td class="px-6 py-4 text-sm">45</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium">Kebersihan</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Masalah kebersihan lingkungan sekolah</td>
                    <td class="px-6 py-4 text-sm">32</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium">Kurikulum</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Masalah terkait kurikulum dan pembelajaran</td>
                    <td class="px-6 py-4 text-sm">18</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium">Lingkungan</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Masalah lingkungan sekolah</td>
                    <td class="px-6 py-4 text-sm">16</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium">Lainnya</td>
                    <td class="px-6 py-4 text-sm text-gray-500">Lain-lain</td>
                    <td class="px-6 py-4 text-sm">13</td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection