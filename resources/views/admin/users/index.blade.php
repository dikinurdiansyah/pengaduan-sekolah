@extends('layouts.admin')
@section('title','Pengguna')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Pengguna</h1>
    <a href="{{ route('admin.users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">+ Tambah</a>
</div>
<div class="bg-white rounded-xl shadow-sm border">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Nama</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Email</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Role</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $u)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white text-xs font-bold">{{ substr($u->name,0,1) }}</div>
                            <span class="font-medium text-sm">{{ $u->name }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{ $u->email }}</td>
                    <td class="px-4 py-3">
                        @if($u->role=='admin')
                            <span class="px-2 py-1 rounded text-xs font-medium bg-purple-100 text-purple-700">Admin</span>
                        @else
                            <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-700">User</span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        @if($u->status=='active')
                            <span class="px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700">Active</span>
                        @else
                            <span class="px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-700">Inactive</span>
                        @endif
                    </td>
                    <td class="px-4 py-3 flex space-x-2">
                        <a href="{{ route('admin.users.edit',$u) }}" class="text-blue-600 text-sm">Edit</a>
                        <form method="POST" action="{{ route('admin.users.destroy',$u) }}" onsubmit="return confirm('Hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 text-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t">{{ $users->links() }}</div>
</div>
@endsection