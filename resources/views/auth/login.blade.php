<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Pengaduan Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-white min-h-screen flex flex-col justify-center px-6 py-12">
    
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-center text-3xl font-bold text-gray-900 mb-2">
            Selamat Datang 👋
        </h2>
        <p class="text-center text-sm text-gray-500 mb-8">
            Silakan masuk untuk melanjutkan
        </p>

        <div class="bg-white py-8 px-4 sm:rounded-lg sm:px-10">
            @if(\->any())
                <div class="mb-4 p-3 bg-red-50 text-red-600 text-sm rounded-lg">
                    {{ \->first() }}
                </div>
            @endif

            <form class="space-y-6" action="/login" method="POST">
                @csrf
                
                <div>
                    <input id="email" name="email" type="text" required 
                        class="block w-full rounded-full border border-gray-300 px-5 py-3.5 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 sm:text-sm" 
                        placeholder="Email / NIS" value="{{ old('email') }}">
                </div>

                <div>
                    <div class="relative">
                        <input id="password" name="password" type="password" required 
                            class="block w-full rounded-full border border-gray-300 px-5 py-3.5 placeholder-gray-400 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 sm:text-sm" 
                            placeholder="Kata Sandi">
                        
                        <button type="button" onclick="togglePassword()" 
                            class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400 hover:text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-end">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">
                        Lupa kata sandi?
                    </a>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-full bg-blue-600 px-4 py-3.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500">
                        Masuk
                    </button>
                </div>
            </form>

            <p class="mt-8 text-center text-sm text-gray-500">
                Belum punai akun? 
                <a href="/register" class="font-medium text-blue-600 hover:text-blue-500">
                    Dautar di sini
                </a>
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>