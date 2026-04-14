@extends('layouts.frontend')

@section('title', 'PIK POTADS - Selamat Datang')

@section('content')
    <!-- Hero Section -->
    <section class="px-6 md:px-12 py-8">
        <div class="relative rounded-3xl overflow-hidden bg-gray-900 aspect-[21/9] flex items-center">
            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=2070&auto=format&fit=crop" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover opacity-60">
            <div class="relative z-10 px-12 max-w-2xl text-white">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Selamat Datang <br> di <span class="text-potads-yellow">PIK POTADS</span>
                </h1>
                <p class="text-lg md:text-xl mb-8 text-gray-100">
                    Menyediakan sumber daya, komunitas, dan advokasi yang dibutuhkan untuk membantu individu dengan Down Syndrome berkembang di setiap tahap kehidupan.
                </p>
                <a href="{{ route('donations.index') }}" class="bg-potads-yellow text-potads-blue px-8 py-4 rounded-xl font-bold inline-flex items-center gap-2 hover:scale-105 transition-transform">
                    Donasi Sekarang <i data-lucide="heart" class="w-5 h-5 fill-current"></i>
                </a>
            </div>
            <!-- Pagination indicator dots -->
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-2">
                <div class="w-8 h-2 bg-potads-yellow rounded-full"></div>
                <div class="w-8 h-2 bg-white/40 rounded-full"></div>
                <div class="w-8 h-2 bg-white/40 rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Stats Cards -->
    <section class="px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-blue-50/50 p-8 rounded-2xl border border-blue-100 text-center flex flex-col items-center">
            <div class="bg-blue-100 p-3 rounded-full mb-4">
                <i data-lucide="users" class="text-potads-blue w-8 h-8"></i>
            </div>
            <h3 class="text-4xl font-bold text-potads-blue mb-1">500+</h3>
            <p class="text-gray-500 uppercase text-xs font-bold tracking-widest">Anak Down Syndrome</p>
        </div>
        <div class="bg-yellow-50/50 p-8 rounded-2xl border border-yellow-100 text-center flex flex-col items-center">
            <div class="bg-yellow-100 p-3 rounded-full mb-4">
                <i data-lucide="heart-handshake" class="text-yellow-600 w-8 h-8"></i>
            </div>
            <h3 class="text-4xl font-bold text-potads-blue mb-1">20+</h3>
            <p class="text-gray-500 uppercase text-xs font-bold tracking-widest">Program Aktif</p>
        </div>
        <div class="bg-blue-50/50 p-8 rounded-2xl border border-blue-100 text-center flex flex-col items-center">
            <div class="bg-blue-100 p-3 rounded-full mb-4">
                <i data-lucide="plus-square" class="text-potads-blue w-8 h-8"></i>
            </div>
            <h3 class="text-4xl font-bold text-potads-blue mb-1">15</h3>
            <p class="text-gray-500 uppercase text-xs font-bold tracking-widest">Rumah Sakit Mitra</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="px-6 md:px-12 py-20 flex flex-col md:flex-row items-center gap-16">
        <div class="w-full md:w-1/2 relative">
            <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-potads-yellow rounded-2xl z-0"></div>
            <div class="absolute -top-6 -left-6 w-16 h-16 bg-blue-100 rounded-full z-0"></div>
            <img src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?q=80&w=1896&auto=format&fit=crop" alt="Beda Tapi Keren" class="rounded-3xl shadow-2xl relative z-10 w-full object-cover aspect-square">
        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-4xl font-extrabold text-potads-blue mb-6">BEDA TAPI <span class="text-potads-yellow">KEREN</span></h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Walaupun berbeda, tetapi anak-anak dengan Down Syndrome di Jawa Barat tetap mampu berkarya, berprestasi, dan menunjukkan keistimewaan dalam berbagai bidang.
            </p>
            
            <div class="space-y-6">
                <!-- Visi -->
                <div class="flex gap-4 p-6 bg-white rounded-2xl shadow-sm border-l-4 border-potads-yellow">
                    <div class="text-potads-blue pt-1">
                        <i data-lucide="eye" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-potads-blue text-lg mb-2">Visi Kami</h4>
                        <p class="text-gray-500 text-sm">Menjadi pusat informasi dan konsultasi terlengkap tentang Down Syndrome di Indonesia.</p>
                    </div>
                </div>
                <!-- Misi -->
                <div class="flex gap-4 p-6 bg-white rounded-2xl shadow-sm border-l-4 border-potads-blue">
                    <div class="text-potads-blue pt-1">
                        <i data-lucide="target" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-potads-blue text-lg mb-2">Misi Kami</h4>
                        <ul class="text-gray-500 text-sm space-y-1">
                            <li>• Memiliki pusat informasi terlengkap</li>
                            <li>• Menyediakan informasi terkini</li>
                            <li>• Menyebarluaskan informasi mengenai Down Syndrome</li>
                            <li>• Memberikan konsultasi berkelanjutan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="px-6 md:px-12 py-20 bg-gray-50">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-4xl font-bold text-potads-blue mb-4">Sekilas Mengenai Dunia Kami</h2>
            <p class="text-gray-600">Saksikan bagaimana Bright Horizons membuat perbedaan setiap harinya melalui inisiatif berbasis komunitas kami.</p>
        </div>
        <div class="max-w-5xl mx-auto relative group cursor-pointer">
            @if($latestVideo)
                @php
                    $videoId = '';
                    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i', $latestVideo->url, $matches)) {
                        $videoId = $matches[1];
                    }
                @endphp
                @if($videoId)
                    <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" alt="{{ $latestVideo->title }}" class="w-full aspect-video object-cover rounded-[2.5rem] shadow-xl">
                @else
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Thumbnail Video" class="w-full aspect-video object-cover rounded-[2.5rem] shadow-xl">
                @endif
                <a href="{{ $latestVideo->url }}" target="_blank" class="absolute inset-0 bg-black/20 rounded-[2.5rem] flex items-center justify-center group-hover:bg-black/30 transition">
                    <div class="w-20 h-20 bg-potads-yellow rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i data-lucide="play" class="w-10 h-10 text-potads-blue fill-current"></i>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h4 class="font-bold text-lg">{{ $latestVideo->title }}</h4>
                    </div>
                </a>
            @else
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Thumbnail Video" class="w-full aspect-video object-cover rounded-[2.5rem] shadow-xl">
                <div class="absolute inset-0 bg-black/20 rounded-[2.5rem] flex items-center justify-center group-hover:bg-black/30 transition">
                    <div class="w-20 h-20 bg-potads-yellow rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition">
                        <i data-lucide="play" class="w-10 h-10 text-potads-blue fill-current"></i>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Current Events -->
    <section class="px-6 md:px-12 py-20">
        <div class="flex justify-between items-end mb-12">
            <h2 class="text-3xl font-bold text-potads-blue">Event Saat Ini</h2>
            <a href="{{ route('events.index') }}" class="text-potads-blue font-bold flex items-center gap-2 hover:gap-3 transition-all">
                Lihat Semua Event <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($events as $event)
                <div class="relative h-[400px] rounded-3xl overflow-hidden group">
                    <img src="{{ Str::startsWith($event->image, 'http') ? $event->image : asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-potads-blue/90 via-transparent to-transparent p-10 flex flex-col justify-end">
                        <h3 class="text-2xl font-bold text-white mb-4">{{ $event->title }}</h3>
                        <div class="flex gap-6 text-white/80 text-sm">
                            <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-4 h-4"></i> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                            <span class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4"></i> {{ $event->location }}</span>
                        </div>
                    </div>
                    <a href="{{ route('events.show', $event) }}" class="absolute bottom-10 right-10">
                        <div class="bg-white/20 p-3 rounded-full backdrop-blur-sm group-hover:bg-potads-yellow group-hover:text-potads-blue text-white transition">
                            <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Create Event Section -->
    <section class="px-6 md:px-12 py-12">
        <div class="bg-white border-2 border-blue-400 rounded-3xl overflow-hidden flex flex-col md:flex-row items-center p-8 md:p-0">
            <div class="w-full md:w-1/2 p-4">
                <img src="https://images.unsplash.com/photo-1522071823990-b99787a07a3c?q=80&w=2070&auto=format&fit=crop" alt="Adakan Acara" class="rounded-2xl w-full h-80 object-cover shadow-lg">
            </div>
            <div class="w-full md:w-1/2 p-12">
                <h2 class="text-4xl font-bold text-potads-blue mb-4 leading-tight">Adakan <span class="text-blue-900 underline decoration-potads-yellow">Acara</span> Anda Sendiri</h2>
                <p class="text-gray-500 mb-8 leading-relaxed">
                    Apakah Anda memiliki ide untuk acara yang mendukung misi kami? Kami menawarkan sumber daya, ruang, dan dukungan organisasi untuk inisiatif yang dipimpin komunitas.
                </p>
                <button class="bg-potads-yellow text-potads-blue font-bold px-10 py-4 rounded-full shadow-lg hover:shadow-xl transition-all">Hubungi Kami</button>
            </div>
        </div>
    </section>

    <!-- Articles -->
    <section class="px-6 md:px-12 py-20">
        <div class="flex justify-between items-end mb-12">
            <h2 class="text-4xl font-bold text-potads-blue leading-tight">Artikel Terkini</h2>
            <a href="{{ route('articles.index') }}" class="text-potads-blue font-bold flex items-center gap-2 hover:gap-3 transition-all">
                Lihat Semua Artikel <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($articles as $article)
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group">
                    <div class="overflow-hidden h-56">
                        <img src="{{ Str::startsWith($article->image, 'http') ? $article->image : asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="text-xl font-bold text-potads-blue mb-4 line-clamp-2">{{ $article->title }}</h3>
                        <p class="text-gray-400 text-sm mb-8 line-clamp-2">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-4 text-xs text-blue-400 font-bold">
                                <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> {{ $article->created_at->format('d M Y') }}</span>
                                <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> {{ $article->author->name }}</span>
                            </div>
                            <a href="{{ route('articles.show', $article->slug) }}" class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-lg text-sm hover:bg-potads-blue hover:text-white transition">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Achievement Section -->
    <section class="px-6 md:px-12 py-20 bg-blue-50/30">
        <div class="flex flex-col md:flex-row items-center gap-12 max-w-6xl mx-auto">
            <div class="w-full md:w-1/2">
                <h2 class="text-5xl font-extrabold text-potads-blue mb-8 border-l-4 border-potads-yellow pl-6">
                    Achievement <span class="text-potads-yellow">POTADS</span>
                </h2>
                <img src="https://images.unsplash.com/photo-1484665754804-74b091211472?q=80&w=2070&auto=format&fit=crop" alt="Achievement" class="w-full rounded-[2rem] shadow-xl">
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h3 class="text-4xl font-bold text-gray-800 mb-6">Sentuhan Kasih: Charity Day</h3>
                <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                    merupakan kegiatan sosial yang bertujuan untuk menumbuhkan kepedulian dan semangat berbagi melalui aksi nyata ...
                </p>
                <button class="bg-potads-blue text-white px-10 py-4 rounded-full font-bold flex items-center gap-3 mx-auto md:mx-0 hover:bg-blue-900 transition">
                    Baca Artikel <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Donation CTA -->
    <section class="px-6 md:px-12 py-20">
        <div class="bg-gradient-to-r from-potads-blue to-blue-600 rounded-[3rem] p-16 text-center text-white relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute -top-20 -right-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-6xl font-extrabold mb-8">Maukah Anda Mendukung Perjalanan Kami?</h2>
                <p class="text-lg md:text-xl text-white/80 mb-12">
                    Donasi Anda secara langsung membiayai terapi intervensi dini dan paket pendidikan untuk keluarga yang membutuhkan. Setiap pemberian membuka pintu baru.
                </p>
                <a href="{{ route('donations.index') }}" class="bg-potads-yellow text-potads-blue text-lg font-extrabold px-12 py-5 rounded-2xl hover:scale-105 transition-transform shadow-2xl inline-block">
                    Lakukan Donasi
                </a>
            </div>
        </div>
    </section>
@endsection