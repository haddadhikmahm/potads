@extends('layouts.admin')

@section('header', 'Manajemen Artikel')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-lg font-bold text-gray-800 tracking-tight">Daftar Semua Artikel</h3>
    <a href="{{ route('admin.articles.create') }}" class="bg-potads-blue text-white px-6 py-2.5 rounded-xl font-bold hover:bg-potads-blue-dark transition shadow-lg flex items-center gap-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        Tulis Artikel
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
                    <th class="px-6 py-4 font-semibold">Judul Artikel</th>
                    <th class="px-6 py-4 font-semibold">Kategori</th>
                    <th class="px-6 py-4 font-semibold">Penulis</th>
                    <th class="px-6 py-4 font-semibold">Status</th>
                    <th class="px-6 py-4 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-50">
                @forelse($articles as $article)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" class="w-16 h-10 object-cover rounded-lg shadow-sm">
                        @else
                            <div class="w-16 h-10 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 text-xs">No Image</div>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-bold text-gray-700">{{ $article->title }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $article->category ?? 'Umum' }}</td>
                    <td class="px-6 py-4 text-gray-500">{{ $article->author->name }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold {{ $article->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700' }}">
                            {{ ucfirst($article->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('admin.articles.edit', $article) }}" class="text-potads-blue hover:text-potads-blue-dark font-bold transition">Edit</a>
                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold transition">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center text-gray-400 italic">Belum ada artikel yang diterbitkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($articles->hasPages())
    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100">
        {{ $articles->links() }}
    </div>
    @endif
</div>
@endsection
