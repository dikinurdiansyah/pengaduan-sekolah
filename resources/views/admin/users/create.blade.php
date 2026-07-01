@extends('layouts.admin')
@section('title','Tambah User')
@section('content')
<a href="{{ route('admin.users.index') }}" class="text-blue-600 text-sm hover:underline mb-4 inline-block">← Kembali</a>
<div class="bg-white rounded-xl shadow-sm border p-6 max-w-2xl">
    <h2 class="text-xl font-bold mb-4">Tambah Pengguna</h2>
    <form method="POST" action="{{ route('admin.users.store') }}" class="space-y-4">
        @csrf
        <div><label class="block text-sm font-medium mb-1">Nama *</label><input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded-lg px-4 py-2" required></div>
        <div><label class="block text-sm font-medium mb-1">Email *</label><input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded-lg px-4 py-2" required></div>
        <div><label class="block text-sm font-medium mb-1">Password *</label><input type="password" name="password" class="w-full border rounded-lg px-4 py-2" required></div>
        <div>
            <label class="block text-sm font-medium mb-1">Role</label>
            <select name="role" class="w-full border rounded-lg px-4 py-2">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div><label class="block text-sm font-medium mb-1">NIS</label><input type="text" name="nis" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium mb-1">Telepon</label><input type="text" name="phone" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium mb-1">Kelas</label><input type="text" name="kelas" class="w-full border rounded-lg px-4 py-2"></div>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection