@extends('layouts.admin')
@section('title', 'Kategori')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Kategori</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Tambah Kategori</button>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-12 text-center">
        <svg class="w-20 h-20 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
        </svg>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">Belum ada kategori</h3>
        <p class="text-gray-500">Klik "Tambah Kategori" untuk membuat kategori baru</p>
    </div>
</div>
@endsection