@extends('layouts.admin')
@section('title','Detail Pengaduan')
@section('content')
<a href="{{ route('admin.complaints.index') }}" class="text-blue-600 text-sm hover:underline mb-4 inline-block">← Kembali</a>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-xl shadow-sm border p-6">
            <div class="flex justify-between items-start mb-4">
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
            <p class="text-xs text-gray-400 mb-4">{{ $complaint->complaint_no }} · {{ $complaint->user->name }} · {{ $complaint->created_at->format('d M Y H:i') }}</p>
            <div class="grid grid-cols-2 gap-3 text-sm mb-4">
                <div><span class="text-gray-400 text-xs">Kategori</span><p class="font-medium">{{ $complaint->category->name }}</p></div>
                <div><span class="text-gray-400 text-xs">Lokasi</span><p class="font-medium">{{ $complaint->location ?? '-' }}</p></div>
            </div>
            <div><span class="text-gray-400 text-xs">Deskripsi</span><p class="mt-1">{{ $complaint->description }}</p></div>
            @if($complaint->attachment)
                <img src="{{ asset('storage/'.$complaint->attachment) }}" class="rounded-lg mt-4 max-h-48 object-cover">
            @endif
        </div>
        <div class="bg-white rounded-xl shadow-sm border p-6">
            <h3 class="font-bold mb-4">Ubah Status</h3>
            <form method="POST" action="{{ route('admin.complaints.updateStatus',$complaint) }}" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label class="block text-sm font-medium mb-1">Status</label>
                    <select name="status" class="w-full border rounded-lg px-4 py-2">
                        <option value="pending" {{ $complaint->status=='pending'?'selected':'' }}>Pending</option>
                        <option value="processed" {{ $complaint->status=='processed'?'selected':'' }}>Processed</option>
                        <option value="resolved" {{ $complaint->status=='resolved'?'selected':'' }}>Resolved</option>
                        <option value="rejected" {{ $complaint->status=='rejected'?'selected':'' }}>Rejected</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Catatan Admin</label>
                    <textarea name="admin_notes" rows="3" class="w-full border rounded-lg px-4 py-2">{{ $complaint->admin_notes }}</textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Perbarui Status</button>
            </form>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow-sm border p-6">
        <h3 class="font-bold mb-4">Riwayat</h3>
        <div class="space-y-4">
            <div class="flex items-start space-x-3">
                <div class="w-3 h-3 bg-blue-600 rounded-full mt-1"></div>
                <div><p class="text-sm font-medium">Dibuat</p><p class="text-xs text-gray-400">{{ $complaint->created_at->format('d M Y H:i') }}</p></div>
            </div>
            @if($complaint->processed_at)
            <div class="flex items-start space-x-3">
                <div class="w-3 h-3 bg-green-500 rounded-full mt-1"></div>
                <div><p class="text-sm font-medium">Diproses</p><p class="text-xs text-gray-400">{{ $complaint->processed_at->format('d M Y H:i') }} oleh {{ $complaint->processor?->name ?? 'Admin' }}</p></div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection