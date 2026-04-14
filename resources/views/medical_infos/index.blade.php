@extends('layouts.frontend')

@section('title', 'Info Akademis & Medis - PIK POTADS')

@section('content')
<!-- Hero Section -->
<section class="bg-potads-blue py-20 px-6 md:px-12 text-center text-white relative overflow-hidden">
    <div class="absolute -top-10 -right-10 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
    <div class="relative z-10 max-w-3xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Info Akademis & Medis</h1>
        <p class="text-lg text-white/80 leading-relaxed">
            Sumber pengetahuan terpercaya mengenai perkembangan akademis dan kesehatan bagi anak dengan Down Syndrome.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="px-6 md:px-12 py-20 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @forelse($infos as $info)
            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-slate-100 flex flex-col group hover:shadow-xl transition-all duration-500">
                <div class="relative h-64 bg-slate-100 overflow-hidden">
                    @if($info->image)
                        <img src="{{ asset('storage/' . $info->image) }}" alt="{{ $info->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-blue-50">
                            <i data-lucide="activity" class="w-16 h-16 text-blue-200"></i>
                        </div>
                    @endif
                    <div class="absolute top-4 left-4">
                        <span class="px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/90 backdrop-blur-md shadow-sm text-potads-blue">
                            {{ ucfirst($info->category) }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 group-hover:text-blue-600 transition-colors line-clamp-2">{{ $info->title }}</h3>
                    <p class="text-slate-500 text-sm mb-8 line-clamp-3 leading-relaxed">
                        {{ Str::limit(strip_tags($info->content), 120) }}
                    </p>
                    <div class="mt-auto flex items-center justify-between">
                        <span class="text-xs text-slate-400 flex items-center gap-1">
                            <i data-lucide="calendar" class="w-3 h-3"></i> {{ $info->created_at->format('d M Y') }}
                        </span>
                        <a href="{{ route('medical_infos.show', $info->slug) }}" class="text-potads-blue font-bold text-sm hover:translate-x-1 transition-transform flex items-center gap-1">
                            Baca Selengkapnya <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 py-20 text-center">
                <i data-lucide="book-open" class="w-16 h-16 text-slate-200 mx-auto mb-4"></i>
                <p class="text-slate-400 font-medium">Belum ada informasi tersedia saat ini.</p>
            </div>
        @endforelse
    </div>

    <div class="mt-16">
        {{ $infos->links() }}
    </div>
</section>
@endsection
