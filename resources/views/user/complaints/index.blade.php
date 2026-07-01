@extends('layouts.user')
@section('title','Pengaduan')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">Riwayat Pengaduan</h1>
    <a href="{{ route('user.complaints.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium">+ Baru</a>
</div>
<div class="bg-white rounded-xl shadow-sm border divide-y">
    @forelse($complaints as $c)
    <a href="{{ route('user.complaints.show',$c) }}" class="block p-4 hover:bg-gray-50">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-medium text-gray-800">{{ $c->title }}</h3>
                <p class="text-xs text-gray-400 mt-1">{{ $c->complaint_no }} · {{ $c->created_at->format('d M Y') }}</p>
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
        </div>
    </a>
    @empty
    <div class="p-8 text-center text-gray-400">Belum ada pengaduan</div>
    @endforelse
</div>
@endsection