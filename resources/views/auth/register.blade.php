<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Daftar - Pengaduan Sekolah</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gradient-to-br from-blue-600 to-indigo-800 min-h-screen flex items-center justify-center p-4">
<div class="w-full max-w-md">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Daftar Akun Baru</h2>
        @if($errors->any())<div class="bg-red-50 text-red-600 p-3 rounded-lg mb-4 text-sm">{{ $errors->first() }}</div>@endif
        <form method="POST" action="/register" class="space-y-4">
            @csrf
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">NIS (Opsional)</label>
                <input type="text" name="nis" value="{{ old('nis') }}" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"></div>
            <div><label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500"></div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Daftar</button>
        </form>
        <p class="text-center text-sm text-gray-500 mt-6">Sudah punya akun? <a href="/login" class="text-blue-600 font-medium hover:underline">Masuk</a></p>
    </div>
</div></body></html>