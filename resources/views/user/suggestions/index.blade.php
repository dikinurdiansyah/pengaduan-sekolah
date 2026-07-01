@extends('layouts.user')
@section('title','Saran')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-xl font-bold">Riwayat Saran</h1>
    <a href="{{ route('user.suggestions.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium">+ Baru</a>
</div>
<div class="bg-white rounded-xl shadow-sm border divide-y">
    @forelse($suggestions as $s)
    <div class="p-4">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-medium text-gray-800">{{ $s->title }}</h3>
                <p class="text-xs text-gray-400 mt-1">{{ $s->suggestion_no }} · {{ $s->created_at->format('d M Y') }}</p>
            </div>
            @if($s->status=='implemented')
                <span class="px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Implemented</span>
            @elseif($s->status=='reviewed')
                <span class="px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">Reviewed</span>
            @elseif($s->status=='rejected')
                <span class="px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Rejected</span>
            @else
                <span class="px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Pending</span>
            @endif
        </div>
    </div>
    @empty
    <div class="p-8 text-center text-gray-400">Belum ada saran</div>
    @endforelse
</div>
@endsection