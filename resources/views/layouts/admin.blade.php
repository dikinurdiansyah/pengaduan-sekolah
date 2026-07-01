<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}"><title>@yield('title','Admin')</title>
<script src="https://cdn.tailwindcss.com"></script><script src="https://cdn.jsdelivr.net/npm/chart.js"></script></head>
<body class="bg-gray-100"><div class="flex h-screen overflow-hidden">
<aside class="w-64 bg-slate-900 text-white flex flex-col flex-shrink-0">
    <div class="p-5 border-b border-slate-700"><h1 class="font-bold text-lg">SMK BUDI BAKTI CIWIDEY</h1><p class="text-xs text-slate-400">Admin Panel</p></div>
    <nav class="flex-1 p-3 space-y-1 overflow-y-auto">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 p-3 rounded-lg text-sm {{ request()->routeIs('admin.dashboard')?'bg-blue-600':'hover:bg-slate-800' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/></svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('admin.complaints.index') }}" class="flex items-center space-x-3 p-3 rounded-lg text-sm {{ request()->routeIs('admin.complaints.*')?'bg-blue-600':'hover:bg-slate-800' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <span>Pengaduan</span>
        </a>
        <a href="{{ route('admin.suggestions.index') }}" class="flex items-center space-x-3 p-3 rounded-lg text-sm {{ request()->routeIs('admin.suggestions.*')?'bg-blue-600':'hover:bg-slate-800' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3"/></svg>
            <span>Saran</span>
        </a>
        <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 p-3 rounded-lg text-sm {{ request()->routeIs('admin.users.*')?'bg-blue-600':'hover:bg-slate-800' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197"/></svg>
            <span>Pengguna</span>
        </a>
        <a href="{{ route('admin.categories.index') }}" class="flex items-center space-x-3 p-3 rounded-lg text-sm {{ request()->routeIs('admin.categories.*')?'bg-blue-600':'hover:bg-slate-800' }}">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z"/></svg>
            <span>Kategori</span>
        </a>
    </nav>
    <div class="p-4 border-t border-slate-700">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2"><div class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-sm font-bold">{{ substr(auth()->user()->name,0,1) }}</div><span class="text-sm">{{ auth()->user()->name }}</span></div>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="text-slate-400 hover:text-white text-sm">Keluar</button></form>
        </div>
    </div>
</aside>
<main class="flex-1 overflow-y-auto"><div class="p-6">
    @if(session('success'))<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>@endif
    @if($errors->any())<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>@endif
    @yield('content')
</div></main></div>@stack('scripts')
</body></html>
