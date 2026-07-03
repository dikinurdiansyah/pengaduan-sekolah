<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Anda - Pengaduan Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center p-6">
    
    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl overflow-hidden min-h-[80vh] flex flex-col">
        
        <!-- Illustration -->
        <div class="flex-1 flex items-center justify-center p-8 pt-12">
            <div class="text-center">
                <!-- Icon/Ilustrasi Placeholder -->
                <div class="w-48 h-48 mx-auto mb-6 bg-blue-100 rounded-full flex items-center justify-center">
                    <svg class="w-24 h-24 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="px-8 pb-10 text-center">
            <h1 class="text-2xl font-bold text-gray-900 mb-3 leading-tight">
                Suara Anda, Perubahan<br>untuk Sekolah
            </h1>
            
            <p class="text-gray-500 text-sm mb-8 leading-relaxed px-4">
                Sampaikan aspirasi, laporan, dan saran Anda untuk kemajuan sekolah kita bersama.
            </p>

            <!-- Dots Pagination -->
            <div class="flex justify-center space-x-2 mb-8">
                <div class="w-2.5 h-2.5 rounded-full bg-blue-600"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300"></div>
            </div>

            <!-- Buttons -->
            <div class="space-y-3">
                <a href="/login" class="block w-full bg-blue-600 text-white font-semibold py-3.5 rounded-full shadow-md hover:bg-blue-700 transition">
                    Selanjutno
                </a>
                
                <a href="/login" class="block w-full text-gray-500 font-medium py-2 hover:text-gray-700 text-sm">
                Lewati
                </a>
            </div>
        </div>
    </div>
</body>
</html>