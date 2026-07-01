@extends('layouts.user')
@section('title','Dashboard')
@section('content')
<div class="mb-6"><h1 class="text-2xl font-bold text-gray-800">Halo, {{ auth()->user()->name }} 👋</h1><p class="text-gray-500">Sampaikan pengaduan atau saran Anda.</p></div>
<div class="grid grid-cols-2 gap-4 mb-6">
    <a href="{{ route('user.complaints.create') }}" class="bg-white p-5 rounded-xl shadow-sm border hover:shadow-md transition">
        <div class="w-11 h-11 bg-blue-100 rounded-lg flex items-center justify-center mb-3">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
        </div>
        <h3 class="font-semibold">Buat Pengaduan</h3>
        <p class="text-xs text-gray-500">Laporkan masalah</p>
    </a>
    <a href="{{ route('user.suggestions.create') }}" class="bg-white p-5 rounded-xl shadow-sm border hover:shadow-md transition">
        <div class="w-11 h-11 bg-yellow-100 rounded-lg flex items-center justify-center mb-3">
            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3"/></svg>
        </div>
        <h3 class="font-semibold">Buat Saran</h3>
        <p class="text-xs text-gray-500">Berikan masukan</p>
    </a>
</div>
<div class="grid grid-cols-3 gap-4 mb-6">
    <div class="bg-white p-4 rounded-xl shadow-sm border text-center"><p class="text-2xl font-bold text-blue-600">{{ $totalLaporan }}</p><p class="text-xs text-gray-500">Total</p></div>
    <div class="bg-white p-4 rounded-xl shadow-sm border text-center"><p class="text-2xl font-bold text-yellow-600">{{ $sedangDiproses }}</p><p class="text-xs text-gray-500">Diproses</p></div>
    <div class="bg-white p-4 rounded-xl shadow-sm border text-center"><p class="text-2xl font-bold text-green-600">{{ $selesai }}</p><p class="text-xs text-gray-500">Selesai</p></div>
</div>
<div class="bg-white rounded-xl shadow-sm border p-5">
    <h2 class="font-bold text-gray-800 mb-3">Pengaduan Terbaru</h2>
    @forelse($complaints as $c)
    <a href="{{ route('user.complaints.show',$c) }}" class="flex items-center justify-between py-3 border-b last:border-0 hover:bg-gray-50 -mx-5 px-5">
        <div>
            <p class="font-medium text-gray-800 text-sm">{{ $c->title }}</p>
            <p class="text-xs text-gray-400">{{ $c->complaint_no }} · {{ $c->created_at->format('d M Y') }}</p>
        </div>
        @if($c->status=='resolved')
            <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Resolved</span>
        @elseif($c->status=='processed')
            <span class="px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Processed</span>
        @elseif($c->status=='rejected')
            <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Rejected</span>
        @else
            <span class="px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Pending</span>
        @endif
    </a>
    @empty
    <p class="text-gray-400 text-center py-6 text-sm">Belum ada pengaduan</p>
    @endforelse
</div>
@endsection