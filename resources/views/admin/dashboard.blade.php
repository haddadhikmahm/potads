@extends('layouts.admin')

@section('header', 'Dashboard Overview')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stat Card: Users -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
        </div>
        <div>
            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Total Pengguna</div>
            <div class="text-2xl font-bold text-gray-800">{{ $stats['users_count'] }}</div>
        </div>
    </div>

    <!-- Stat Card: Events -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        </div>
        <div>
            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Total Event</div>
            <div class="text-2xl font-bold text-gray-800">{{ $stats['events_count'] }}</div>
        </div>
    </div>

    <!-- Stat Card: Articles -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2zM15 4v4h4"></path></svg>
        </div>
        <div>
            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Total Artikel</div>
            <div class="text-2xl font-bold text-gray-800">{{ $stats['articles_count'] }}</div>
        </div>
    </div>

    <!-- Stat Card: Donations -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center gap-4">
        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center text-red-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
        </div>
        <div>
            <div class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Donasi Terkumpul</div>
            <div class="text-2xl font-bold text-gray-800">Rp {{ number_format($stats['donations_total'], 0, ',', '.') }}</div>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
    <h3 class="text-lg font-bold text-gray-800 mb-6">Manajemen Konten Terkini</h3>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-400 text-xs uppercase tracking-widest border-b border-gray-100">
                    <th class="py-4 font-semibold uppercase">Modul</th>
                    <th class="py-4 font-semibold uppercase">Status Keaktifan</th>
                    <th class="py-4 font-semibold uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                    <td class="py-4 font-medium text-gray-700">Daftar Event Terdekat</td>
                    <td class="py-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Aktif</span></td>
                    <td class="py-4"><a href="#" class="text-potads-blue hover:underline font-semibold">Kelola</a></td>
                </tr>
                <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                    <td class="py-4 font-medium text-gray-700">Berita & Artikel Edukasi</td>
                    <td class="py-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Aktif</span></td>
                    <td class="py-4"><a href="#" class="text-potads-blue hover:underline font-semibold">Kelola</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
