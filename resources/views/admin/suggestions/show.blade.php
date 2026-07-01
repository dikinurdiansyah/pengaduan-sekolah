@extends('layouts.admin')
@section('title','Detail Saran')
@section('content')
<a href="{{ route('admin.suggestions.index') }}" class="text-blue-600 text-sm hover:underline mb-4 inline-block">← Kembali</a>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2">
        <div class="bg-white rounded-xl shadow-sm border p-6 mb-6">
            <div class="flex justify-between items-start mb-4">
                <h2 class="text-lg font-bold">{{ $suggestion->title }}</h2>
                @if($suggestion->status=='implemented')
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Implemented</span>
                @elseif($suggestion->status=='reviewed')
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">Reviewed</span>
                @elseif($suggestion->status=='rejected')
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Rejected</span>
                @else
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">Pending</span>
                @endif
            </div>
            <p class="text-xs text-gray-400 mb-4">{{ $suggestion->suggestion_no }} · {{ $suggestion->user->name }} · {{ $suggestion->created_at->format('d M Y H:i') }}</p>
            <p class="mb-4">{{ $suggestion->description }}</p>
            @if($suggestion->attachment)
                <img src="{{ asset('storage/'.$suggestion->attachment) }}" class="rounded-lg max-h-48 object-cover">
            @endif
        </div>
        <div class="bg-white rounded-xl shadow-sm border p-6">
            <h3 class="font-bold mb-4">Ubah Status</h3>
            <form method="POST" action="{{ route('admin.suggestions.updateStatus',$suggestion) }}" class="space-y-4">
                @csrf
                @method('PUT')
                <select name="status" class="w-full border rounded-lg px-4 py-2">
                    <option value="pending" {{ $suggestion->status=='pending'?'selected':'' }}>Pending</option>
                    <option value="reviewed" {{ $suggestion->status=='reviewed'?'selected':'' }}>Reviewed</option>
                    <option value="implemented" {{ $suggestion->status=='implemented'?'selected':'' }}>Implemented</option>
                    <option value="rejected" {{ $suggestion->status=='rejected'?'selected':'' }}>Rejected</option>
                </select>
                <textarea name="admin_notes" rows="3" class="w-full border rounded-lg px-4 py-2" placeholder="Catatan admin...">{{ $suggestion->admin_notes }}</textarea>
                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700">Perbarui</button>
            </form>
        </div>
    </div>
</div>
@endsection