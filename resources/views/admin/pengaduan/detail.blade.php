@extends('layouts.admin')
@section('title', 'Detail Pengaduan')

@section('content')
<div class="p-8">
    <a href="/admin/pengaduan" class="text-blue-600 hover:underline text-sm mb-4 inline-block">← Kembali</a>
    
    <div class="grid grid-cols-3 gap-6">
        <!-- Detail -->
        <div class="col-span-2 bg-white rounded-xl shadow-sm p-6">
            <div class="flex justify-between items-start mb-4">
                <div>
                    <h1 class="text-xl font-bold text-gray-900">Detail Pengaduan</h1>
                    <p class="text-sm text-gray-500 mt-1">#PGD-2024-0012</p>
                </div>
                <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <p class="text-xs text-gray-500 mb-1">Judul</p>
                    <p class="font-medium">Lampu kelas tidak menyala</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Kategori</p>
                    <p class="font-medium">Fasilitas</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Lokasi</p>
                    <p class="font-medium">Ruang Kelas 10 IPA 2</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Pelapor</p>
                    <p class="font-medium">Andi Pratama (XI IPA 2)</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Tanggal</p>
                    <p class="font-medium">2 Mei 2024, 10:30</p>
                </div>
            </div>

            <div class="mb-6">
                <p class="text-xs text-gray-500 mb-2">Deskripsi</p>
                <p class="text-gray-700">Lampu di beberapa bagian kelas tidak menyala, sehingga saat belajar menjadi kurang nyaman.</p>
            </div>

            <div>
                <p class="text-xs text-gray-500 mb-2">Lampiran</p>
                <div class="w-32 h-32 bg-gray-200 rounded-lg flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                </div>
            </div>

            <div class="mt-6 flex gap-3">
                <select class="px-4 py-2 border border-gray-300 rounded-lg">
                    <option>Ubah Status</option>
                    <option>Diproses</option>
                    <option>Selesai</option>
                    <option>Ditolak</option>
                </select>
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Perbarui Status</button>
            </div>
        </div>

        <!-- Riwayat & Catatan -->
        <div class="space-y-6">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Riwayat Status</h3>
                <div class="space-y-4">
                    <div class="flex">
                        <div class="flex flex-col items-center mr-3">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-0.5 h-8 bg-gray-200"></div>
                        </div>
                        <div>
                            <p class="font-medium text-sm">Diproses</p>
                            <p class="text-xs text-gray-500">2 Mei 2024, 10:30</p>
                            <p class="text-xs text-gray-400">Oleh: Admin</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col items-center mr-3">
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <div class="w-0.5 h-8 bg-gray-200"></div>
                        </div>
                        <div>
                            <p class="font-medium text-sm">Baru</p>
                            <p class="text-xs text-gray-500">2 Mei 2024, 09:15</p>
                            <p class="text-xs text-gray-400">Oleh: Admin</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col items-center mr-3">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                        </div>
                        <div>
                            <p class="font-medium text-sm">Dibuat</p>
                            <p class="text-xs text-gray-500">2 Mei 2024, 08:45</p>
                            <p class="text-xs text-gray-400">Oleh: Sistem</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="font-semibold text-gray-900 mb-4">Catatan Admin</h3>
                <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none resize-none" rows="4" placeholder="Tulis catatan..."></textarea>
                <button class="w-full bg-blue-600 text-white py-2 rounded-lg mt-3 hover:bg-blue-700">Simpan Catatan</button>
            </div>
        </div>
    </div>
</div>
@endsection