@extends('layouts.admin')
@section('title','Dashboard Admin')
@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-6">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <div class="bg-white p-5 rounded-xl shadow-sm border"><p class="text-sm text-gray-500">Total Laporan</p><p class="text-3xl font-bold text-blue-600 mt-1">{{ $totalComplaints }}</p></div>
    <div class="bg-white p-5 rounded-xl shadow-sm border"><p class="text-sm text-gray-500">Diproses</p><p class="text-3xl font-bold text-yellow-600 mt-1">{{ $processedComplaints }}</p></div>
    <div class="bg-white p-5 rounded-xl shadow-sm border"><p class="text-sm text-gray-500">Selesai</p><p class="text-3xl font-bold text-green-600 mt-1">{{ $resolvedComplaints }}</p></div>
    <div class="bg-white p-5 rounded-xl shadow-sm border"><p class="text-sm text-gray-500">Ditolak</p><p class="text-3xl font-bold text-red-600 mt-1">{{ $rejectedComplaints }}</p></div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div class="bg-white p-5 rounded-xl shadow-sm border"><h3 class="font-bold mb-3">Grafik Bulanan</h3><div style="height: 250px; position: relative;"><canvas id="monthlyChart"></canvas></div></div>
    <div class="bg-white p-5 rounded-xl shadow-sm border"><h3 class="font-bold mb-3">Per Kategori</h3><div style="height: 250px; position: relative;"><canvas id="catChart"></canvas></div></div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white rounded-xl shadow-sm border">
        <div class="p-4 border-b flex justify-between"><h3 class="font-bold">Pengaduan Terbaru</h3><a href="{{ route('admin.complaints.index') }}" class="text-sm text-blue-600">Semua →</a></div>
        @forelse($recentComplaints->take(5) as $c)
        <div class="p-4 border-b last:border-0"><div class="flex justify-between"><div><p class="font-medium text-sm">{{ $c->title }}</p><p class="text-xs text-gray-400">{{ $c->user->name }} · {{ $c->created_at->format('d M') }}</p></div>
        @if($c->status == 'resolved')<span class="px-2 py-1 rounded text-xs bg-green-100 text-green-700">Resolved</span>@elseif($c->status == 'processed')<span class="px-2 py-1 rounded text-xs bg-yellow-100 text-yellow-700">Processed</span>@elseif($c->status == 'rejected')<span class="px-2 py-1 rounded text-xs bg-red-100 text-red-700">Rejected</span>@else<span class="px-2 py-1 rounded text-xs bg-gray-100 text-gray-600">Pending</span>@endif</div></div>
        @empty<div class="p-4 text-center text-gray-400 text-sm">Belum ada pengaduan</div>@endforelse
    </div>
    <div class="bg-white rounded-xl shadow-sm border">
        <div class="p-4 border-b flex justify-between"><h3 class="font-bold">Saran Terbaru</h3><a href="{{ route('admin.suggestions.index') }}" class="text-sm text-blue-600">Semua →</a></div>
        @forelse($recentSuggestions->take(5) as $s)
        <div class="p-4 border-b last:border-0"><div class="flex justify-between"><div><p class="font-medium text-sm">{{ $s->title }}</p><p class="text-xs text-gray-400">{{ $s->user->name }} · {{ $s->created_at->format('d M') }}</p></div>
        @if($s->status == 'implemented')<span class="px-2 py-1 rounded text-xs bg-green-100 text-green-700">Implemented</span>@elseif($s->status == 'reviewed')<span class="px-2 py-1 rounded text-xs bg-blue-100 text-blue-700">Reviewed</span>@else<span class="px-2 py-1 rounded text-xs bg-gray-100 text-gray-600">Pending</span>@endif</div></div>
        @empty<div class="p-4 text-center text-gray-400 text-sm">Belum ada saran</div>@endforelse
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var monthLabels = @json($monthLabels);
var monthData = @json($monthData);
var catLabels = @json($catLabels);
var catData = @json($catData);
if (monthLabels.length > 0) {
    new Chart(document.getElementById('monthlyChart').getContext('2d'), {
        type: 'line',
        data: {labels: monthLabels, datasets: [{label: 'Pengaduan', data: monthData, borderColor: '#2563eb', backgroundColor: 'rgba(37,99,235,0.1)', tension: 0.4, fill: true}]},
        options: {responsive: true, maintainAspectRatio: false, plugins: {legend: {display: false}}}
    });
}
if (catLabels.length > 0) {
    new Chart(document.getElementById('catChart').getContext('2d'), {
        type: 'doughnut',
        data: {labels: catLabels, datasets: [{data: catData, backgroundColor: ['#2563eb','#10b981','#f59e0b','#ef4444','#8b5cf6','#ec4899']}]},
        options: {responsive: true, maintainAspectRatio: false}
    });
}
</script>
@endpush
@endsection