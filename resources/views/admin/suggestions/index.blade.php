@extends('layouts.admin')
@section('title','Saran')
@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-4">Saran</h1>
<div class="bg-white rounded-xl shadow-sm border">
    <div class="p-4 border-b">
        <form method="GET" class="flex flex-wrap gap-3">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="flex-1 min-w-[200px] border rounded-lg px-4 py-2">
            <select name="status" class="border rounded-lg px-4 py-2">
                <option value="">Semua</option>
                <option value="pending" {{ request('status')=='pending'?'selected':'' }}>Pending</option>
                <option value="reviewed" {{ request('status')=='reviewed'?'selected':'' }}>Reviewed</option>
                <option value="implemented" {{ request('status')=='implemented'?'selected':'' }}>Implemented</option>
                <option value="rejected" {{ request('status')=='rejected'?'selected':'' }}>Rejected</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg">Filter</button>
        </form>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">No</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Judul</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Pelapor</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Tanggal</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Status</th>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($suggestions as $s)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-sm">{{ $s->suggestion_no }}</td>
                    <td class="px-4 py-3 text-sm font-medium">{{ Str::limit($s->title,35) }}</td>
                    <td class="px-4 py-3 text-sm">{{ $s->user->name }}</td>
                    <td class="px-4 py-3 text-sm">{{ $s->created_at->format('d M Y') }}</td>
                    <td class="px-4 py-3">
                        @if($s->status=='implemented')
                            <span class="px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-700">Implemented</span>
                        @elseif($s->status=='reviewed')
                            <span class="px-2 py-1 rounded text-xs font-medium bg-blue-100 text-blue-700">Reviewed</span>
                        @elseif($s->status=='rejected')
                            <span class="px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-700">Rejected</span>
                        @else
                            <span class="px-2 py-1 rounded text-xs font-medium bg-gray-100 text-gray-600">Pending</span>
                        @endif
                    </td>
                    <td class="px-4 py-3">
                        <a href="{{ route('admin.suggestions.show',$s) }}" class="text-blue-600 text-sm hover:underline">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="p-4 border-t">{{ $suggestions->links() }}</div>
</div>
@endsection