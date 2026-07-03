<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto py-6 px-4">
        <div class="bg-white rounded-lg shadow p-6">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">Dashboard Admin</h1>
            <p class="text-gray-600">Selamat datang, {{ auth()->user()->email ?? 'Admin' }}</p>
            
            <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-blue-900">Total Pengaduan</h3>
                    <p class="text-2xl font-bold text-blue-600">0</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-green-900">Selesai</h3>
                    <p class="text-2xl font-bold text-green-600">0</p>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-yellow-900">Pending</h3>
                    <p class="text-2xl font-bold text-yellow-600">0</p>
                </div>
            </div>

            <form method="POST" action="/logout" class="mt-6">
                @csrf
                <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>