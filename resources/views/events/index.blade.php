@extends('layouts.frontend')

@section('title', 'Event - PIK POTADS')

@section('content')
    <!-- Header Section -->
    <header class="px-6 md:px-12 py-16 max-w-7xl mx-auto">
        <h1 class="text-5xl md:text-6xl font-extrabold text-potads-blue mb-6">
            Koneksi <span class="bg-potads-yellow px-4 py-1 rounded-xl">Komunitas</span>
        </h1>
        <p class="text-gray-500 max-w-2xl text-lg leading-relaxed mb-10">
            Bergabunglah dengan kami untuk lokakarya, gala, dan jalan santai komunitas. Setiap acara adalah langkah menuju masa depan yang lebih cerah bagi semua.
        </p>

        <!-- Filters -->
        <div class="flex flex-wrap gap-4">
            <button class="bg-potads-yellow text-potads-blue font-bold px-8 py-2 rounded-full shadow-md">Semua Event</button>
            <button class="bg-blue-50 text-blue-400 font-semibold px-8 py-2 rounded-full border border-blue-100 hover:bg-blue-100 transition">Terbaru</button>
            <button class="bg-blue-50 text-blue-400 font-semibold px-8 py-2 rounded-full border border-blue-100 hover:bg-blue-100 transition">Selesai</button>
        </div>
    </header>

    <!-- Events Grid -->
    <section class="px-6 md:px-12 pb-20 max-w-7xl mx-auto">
        @if($events->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($events as $event)
                    <div class="relative h-[400px] rounded-[2.5rem] overflow-hidden group shadow-xl">
                        <img src="{{ Str::startsWith($event->image, 'http') ? $event->image : asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-potads-blue/95 via-transparent to-transparent p-10 flex flex-col justify-end">
                            <h3 class="text-2xl font-bold text-white mb-4 leading-tight">{{ $event->title }}</h3>
                            <div class="space-y-2 text-white/80 text-sm">
                                <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-4 h-4 text-potads-yellow"></i> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                                <span class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4 text-potads-yellow"></i> {{ $event->location }}</span>
                            </div>
                        </div>
                        <a href="{{ route('events.show', $event) }}" class="absolute bottom-10 right-10">
                            <div class="bg-white/20 backdrop-blur-md p-3 rounded-full text-white group-hover:bg-potads-yellow group-hover:text-potads-blue transition-all">
                                <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-blue-50/20 rounded-[3rem]">
                <p class="text-gray-500">Belum ada event yang tersedia.</p>
            </div>
        @endif
    </section>

    <!-- Create Event CTA -->
    <section class="px-6 md:px-12 py-20 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <div class="absolute -bottom-4 -left-4 w-full h-full bg-potads-yellow rounded-[2.5rem] -z-10 blur-sm opacity-20"></div>
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" alt="Adakan Acara" class="rounded-[2.5rem] w-full h-[450px] object-cover shadow-2xl">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-5xl font-bold text-potads-blue mb-8 leading-tight">
                    Adakan <span class="text-blue-900 border-b-4 border-potads-yellow pb-1">Acara</span> <br> Anda Sendiri
                </h2>
                <p class="text-gray-500 text-lg mb-10 leading-relaxed">
                    Apakah Anda memiliki ide untuk acara yang mendukung misi kami? Kami menawarkan sumber daya, ruang, dan dukungan organisasi untuk inisiatif yang dipimpin komunitas.
                </p>
                <button class="bg-potads-yellow text-potads-blue font-extrabold px-12 py-4 rounded-2xl shadow-lg hover:bg-yellow-400 transition transform hover:-translate-y-1">
                    Hubungi Kami
                </button>
            </div>
        </div>
    </section>
@endsection