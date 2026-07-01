<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}"><title>@yield('title','Pengaduan Sekolah')</title>
<script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-100 min-h-screen">
<nav class="bg-blue-700 text-white shadow-lg sticky top-0 z-40">
    <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <div class="w-9 h-9 bg-white rounded-lg flex items-center justify-center"><span class="text-blue-700 font-bold text-sm">PS</span></div>
            <div><h1 class="font-bold text-base">Pengaduan & Saran</h1><p class="text-[10px] text-blue-200">SMK BUDI BAKTI CIWIDEY</p></div>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('user.notifications.index') }}" class="relative"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg></a>
            <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="text-sm bg-blue-800 px-3 py-1 rounded hover:bg-blue-900">Keluar</button></form>
        </div>
    </div>
</nav>
<div class="max-w-5xl mx-auto px-4 py-6 pb-24">
    @if(session('success'))<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4">{{ session('success') }}</div>@endif
    @if(session('error'))<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4">{{ session('error') }}</div>@endif
    @if($errors->any())<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4"><ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>@endif
    @yield('content')
</div>
<nav class="fixed bottom-0 left-0 right-0 bg-white border-t shadow-lg z-50">
    <div class="max-w-5xl mx-auto flex justify-around py-2">
        <a href="{{ route('user.dashboard') }}" class="flex flex-col items-center p-1 {{ request()->routeIs('user.dashboard')?'text-blue-600':'text-gray-400' }}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg><span class="text-[10px]">Beranda</span></a>
        <a href="{{ route('user.complaints.index') }}" class="flex flex-col items-center p-1 {{ request()->routeIs('user.complaints.*')?'text-blue-600':'text-gray-400' }}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg><span class="text-[10px]">Pengaduan</span></a>
        <a href="{{ route('user.complaints.create') }}" class="flex flex-col items-center p-1 -mt-5"><div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center text-white shadow-lg"><svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg></div></a>
        <a href="{{ route('user.suggestions.index') }}" class="flex flex-col items-center p-1 {{ request()->routeIs('user.suggestions.*')?'text-blue-600':'text-gray-400' }}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg><span class="text-[10px]">Saran</span></a>
        <a href="{{ route('user.profile.edit') }}" class="flex flex-col items-center p-1 {{ request()->routeIs('user.profile.*')?'text-blue-600':'text-gray-400' }}"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg><span class="text-[10px]">Profil</span></a>
    </div>
</nav>
</body></html>