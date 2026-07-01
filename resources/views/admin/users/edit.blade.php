@extends('layouts.admin')
@section('title','Edit User')
@section('content')
<a href="{{ route('admin.users.index') }}" class="text-blue-600 text-sm hover:underline mb-4 inline-block">← Kembali</a>
<div class="bg-white rounded-xl shadow-sm border p-6 max-w-2xl">
    <h2 class="text-xl font-bold mb-4">Edit Pengguna</h2>
    <form method="POST" action="{{ route('admin.users.update',$user) }}" class="space-y-4">
        @csrf
        @method('PUT')
        <div><label class="block text-sm font-medium mb-1">Nama *</label><input type="text" name="name" value="{{ $user->name }}" class="w-full border rounded-lg px-4 py-2" required></div>
        <div><label class="block text-sm font-medium mb-1">Email *</label><input type="email" name="email" value="{{ $user->email }}" class="w-full border rounded-lg px-4 py-2" required></div>
        <div>
            <label class="block text-sm font-medium mb-1">Role</label>
            <select name="role" class="w-full border rounded-lg px-4 py-2">
                <option value="user" {{ $user->role=='user'?'selected':'' }}>User</option>
                <option value="admin" {{ $user->role=='admin'?'selected':'' }}>Admin</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Status</label>
            <select name="status" class="w-full border rounded-lg px-4 py-2">
                <option value="active" {{ $user->status=='active'?'selected':'' }}>Active</option>
                <option value="inactive" {{ $user->status=='inactive'?'selected':'' }}>Inactive</option>
            </select>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div><label class="block text-sm font-medium mb-1">NIS</label><input type="text" name="nis" value="{{ $user->nis }}" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium mb-1">Telepon</label><input type="text" name="phone" value="{{ $user->phone }}" class="w-full border rounded-lg px-4 py-2"></div>
            <div><label class="block text-sm font-medium mb-1">Kelas</label><input type="text" name="kelas" value="{{ $user->kelas }}" class="w-full border rounded-lg px-4 py-2"></div>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection