<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen pb-20">
    <div class="bg-white border-b border-gray-200 px-6 py-4">
        <div class="flex items-center">
            <a href="/user/dashboard" class="mr-4">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <h1 class="text-lg font-bold text-gray-900">Riwayat</h1>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="bg-white border-b border-gray-200 px-6 py-3">
        <div class="flex space-x-4 overflow-x-auto">
            <button class="text-blue-600 font-semibold whitespace-nowrap border-b-2 border-blue-600 pb-2">Semua</button>
            <button class="text-gray-500 whitespace-nowrap pb-2">Diproses</button>
            <button class="text-gray-500 whitespace-nowrap pb-2">Selesai</button>
            <button class="text-gray-500 whitespace-nowrap pb-2">Ditolak</button>
        </div>
    </div>

    <!-- List -->
    <div class="p-6 space-y-3">
        <!-- Item 1 -->
        <a href="/user/pengaduan/1" class="block bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900">Lampu kelas tidak menyala</h3>
                <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span>
            </div>
            <p class="text-xs text-gray-500">#PGD-2024-0012 • 2 Mei 2024</p>
        </a>

        <!-- Item 2 -->
        <a href="/user/pengaduan/2" class="block bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900">Kebersihan kamar mandi</h3>
                <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span>
            </div>
            <p class="text-xs text-gray-500">#PGD-2024-0011 • 30 Apr 2024</p>
        </a>

        <!-- Item 3 -->
        <a href="/user/pengaduan/3" class="block bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900">Kursi di kelas rusak</h3>
                <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span>
            </div>
            <p class="text-xs text-gray-500">#PGD-2024-0010 • 28 Apr 2024</p>
        </a>

        <!-- Item 4 -->
        <a href="/user/pengaduan/4" class="block bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900">Halaman sekolah kotor</h3>
                <span class="bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full font-medium">Ditolak</span>
            </div>
            <p class="text-xs text-gray-500">#PGD-2024-0009 • 25 Apr 2024</p>
        </a>

        <!-- Item 5 -->
        <a href="/user/pengaduan/5" class="block bg-white rounded-xl p-4 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-2">
                <h3 class="font-semibold text-gray-900">Air di wastafel tidak mengalir</h3>
                <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span>
            </div>
            <p class="text-xs text-gray-500">#PGD-2024-0008 • 24 Apr 2024</p>
        </a>
    </div>

    <!-- Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 px-6 py-3">
        <div class="flex justify-around items-center max-w-md mx-auto">
            <a href="/user/dashboard" class="flex flex-col items-center text-gray-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span class="text-xs mt-1">Beranda</span>
            </a>
            <a href="/user/riwayat" class="flex flex-col items-center text-blue-600">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H2z"/><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/></svg>
                <span class="text-xs mt-1 font-medium">Riwayat</span>
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