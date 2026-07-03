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

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-medium mr-3">A</div>
                            <span class="text-sm font-medium">Admin Utama</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">admin@smanasbdg.sch.id</td>
                    <td class="px-6 py-4 text-sm">Admin</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Aktif</span></td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm font-medium mr-3">W</div>
                            <span class="text-sm font-medium">Waka Kesiswaan</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">kesiswaan@smanasbdg.sch.id</td>
                    <td class="px-6 py-4 text-sm">Admin</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Aktif</span></td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-green-600 rounded-full flex items-center justify-center text-white text-sm font-medium mr-3">G</div>
                            <span class="text-sm font-medium">Guru BK</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">bk@smanasbdg.sch.id</td>
                    <td class="px-6 py-4 text-sm">Petugas</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Aktif</span></td>
                    <td class="px-6 py-4">
                        <button class="text-blue-600 hover:underline text-sm mr-3">Edit</button>
                        <button class="text-red-600 hover:underline text-sm">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-yellow-600 rounded-full flex items-center justify-center text-white text-sm font-medium mr-3">A</div>
                            <span class="text-sm font-medium">Andi Pratama</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">andi.pratama@gmail.com</td>
                    <td class="px-6 py-4 text-sm">Siswa</td>
                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Aktif</span></td>
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