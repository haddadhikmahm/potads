@extends('layouts.frontend')

@section('title', 'PIK POTADS - File Materi Orang Tua')

@section('content')
<div class="bg-gray-50/50 min-h-screen py-12 px-6 md:px-12 pt-24 md:pt-32">
    <div class="max-w-7xl mx-auto">
        <!-- Header & Search -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-10 gap-4">
            <h1 class="text-3xl font-extrabold text-potads-blue">File Materi Orang Tua</h1>
            
            <form action="{{ route('materials.index') }}" method="GET" class="w-full md:w-auto relative">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search......." class="pl-5 pr-20 py-2.5 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-potads-blue w-full md:w-80 shadow-sm text-sm">
                <button type="submit" class="absolute right-1 top-1.5 bottom-1.5 bg-potads-blue text-white px-5 rounded-full text-sm font-semibold hover:bg-blue-900 transition-colors">
                    Cari
                </button>
            </form>
        </div>

        <!-- Materials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12" id="materialsGrid">
            @forelse($materials as $index => $material)
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-md border border-gray-100 transition-all flex flex-col h-full material-card {{ $index >= 6 ? 'hidden' : '' }}">
                    @php
                        $imgSrc = $material->image ? asset('storage/' . $material->image) : 'https://images.unsplash.com/photo-1529390079861-591de354faf5?q=80&w=2070&auto=format&fit=crop';
                    @endphp
                    <img src="{{ $imgSrc }}" alt="{{ $material->title }}" class="w-full h-56 object-cover">
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-potads-blue mb-3 text-center line-clamp-2 leading-tight">
                            {{ $material->title }}
                        </h3>
                        <p class="text-gray-500 text-sm mb-6 text-center line-clamp-3">
                            {{ $material->description }}
                        </p>
                        <div class="mt-auto flex justify-end">
                            <a href="{{ route('materials.show', $material->id) }}" class="inline-block bg-blue-50 text-potads-blue px-6 py-2 rounded-full font-bold text-sm hover:bg-potads-blue hover:text-white transition-colors">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-12 text-center text-gray-500">
                    <i data-lucide="folder-open" class="w-12 h-12 mx-auto mb-4 text-gray-300"></i>
                    <p>Materi belum tersedia saat ini.</p>
                </div>
            @endforelse
        </div>

        <!-- Load More -->
        <div class="flex justify-center mt-12" id="loadMoreContainer">
            <button type="button" onclick="showAllCards()" class="border-[1.5px] border-potads-blue text-potads-blue bg-white font-bold px-16 py-3 rounded-2xl hover:bg-blue-50 transition-colors flex items-center gap-3 shadow-sm">
                Muat Lebih Banyak <i data-lucide="chevron-down" class="w-5 h-5 text-potads-blue"></i>
            </button>
        </div>
        
        <script>
            function showAllCards() {
                const cards = document.querySelectorAll('.material-card.hidden');
                cards.forEach(card => {
                    card.classList.remove('hidden');
                });
                // Sembunyikan tombol setelah diklik
                document.getElementById('loadMoreContainer').style.display = 'none';
            }
        </script>
    </div>
</div>
@endsection
