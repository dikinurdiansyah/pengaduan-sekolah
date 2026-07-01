@extends('layouts.user')
@section('title','Detail Pengaduan')
@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center mb-4">
        <a href="{{ route('user.complaints.index') }}" class="mr-3"><svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg></a>
        <h1 class="text-xl font-bold">Detail Pengaduan</h1>
    </div>
    <div class="bg-white rounded-xl shadow-sm border p-6 space-y-4">
        <div class="flex justify-between items-start">
            <h2 class="text-lg font-bold">{{ $complaint->title }}</h2>
            @if($complaint->status=='resolved')
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Resolved</span>
            @elseif($complaint->status=='processed')
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Processed</span>
            @elseif($complaint->status=='rejected')
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Rejected</span>
            @else
                <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Pending</span>
            @endif
        </div>
        <p class="text-xs text-gray-400">{{ $complaint->complaint_no }} · {{ $complaint->created_at->format('d M Y H:i') }}</p>
        <div class="grid grid-cols-2 gap-3 text-sm">
            <div><span class="text-gray-400 text-xs">Kategori</span><p class="font-medium">{{ $complaint->category->name }}</p></div>
            <div><span class="text-gray-400 text-xs">Lokasi</span><p class="font-medium">{{ $complaint->location ?? '-' }}</p></div>
        </div>
        <div><span class="text-gray-400 text-xs">Deskripsi</span><p class="text-gray-700 mt-1">{{ $complaint->description }}</p></div>
        @if($complaint->attachment)
        <div><span class="text-gray-400 text-xs">Lampiran</span><img src="{{ asset('storage/'.$complaint->attachment) }}" class="rounded-lg mt-2 max-h-48 object-cover"></div>
        @endif
        @if($complaint->admin_notes)
        <div class="bg-blue-50 p-4 rounded-lg"><p class="text-xs text-blue-600 font-medium mb-1">Catatan Admin</p><p class="text-sm text-gray-700">{{ $complaint->admin_notes }}</p></div>
        @endif
    </div>
</div>
@endsection