<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white flex flex-col">
            <div class="p-6 border-b border-slate-800">
                <h1 class="text-xl font-bold">SMA Negeri 1</h1>
                <p class="text-slate-400 text-sm">Bandung</p>
            </div>
            
            <nav class="flex-1 p-4 space-y-1">
                <a href="/admin/dashboard" class="flex items-center px-4 py-3 bg-blue-600 rounded-lg text-white">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="/admin/pengaduan" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Pengaduan
                </a>
                <a href="/admin/saran" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg>
                    Saran
                </a>
                <a href="/admin/laporan" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    Laporan
                </a>
                <a href="/admin/kategori" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                    Kategori
                </a>
                <a href="/admin/pengguna" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    Pengguna
                </a>
                <a href="/admin/pengaturan" class="flex items-center px-4 py-3 text-slate-300 hover:bg-slate-800 rounded-lg transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Pengaturan
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mr-3">
                        <span class="font-semibold">A</span>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-sm">Admin</p>
                        <p class="text-xs text-slate-400">Super Admin</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
                        <p class="text-gray-500 text-sm">1 Mei 2024 - 31 Mei 2024</p>
                    </div>
                    <button class="bg-white border border-gray-300 px-4 py-2 rounded-lg flex items-center hover:bg-gray-50">
                        <svg class="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        1 Mei 2024 - 31 Mei 2024
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </div>
                            <span class="text-green-600 text-sm font-medium">+15%</span>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">124</p>
                        <p class="text-gray-500 text-sm mt-1">Total Laporan</p>
                        <p class="text-xs text-gray-400 mt-2">↑ 15% dari periode lalu</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <span class="text-red-600 text-sm font-medium">+8%</span>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">38</p>
                        <p class="text-gray-500 text-sm mt-1">Diproses</p>
                        <p class="text-xs text-gray-400 mt-2">↑ 8% dari periode lalu</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-green-600 text-sm font-medium">+20%</span>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">72</p>
                        <p class="text-gray-500 text-sm mt-1">Selesai</p>
                        <p class="text-xs text-gray-400 mt-2">↑ 20% dari periode lalu</p>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            </div>
                            <span class="text-red-600 text-sm font-medium">+5%</span>
                        </div>
                        <p class="text-3xl font-bold text-gray-900">14</p>
                        <p class="text-gray-500 text-sm mt-1">Ditolak</p>
                        <p class="text-xs text-gray-400 mt-2">↓ 5% dari periode lalu</p>
                    </div>
                </div>

                <!-- Charts -->
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-4">Grafik Laporan</h3>
                        <div class="h-64 flex items-end justify-between space-x-2">
                            <div class="flex-1 bg-blue-200 rounded-t" style="height: 40%"></div>
                            <div class="flex-1 bg-blue-300 rounded-t" style="height: 60%"></div>
                            <div class="flex-1 bg-blue-400 rounded-t" style="height: 45%"></div>
                            <div class="flex-1 bg-blue-500 rounded-t" style="height: 80%"></div>
                            <div class="flex-1 bg-blue-600 rounded-t" style="height: 65%"></div>
                            <div class="flex-1 bg-blue-500 rounded-t" style="height: 70%"></div>
                            <div class="flex-1 bg-blue-400 rounded-t" style="height: 55%"></div>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span>1 Mei</span>
                            <span>8 Mei</span>
                            <span>15 Mei</span>
                            <span>22 Mei</span>
                            <span>31 Mei</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-4">Laporan Berdasarkan Kategori</h3>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-700">Fasilitas</span>
                                </div>
                                <span class="text-sm font-medium">45 (36%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-700">Kebersihan</span>
                                </div>
                                <span class="text-sm font-medium">32 (26%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-700">Kurikulum</span>
                                </div>
                                <span class="text-sm font-medium">18 (15%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-700">Lingkungan</span>
                                </div>
                                <span class="text-sm font-medium">16 (13%)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-gray-400 rounded-full mr-2"></div>
                                    <span class="text-sm text-gray-700">Lainnya</span>
                                </div>
                                <span class="text-sm font-medium">13 (10%)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Reports -->
                <div class="bg-white rounded-xl shadow-sm">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h3 class="font-semibold text-gray-900">Pengaduan Terbaru</h3>
                        <a href="/admin/pengaduan" class="text-blue-600 text-sm font-medium hover:underline">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">ID Laporan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pelapor</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">#PGD-2024-0012</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Lampu kelas tidak menyala</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Andi Pratama (XI IPA 2)</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">2 Mei 2024</td>
                                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">#PGD-2024-0011</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Kebersihan kamar mandi</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Siti Nurhaliza (X IPA 1)</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Kebersihan</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">30 Apr 2024</td>
                                    <td class="px-6 py-4"><span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-medium">Selesai</span></td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-900">#PGD-2024-0010</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">Kursi di kelas rusak</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Budi Santoso (XI IPS 1)</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">Fasilitas</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">28 Apr 2024</td>
                                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-medium">Diproses</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>