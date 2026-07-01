@extends('layouts.user')
@section('title','Notifikasi')
@section('content')
<h1 class="text-xl font-bold mb-4">Notifikasi</h1>
<div class="bg-white rounded-xl shadow-sm border divide-y">
    @forelse($notifications as $n)
    <div class="p-4 {{ !$n->is_read?'bg-blue-50':'' }}">
        <div class="flex justify-between items-start">
            <div>
                <h3 class="font-medium text-sm">{{ $n->title }}</h3>
                <p class="text-xs text-gray-600 mt-1">{{ $n->message }}</p>
                <p class="text-xs text-gray-400 mt-2">{{ $n->created_at->diffForHumans() }}</p>
            </div>
            @if(!$n->is_read)
            <form method="POST" action="{{ route('user.notifications.read',$n->id) }}">
                @csrf
                <button class="text-xs text-blue-600 hover:underline">Baca</button>
            </form>
            @endif
        </div>
    </div>
    @empty
    <div class="p-8 text-center text-gray-400">Tidak ada notifikasi</div>
    @endforelse
</div>
@endsection