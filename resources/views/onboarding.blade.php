<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in { animation: fadeIn 0.6s ease-out forwards; opacity: 0; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .pulse-btn { animation: pulse 2s infinite; }
        @keyframes pulse { 0%, 100% { transform: scale(1); box-shadow: 0 4px 14px rgba(37,99,235,0.3); } 50% { transform: scale(1.02); box-shadow: 0 6px 20px rgba(37,99,235,0.5); } }
    </style>
</head>
<body class="bg-gradient-to-b from-white to-blue-50 min-h-screen flex flex-col items-center justify-center p-6">
    
    <!-- Logo Section -->
    <div class="text-center mb-8 fade-in" style="animation-delay: 0.1s;">
        <div class="w-36 h-36 mx-auto mb-6 flex items-center justify-center">
            <!-- 
                CARA GANTI LOGO:
                1. Upload file logo ke folder public/images/
                2. Uncomment baris img di bawah (hapus <!-- dan -->)
                3. Ganti nama file sesuai logo Anda
                4. Comment/hapus bagian SVG di bawahnya
            -->
            
            <!-- OPSI A: Pakai Gambar (Uncomment untuk pakai gambar) -->
            <!-- <img src="{{ asset('images/bbc-logo.png') }}" alt="Logo" class="w-full h-full object-contain drop-shadow-lg"> -->
            
            <!-- OPSI B: SVG Shield Logo (Default) -->
            <svg viewBox="0 0 100 120" class="w-full h-full drop-shadow-xl">
                <defs>
                    <linearGradient id="shieldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#2563eb;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#1e3a8a;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <path d="M50 5 L90 20 L90 60 C90 85 70 105 50 115 C30 105 10 85 10 60 L10 20 Z" fill="url(#shieldGrad)" stroke="#1e3a8a" stroke-width="2"/>
                <rect x="30" y="35" width="40" height="45" rx="3" fill="white" opacity="0.95"/>
                <line x1="35" y1="45" x2="65" y2="45" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="35" y1="52" x2="65" y2="52" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="35" y1="59" x2="65" y2="59" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                <line x1="35" y1="66" x2="55" y2="66" stroke="#2563eb" stroke-width="2.5" stroke-linecap="round"/>
                <polygon points="50,42 52,48 58,48 53,52 55,58 50,54 45,58 47,52 42,48 48,48" fill="#fbbf24" stroke="#f59e0b" stroke-width="1"/>
            </svg>
        </div>
        
        <h1 class="text-5xl font-extrabold text-slate-900 mb-2 tracking-tight">BBC</h1>
        <p class="text-lg text-gray-500 font-medium tracking-widest uppercase">Report. Resolve. Improve.</p>
    </div>
    
    <!-- Tagline -->
    <div class="text-center max-w-sm mb-10 fade-in" style="animation-delay: 0.3s;">
        <h2 class="text-xl font-bold text-slate-800 mb-2">Suara Anda, Perubahan untuk Sekolah</h2>
        <p class="text-gray-500 text-sm leading-relaxed">Sampaikan pengaduan dan saran untuk perbaikan sekolah. Setiap suara Anda berharga.</p>
    </div>
    
    <!-- Features -->
    <div class="flex gap-8 mb-10 fade-in" style="animation-delay: 0.5s;">
        <div class="text-center">
            <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mb-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <p class="text-xs font-semibold text-gray-600">Laporkan</p>
        </div>
        <div class="text-center">
            <div class="w-12 h-12 bg-green-100 rounded-2xl flex items-center justify-center mb-2">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <p class="text-xs font-semibold text-gray-600">Selesaikan</p>
        </div>
        <div class="text-center">
            <div class="w-12 h-12 bg-purple-100 rounded-2xl flex items-center justify-center mb-2">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
            <p class="text-xs font-semibold text-gray-600">Perbaiki</p>
        </div>
    </div>
    
    <!-- Buttons -->
    <div class="w-full max-w-xs space-y-3 fade-in" style="animation-delay: 0.7s;">
        <a href="/login" class="block w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 transition shadow-lg pulse-btn text-center">Masuk</a>
        <a href="/register" class="block w-full bg-white border-2 border-blue-600 text-blue-600 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition text-center">Daftar Akun</a>
    </div>
    
    <p class="mt-6 text-xs text-gray-400 fade-in" style="animation-delay: 0.9s;">© 2026 Pengaduan Sekolah</p>
</body>
</html>