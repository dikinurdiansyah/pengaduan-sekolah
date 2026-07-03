<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen pb-20">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200 px-6 py-4">
        <div class="flex items-center">
            <a href="/user/dashboard" class="mr-4">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <h1 class="text-lg font-bold text-gray-900">Buat Pengaduan</h1>
        </div>
    </div>

    <!-- Form -->
    <div class="p-6">
        <form method="POST" action="/user/pengaduan" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <select name="kategori" required class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
                    <option value="">Pilih kategori</option>
                    <option value="Fasilitas">Fasilitas</option>
                    <option value="Kebersihan">Kebersihan</option>
                    <option value="Kurikulum">Kurikulum</option>
                    <option value="Lingkungan">Lingkungan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Judul Pengaduan</label>
                <input type="text" name="judul" placeholder="Contoh: Lampu kelas tidak menyala" required
                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4" placeholder="Jelaskan kronologi dan detail pengaduan Anda..." required
                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition resize-none"></textarea>
                <p class="text-xs text-gray-400 mt-1 text-right">0/500</p>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Lokasi</label>
                <div class="relative">
                    <input type="text" name="lokasi" placeholder="Pilih lokasi" required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition pl-10">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Lampiran (Opsional)</label>
                <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-blue-500 transition cursor-pointer">
                    <svg class="w-10 h-10 text-gray-400 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <p class="text-sm text-blue-600 font-medium">Tambah foto atau dokumen</p>
                    <p class="text-xs text-gray-400 mt-1">Maks. 5MB (JPG, PNG, PDF)</p>
                    <input type="file" name="lampiran" class="hidden" accept=".jpg,.jpeg,.png,.pdf">
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-full font-semibold text-lg hover:bg-blue-700 transition shadow-lg mt-6">
                Kirim Pengaduan
            </button>
        </form>
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