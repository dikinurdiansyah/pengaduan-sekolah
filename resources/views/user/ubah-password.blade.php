<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kata Sandi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen pb-20">
    <div class="bg-white border-b border-gray-200 px-6 py-4">
        <div class="flex items-center">
            <a href="/user/akun" class="mr-4">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <h1 class="text-lg font-bold text-gray-900">Ubah Kata Sandi</h1>
        </div>
    </div>

    <div class="p-6">
        <form method="POST" action="/user/akun/password" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi Lama</label>
                <div class="relative">
                    <input type="password" name="old_password" placeholder="Masukkan kata sandi lama" required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition pr-10">
                    <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi Baru</label>
                <div class="relative">
                    <input type="password" name="new_password" placeholder="Masukkan kata sandi baru" required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition pr-10">
                    <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Kata Sandi Baru</label>
                <div class="relative">
                    <input type="password" name="new_password_confirmation" placeholder="Konfirmasi kata sandi baru" required
                        class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:outline-none transition pr-10">
                    <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-full font-semibold text-lg hover:bg-blue-700 transition shadow-lg mt-6">
                Simpan Perubahan
            </button>
        </form>
    </div>
</body>
</html>