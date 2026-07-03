@extends('layouts.admin')
@section('title', 'Pengaturan')

@section('content')
<div class="p-8">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Pengaturan</h1>

    <!-- Tabs -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="border-b border-gray-200">
            <nav class="flex space-x-8 px-6">
                <a href="#" class="py-4 px-1 border-b-2 border-blue-600 text-blue-600 font-medium text-sm">Profil Sekolah</a>
                <a href="#" class="py-4 px-1 text-gray-500 hover:text-gray-700 font-medium text-sm">Notifikasi</a>
                <a href="#" class="py-4 px-1 text-gray-500 hover:text-gray-700 font-medium text-sm">Pengaturan Sistem</a>
                <a href="#" class="py-4 px-1 text-gray-500 hover:text-gray-700 font-medium text-sm">Backup</a>
            </nav>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-2 gap-8">
                <!-- Form -->
                <div>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Sekolah</label>
                            <input type="text" value="SMA Negeri 1 Bandung" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                            <input type="text" value="Jl. Merdeka No. 10, Bandung" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" value="info@smanasbdg.sch.id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Telepon</label>
                            <input type="text" value="(022) 1234567" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Logo Sekolah</label>
                            <div class="flex items-center space-x-4">
                                <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Ubah Logo</button>
                            </div>
                            <p class="text-xs text-gray-500 mt-1">PNG, JPG maksimal 2MB</p>
                        </div>
                    </div>
                </div>

                <!-- Preview -->
                <div>
                    <h3 class="font-semibold text-gray-900 mb-4">Preview</h3>
                    <div class="bg-gray-50 rounded-xl p-6 text-center">
                        <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">SMA NEGERI 1 BANDUNG</h4>
                        <p class="text-sm text-gray-500">Jl. Merdeka No. 10, Bandung</p>
                        <p class="text-sm text-gray-500">(022) 1234567</p>
                        <p class="text-sm text-gray-500">info@smanasbdg.sch.id</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endsection