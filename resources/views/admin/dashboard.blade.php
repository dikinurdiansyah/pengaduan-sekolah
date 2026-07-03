<!DOCTYPE html>
<html>
<head><title>Dashboard Admin</title></head>
<body style="font-family: Arial; padding: 40px;">
    <h1>Dashboard Admin</h1>
    <p>Selamat datang, {{ auth()->user()->email }}</p>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" style="padding: 10px 20px; background: #dc2626; color: white; border: none; border-radius: 5px; cursor: pointer;">Logout</button>
    </form>
</body>
</html>