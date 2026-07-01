@extends('layouts.user')
@section('title','Buat Pengaduan')
@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center mb-6">
        <a href="{{ route('user.dashboard') }}" class="mr-3"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></a>
        <h1 class="text-xl font-bold">Buat Pengaduan</h1>
    </div>
    <form method="POST" action="{{ route('user.complaints.store') }}" enctype="multipart/form-data" class="bg-white rounded-xl shadow-sm border p-6 space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori *</label>
            <select name="category_id" class="w-full border rounded-lg px-4 py-2" required>
                <option value="">Pilih kategori</option>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Judul *</label><input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded-lg px-4 py-2" required placeholder="Contoh: Lampu kelas mati"></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi *</label><textarea name="description" rows="4" class="w-full border rounded-lg px-4 py-2" required placeholder="Jelaskan detail masalah...">{{ old('description') }}</textarea></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label><input type="text" name="location" value="{{ old('location') }}" class="w-full border rounded-lg px-4 py-2" placeholder="Ruang / area"></div>
        <div><label class="block text-sm font-medium text-gray-700 mb-1">Lampiran (opsional)</label><input type="file" name="attachment" accept="image/*" class="w-full border rounded-lg px-4 py-2"><p class="text-xs text-gray-400 mt-1">Maks 2MB (JPG/PNG)</p></div>
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Kirim Pengaduan</button>
    </form>
</div>
@endsection