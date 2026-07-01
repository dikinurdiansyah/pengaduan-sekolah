@extends('layouts.admin')
@section('title','Kategori')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Kategori</h1>
    <button onclick="document.getElementById('modal').classList.remove('hidden')" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">+ Tambah</button>
</div>
<div class="bg-white rounded-xl shadow-sm border">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Nama</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Tipe</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Jumlah</th>
                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @foreach($categories as $cat)
            <tr>
                <td class="px-4 py-3 font-medium">{{ $cat->name }}</td>
                <td class="px-4 py-3">
                    @if($cat->type=='complaint')
                        <span class="px-2 py-1 rounded text-xs bg-red-100 text-red-700">Pengaduan</span>
                    @else
                        <span class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700">Saran</span>
                    @endif
                </td>
                <td class="px-4 py-3 text-sm">{{ $cat->complaints_count + $cat->suggestions_count }}</td>
                <td class="px-4 py-3">
                    <form method="POST" action="{{ route('admin.categories.destroy',$cat) }}" onsubmit="return confirm('Hapus?')">
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
<div id="modal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-full max-w-md">
        <h3 class="font-bold text-lg mb-4">Tambah Kategori</h3>
        <form method="POST" action="{{ route('admin.categories.store') }}" class="space-y-4">
            @csrf
            <div><label class="block text-sm font-medium mb-1">Nama</label><input type="text" name="name" class="w-full border rounded-lg px-4 py-2" required></div>
            <div>
                <label class="block text-sm font-medium mb-1">Tipe</label>
                <select name="type" class="w-full border rounded-lg px-4 py-2">
                    <option value="complaint">Pengaduan</option>
                    <option value="suggestion">Saran</option>
                </select>
            </div>
            <div class="flex gap-2">
                <button type="button" onclick="document.getElementById('modal').classList.add('hidden')" class="flex-1 bg-gray-200 py-2 rounded-lg">Batal</button>
                <button type="submit" class="flex-1 bg-blue-600 text-white py-2 rounded-lg">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection