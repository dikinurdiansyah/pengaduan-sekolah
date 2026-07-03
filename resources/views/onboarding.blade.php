<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suara Anda - Pengaduan Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    
    <!-- Card Container -->
    <div class="bg-white rounded-3xl shadow-xl max-w-md w-full overflow-hidden">
        
        <!-- Ilustrasi Area -->
        <div class="bg-white p-8 pt-12 pb-4">
            <div class="relative mx-auto w-64 h-64">
                <!-- Bubble Chat Biru -->
                <div class="absolute top-0 right-8 w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                    <div class="flex space-x-1">
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                        <div class="w-2 h-2 bg-white rounded-full"></div>
                    </div>
                </div>
                
                <!-- Ilustrasi Siswa (SVG) -->
                <svg viewBox="0 0 200 200" class="w-full h-full">
                    <!-- Siswa Laki-laki -->
                    <circle cx="70" cy="70" r="20" fill="#FDBA74"/>
                    <path d="M50 60 Q70 40 90 60 Q90 50 70 50 Q50 50 50 60" fill="#1F2937"/>
                    <rect x="55" y="90" width="30" height="40" rx="5" fill="#2563EB"/>
                    <rect x="50" y="90" width="10" height="30" rx="3" fill="#FFFFFF"/>
                    <rect x="80" y="90" width="10" height="30" rx="3" fill="#FFFFFF"/>
                    <rect x="55" y="130" width="12" height="30" rx="3" fill="#1F2937"/>
                    <rect x="73" y="130" width="12" height="30" rx="3" fill="#1F2937"/>
                    
                    <!-- Handphone di tangan laki-laki -->
                    <rect x="85" y="100" width="15" height="25" rx="2" fill="#1F2937"/>
                    <rect x="87" y="102" width="11" height="20" rx="1" fill="#60A5FA"/>
                    
                    <!-- Siswa Perempuan -->
                    <circle cx="130" cy="75" r="18" fill="#FDBA74"/>
                    <path d="M112 65 Q130 45 148 65 Q148 75 140 80 Q130 85 120 80 Q112 75 112 65" fill="#1F2937"/>
                    <rect x="115" y="93" width="30" height="38" rx="5" fill="#2563EB"/>
                    <rect x="110" y="93" width="10" height="28" rx="3" fill="#FFFFFF"/>
                    <rect x="140" y="93" width="10" height="28" rx="3" fill="#FFFFFF"/>
                    <rect x="115" y="131" width="12" height="28" rx="3" fill="#1F2937"/>
                    <rect x="133" y="131" width="12" height="28" rx="3" fill="#1F2937"/>
                    
                    <!-- Handphone di tangan perempuan -->
                    <rect x="100" y="105" width="15" height="25" rx="2" fill="#1F2937"/>
                    <rect x="102" y="107" width="11" height="20" rx="1" fill="#60A5FA"/>
                </svg>
            </div>
        </div>

        <!-- Content Area -->
        <div class="px-8 pb-10 text-center">
            <h1 class="text-2xl font-extrabold text-gray-900 mb-3 leading-tight">
                Suara Anda, Perubahan<br>untuk Sekolah
            </h1>
            
            <p class="text-gray-500 text-sm mb-8 leading-relaxed px-2">
                Sampaikan aspirasi, laporan, dan saran Anda untuk kemajuan sekolah kita bersama.
            </p>

            <!-- Pagination Dots -->
            <div class="flex justify-center space-x-2 mb-8">
                <div class="w-3 h-3 rounded-full bg-blue-600"></div>
                <div class="w-3 h-3 rounded-full bg-gray-300"></div>
                <div class="w-3 h-3 rounded-full bg-gray-300"></div>
            </div>

            <!-- Buttons -->
            <div class="space-y-3">
                <a href="/login" class="block w-full bg-blue-600 text-white font-semibold py-3.5 rounded-full shadow-lg hover:bg-blue-700 transition">
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