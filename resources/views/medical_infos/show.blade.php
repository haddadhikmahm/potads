@extends('layouts.frontend')

@section('title', $info->title . ' - PIK POTADS')

@section('content')
<article class="max-w-4xl mx-auto px-6 py-20">
    <header class="mb-12 text-center">
        <a href="{{ route('medical_infos.index') }}" class="inline-flex items-center gap-2 text-potads-blue font-bold text-sm mb-6 hover:-translate-x-1 transition-transform">
            <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Daftar
        </a>
        <div class="mb-4">
            <span class="px-4 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-blue-50 text-potads-blue">
                {{ ucfirst($info->category) }}
            </span>
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold text-potads-blue leading-tight mb-6">{{ $info->title }}</h1>
        <div class="flex items-center justify-center gap-6 text-sm text-slate-400">
            <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-4 h-4"></i> {{ $info->created_at->format('d M Y') }}</span>
        </div>
    </header>

    @if($info->image)
        <div class="mb-12 rounded-[3rem] overflow-hidden shadow-xl border border-slate-100">
            <img src="{{ asset('storage/' . $info->image) }}" alt="{{ $info->title }}" class="w-full h-auto">
        </div>
    @endif

    <div class="prose prose-lg max-w-none prose-slate prose-p:text-slate-600 prose-p:leading-relaxed prose-headings:text-potads-blue prose-headings:font-bold">
        {!! nl2br($info->content) !!}
    </div>
</article>
@endsection
