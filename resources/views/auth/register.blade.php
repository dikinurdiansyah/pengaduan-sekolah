<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-white min-h-screen flex flex-col justify-center px-6 py-8">
    <div class="max-w-md mx-auto w-full">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Buat Akun</h1>
            <p class="text-gray-500 text-sm">Lengkapi data di bawah ini untuk membuat akun</p>
        </div>
        <form method="POST" action="/register" class="space-y-4">
            @csrf
            <div><input type="text" name="name" placeholder="Nama Lengkap" required class="w-full px-5 py-4 rounded-full border-2 border-gray-200 text-gray-700 placeholder-gray-400 focus:border-blue-500 focus:outline-none transition text-base"></div>
            <div><input type="text" name="nis" placeholder="NIS" required class="w-full px-5 py-4 rounded-full border-2 border-gray-200 text-gray-700 placeholder-gray-400 focus:border-blue-500 focus:outline-none transition text-base"></div>
            <div><input type="email" name="email" placeholder="Email" required class="w-full px-5 py-4 rounded-full border-2 border-gray-200 text-gray-700 placeholder-gray-400 focus:border-blue-500 focus:outline-none transition text-base"></div>
            <div class="relative">
                <input type="password" name="password" id="password" placeholder="Kata Sandi" required class="w-full px-5 py-4 rounded-full border-2 border-gray-200 text-gray-700 placeholder-gray-400 focus:border-blue-500 focus:outline-none transition text-base pr-12">
                <button type="button" onclick="togglePassword()" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </button>
            </div>
            @if($errors->any())
                <div class="bg-red-50 text-red-600 text-sm p-3 rounded-lg">@foreach($errors->all() as $error)<p>{{ $error }}</p>@endforeach</div>
            @endif
            <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-full font-semibold text-lg hover:bg-blue-700 transition shadow-lg mt-6">Daftar</button>
        </form>
        <p class="text-center text-gray-500 text-sm mt-6">Sudah punya akun? <a href="/login" class="text-blue-600 font-semibold">Masuk di sini</a></p>
    </div>
    <script>
        function togglePassword() {
            var input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>