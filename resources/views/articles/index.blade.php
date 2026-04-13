@extends('layouts.frontend')

@section('title', 'Artikel - PIK POTADS')

@section('content')
    <!-- Header Section -->
    <header class="px-6 md:px-12 py-16 max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
        <div class="max-w-xl">
            <h1 class="text-5xl md:text-6xl font-extrabold text-potads-blue mb-4">
                Koneksi <br> <span class="bg-potads-yellow px-4 py-1 rounded-xl">Komunitas</span>
            </h1>
        </div>
        <div class="max-w-md flex flex-col items-end gap-6 text-right">
            <p class="text-gray-500 text-lg leading-relaxed">
                Bergabunglah dengan kami untuk lokakarya, gala, dan jalan santai komunitas. Setiap acara adalah langkah menuju masa depan yang lebih cerah bagi semua.
            </p>
            <a href="{{ route('articles.create') }}" class="bg-white border border-gray-300 text-gray-700 px-6 py-2 rounded-full text-sm font-semibold shadow-sm hover:bg-gray-50 transition">
                Buat Artikel
            </a>
        </div>
    </header>

    <!-- Search & Filter Section -->
    <section class="px-6 md:px-12 py-8 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 border-t border-gray-100 pt-10">
            <h2 class="text-3xl font-extrabold text-potads-blue">Artikel</h2>
            <form action="{{ route('articles.index') }}" method="GET" class="flex items-center gap-2 w-full md:w-auto">
                <div class="relative w-full md:w-64">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search......" class="w-full bg-gray-50 border border-gray-200 rounded-full py-2 px-6 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-8 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition">Cari</button>
            </form>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="px-6 md:px-12 pb-16 max-w-7xl mx-auto">
        @if($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($articles as $article)
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                        <div class="overflow-hidden h-56">
                            <img src="{{ Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-8 flex-1 flex flex-col items-center text-center">
                            <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">{{ $article->title }}</h3>
                            <p class="text-gray-400 text-sm mb-8 line-clamp-2">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                            <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                                <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                                    <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> {{ $article->created_at->format('d M Y') }}</span>
                                    <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> {{ $article->author->name }}</span>
                                </div>
                                <a href="{{ route('articles.show', $article->slug) }}" class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16">
                {{ $articles->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <p class="text-gray-500">Tidak ada artikel ditemukan.</p>
            </div>
        @endif
    </section>
@endsection