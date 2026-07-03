<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen pb-20">
    <div class="bg-white border-b border-gray-200 px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/user/riwayat" class="mr-4">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
                <h1 class="text-lg font-bold text-gray-900">Detail Pengaduan</h1>
            </div>
            <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span>
        </div>
    </div>

    <div class="p-6">
        <!-- Info -->
        <div class="bg-white rounded-xl p-4 shadow-sm mb-4">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Lampu kelas tidak menyala</h2>
            <p class="text-xs text-gray-500 mb-4">#PGD-2024-0012 • 2 Mei 2024 • 10:30</p>
            
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <p class="text-xs text-gray-500 mb-1">Kategori</p>
                    <p class="font-medium text-gray-900">Fasilitas</p>
                </div>
                <div>
                    <p class="text-xs text-gray-500 mb-1">Lokasi</p>
                    <p class="font-medium text-gray-900">Ruang Kelas 10 IPA 2</p>
                </div>
            </div>

            <div class="mb-4">
                <p class="text-xs text-gray-500 mb-1">Deskripsi</p>
                <p class="text-gray-700 text-sm">Lampu di beberapa bagian kelas tidak menyala, sehingga saat belajar menjadi kurang nyaman.</p>
            </div>

            <div>
                <p class="text-xs text-gray-500 mb-2">Lampiran</p>
                <div class="w-full h-32 bg-gray-200 rounded-lg flex items-center justify-center">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Riwayat Status -->
        <div class="bg-white rounded-xl p-4 shadow-sm">
            <h3 class="font-semibold text-gray-900 mb-4">Riwayat Status</h3>
            
            <div class="space-y-4">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                        <div class="w-0.5 h-full bg-gray-200 mt-1"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-900">Diproses</p>
                                <p class="text-xs text-gray-500">3 Mei 2024, 09:15</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Laporan Anda sedang kami proses</p>
                    </div>
                </div>

                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-900">Dibuat</p>
                                <p class="text-xs text-gray-500">2 Mei 2024, 10:30</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-1">Laporan berhasil dibuat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 px-6 py-3">
        <div class="flex justify-around items-center max-w-md mx-auto">
            <a href="/user/dashboard" class="flex flex-col items-center text-gray-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span class="text-xs mt-1">Beranda</span>
            </a>
            <a href="/user/riwayat" class="flex flex-col items-center text-gray-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                <span class="text-xs mt-1">Riwayat</span>
            </a>
            <a href="/user/pengaduan/create" class="flex flex-col items-center">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center -mt-6 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </div>
            </a>
            <a href="/user/notifikasi" class="flex flex-col items-center text-gray-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                <span class="text-xs mt-1">Notifikasi</span>
            </a>
            <a href="/user/akun" class="flex flex-col items-center text-gray-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                <span class="text-xs mt-1">Akun</span>
            </a>
        </div>
    </div>
</body>
</html>