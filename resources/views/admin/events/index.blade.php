@extends('layouts.admin')

@section('header', 'Manajemen Event')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-lg font-bold text-gray-800 tracking-tight">Daftar Semua Event</h3>
    <a href="{{ route('admin.events.create') }}" class="bg-potads-blue text-white px-6 py-2.5 rounded-xl font-bold hover:bg-potads-blue-dark transition shadow-lg flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tambah Event
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-6 shadow-sm">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr class="text-gray-400 text-xs uppercase tracking-widest">
                    <th class="px-6 py-4 font-semibold">Gambar</th>
                    <th class="px-6 py-4 font-semibold">Judul Event</th>
                    <th class="px-6 py-4 font-semibold">Tanggal</th>
                    <th class="px-6 py-4 font-semibold">Lokasi</th>
                    <th class="px-6 py-4 font-semibold">Status</th>
                    <th class="px-6 py-4 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                @forelse($events as $event)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        @if($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" class="w-16 h-10 object-cover rounded-lg shadow-sm">
                        @else
                            <div class="w-16 h-10 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 text-xs">No Image</div>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-bold text-gray-700">{{ $event->title }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ \Carbon\Carbon::parse($event->event_date)->format('d M Y, H:i') }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $event->location }}</td>
                    <td class="px-6 py-4">
                        @php
                            $statusColors = [
                                'upcoming' => 'bg-blue-100 text-blue-700',
                                'ongoing' => 'bg-yellow-100 text-yellow-700',
                                'completed' => 'bg-green-100 text-green-700',
                            ];
                        @endphp
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $statusColors[$event->status] ?? 'bg-gray-100 text-gray-700' }}">
                            {{ ucfirst($event->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.events.edit', $event) }}" class="text-potads-blue hover:text-potads-blue-dark font-bold transition">Edit</a>
                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-gray-400 italic">Belum ada event yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($events->hasPages())
    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
        {{ $events->links() }}
    </div>
    @endif
</div>
@endsection
