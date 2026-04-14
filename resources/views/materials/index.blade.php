@extends('layouts.frontend')

@section('title', 'Materi & Sumber Daya - PIK POTADS')

@section('content')
<!-- Hero Section -->
<section class="bg-potads-blue py-20 px-6 md:px-12 text-center text-white relative overflow-hidden">
    <div class="absolute -top-10 -left-10 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Materi & Sumber Daya</h1>
        <p class="text-lg text-white/80 leading-relaxed">
            Kumpulan video edukasi, modul latihan, dan panduan lengkap untuk mendukung tumbuh kembang anak dengan Down Syndrome.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="px-6 md:px-12 py-20 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @forelse($materials as $material)
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-100 flex flex-col group hover:shadow-xl transition-all duration-500">
                <div class="relative h-48 bg-slate-100 overflow-hidden">
                    @if($material->type === 'video')
                        @php
                            $videoId = '';
                            if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i', $material->url, $matches)) {
                                $videoId = $matches[1];
                            }
                        @endphp
                        @if($videoId)
                            <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" onerror="this.src='https://images.unsplash.com/photo-1492724441997-5dc865305da7?q=80&w=2070&auto=format&fit=crop'">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-slate-200">
                                <i data-lucide="play-circle" class="w-12 h-12 text-slate-400"></i>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <i data-lucide="play" class="w-12 h-12 text-white fill-current"></i>
                        </div>
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-amber-50">
                            <i data-lucide="file-text" class="w-16 h-16 text-amber-200"></i>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md shadow-sm text-potads-blue">
                            {{ $material->category ?? 'Materi' }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex-1 flex flex-col text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 group-hover:text-blue-600 transition-colors line-clamp-2">{{ $material->title }}</h3>
                    <p class="text-slate-500 text-sm mb-8 line-clamp-3 leading-relaxed">
                        {{ $material->description }}
                    </p>
                    <div class="mt-auto">
                        @if($material->type === 'video')
                            <a href="{{ $material->url }}" target="_blank" class="w-full py-3 bg-blue-50 text-potads-blue rounded-xl font-bold hover:bg-potads-blue hover:text-white transition-all flex items-center justify-center gap-2">
                                <i data-lucide="external-link" class="w-4 h-4"></i> Lihat Video
                            </a>
                        @else
                            <a href="{{ asset('storage/' . $material->file_path) }}" target="_blank" class="w-full py-3 bg-amber-50 text-amber-700 rounded-xl font-bold hover:bg-amber-600 hover:text-white transition-all flex items-center justify-center gap-2">
                                <i data-lucide="download" class="w-4 h-4"></i> Download File
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 py-20 text-center">
                <i data-lucide="file-question" class="w-16 h-16 text-slate-200 mx-auto mb-4"></i>
                <p class="text-slate-400 font-medium">Belum ada materi yang tersedia saat ini.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-16">
        {{ $materials->links() }}
    </div>
</section>
@endsection
