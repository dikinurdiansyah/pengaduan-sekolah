<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body style="font-family: Arial; padding: 40px;">
    <h1>Dashboard Admin</h1>
    <p>Selamat datang!</p>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" style="padding: 10px 20px;">Logout</button>
    </form>
</body>
</html>