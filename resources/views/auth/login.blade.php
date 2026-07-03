<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-600 to-indigo-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
            @if(\->any())
                <div class="bg-red-50 text-red-600 p-3 rounded-lg mb-4 text-sm">@foreach(\->all() as \Cannot prompt for confirmation in non-interactive mode. Use --yes to skip confirmation. Cannot prompt for confirmation in non-interactive mode. Use --yes to skip confirmation.    83cdf11..a1783bb  main       -> origin/main  * branch            main       -> FETCH_HEAD From https://github.com/dikinurdiansyah/pengaduan-sekolah){{ \Cannot prompt for confirmation in non-interactive mode. Use --yes to skip confirmation. Cannot prompt for confirmation in non-interactive mode. Use --yes to skip confirmation.    83cdf11..a1783bb  main       -> origin/main  * branch            main       -> FETCH_HEAD From https://github.com/dikinurdiansyah/pengaduan-sekolah }} @endforeach</div>
            @endif
            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 rounded-lg px-4 py-3" placeholder="email@sekolah.sch.id">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required class="w-full border border-gray-300 rounded-lg px-4 py-3" placeholder="Password">
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>