<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PIK POTADS Jabar - Pusat Informasi & Konsultasi</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Montserrat', sans-serif; }
            .bg-potads-navy { background-color: #003D7C; }
            .text-potads-navy { color: #003D7C; }
            .bg-potads-yellow { background-color: #FFD100; }
            .text-potads-yellow { color: #FFD100; }
            .btn-yellow { background-color: #FFD100; color: #003D7C; font-weight: 700; }
            .btn-yellow:hover { background-color: #e6bc00; }
        </style>
    </head>
    <body class="antialiased bg-white text-gray-900">
        <!-- Navigation -->
        <nav class="sticky top-0 left-0 right-0 z-50 bg-potads-navy text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex items-center">
                        <a href="/" class="flex items-center gap-2">
                            <img src="https://via.placeholder.com/50x50?text=LOGO" alt="POTADS Logo" class="w-12 h-12 bg-white rounded-md p-1">
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-6 text-sm font-semibold tracking-wide">
                        <a href="#" class="text-potads-yellow border-b-2 border-potads-yellow pb-1">Beranda</a>
                        <a href="#" class="hover:text-potads-yellow transition uppercase">Tentang Kami</a>
                        <a href="#" class="hover:text-potads-yellow transition uppercase">Event</a>
                        <a href="#" class="hover:text-potads-yellow transition uppercase">Artikel</a>
                        <a href="#" class="hover:text-potads-yellow transition flex items-center gap-1 uppercase">Materi <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                        <a href="#" class="hover:text-potads-yellow transition uppercase">Akademis & Medis</a>
                    </div>
                    <div class="flex items-center gap-4">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn-yellow px-6 py-2 rounded-lg text-sm transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-yellow px-8 py-2 rounded-lg text-sm transition uppercase shadow-sm">Login</a>
                        @endauth
                        <div class="w-10 h-10 rounded-full border-2 border-white flex items-center justify-center cursor-pointer hover:bg-white/10 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative bg-potads-navy pt-16 pb-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="text-white space-y-8 animate-fade-in-left">
                        <h1 class="text-5xl lg:text-7xl font-extrabold leading-[1.1] tracking-tight">
                            Selamat Datang<br>di <span class="text-potads-yellow uppercase">PIK POTADS</span>
                        </h1>
                        <p class="text-lg text-blue-50 font-medium max-w-xl leading-relaxed opacity-90">
                            Menyediakan sumber daya, komunitas, dan advokasi yang dibutuhkan untuk membantu individu dengan Down Syndrome berkembang di setiap tahap kehidupan.
                        </p>
                        <div class="pt-4 flex items-center gap-6">
                            <a href="{{ route('donations.index') }}" class="bg-potads-yellow text-potads-navy px-8 py-4 rounded-xl font-extrabold text-lg hover:bg-potads-yellow-dark transition-all transform hover:scale-105 shadow-xl flex items-center gap-3">
                                Donasi Sekarang
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </a>
                            <div class="flex -space-x-4 overflow-hidden py-1">
                                <div class="w-10 h-10 rounded-full border-2 border-potads-navy bg-white/20"></div>
                                <div class="w-10 h-10 rounded-full border-2 border-potads-navy bg-white/40"></div>
                                <div class="w-10 h-10 rounded-full border-2 border-potads-navy bg-white/60"></div>
                                <div class="flex items-center justify-center text-xs font-bold pl-6 text-blue-100">500+ Member</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-32 h-1.5 bg-potads-yellow rounded-full"></div>
                            <div class="w-16 h-1.5 bg-white/20 rounded-full"></div>
                            <div class="w-16 h-1.5 bg-white/20 rounded-full"></div>
                        </div>
                    </div>
                    <div class="relative flex justify-center lg:justify-end">
                        <div class="relative w-full max-w-lg aspect-square">
                            <img src="https://via.placeholder.com/600x600?text=Anak+POTADS" alt="POTADS Child Illustration" class="w-full h-full object-contain drop-shadow-2xl brightness-110">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background Decoration -->
            <div class="absolute -right-20 top-20 w-[600px] h-[600px] bg-potads-yellow opacity-5 rounded-full blur-[120px]"></div>
        </section>

        <!-- Stats Section -->
        <section class="py-20 -mt-20 relative z-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-[#E9F0F7] p-10 rounded-[40px] shadow-sm transform hover:-translate-y-2 transition duration-300">
                        <div class="bg-[#D1E0F0] w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-potads-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div class="text-5xl font-black text-potads-navy mb-2 tracking-tighter">500+</div>
                        <div class="text-gray-600 font-bold uppercase tracking-wider text-sm opacity-80">Anggota Aktif</div>
                    </div>
                    <div class="bg-[#FFFCEB] p-10 rounded-[40px] shadow-sm transform hover:-translate-y-2 transition duration-300">
                        <div class="bg-[#FFF4BF] w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-potads-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </div>
                        <div class="text-5xl font-black text-potads-navy mb-2 tracking-tighter">20+</div>
                        <div class="text-gray-600 font-bold uppercase tracking-wider text-sm opacity-80">Program Rutin</div>
                    </div>
                    <div class="bg-[#F2F4F7] p-10 rounded-[40px] shadow-sm transform hover:-translate-y-2 transition duration-300">
                        <div class="bg-[#E5E9F0] w-16 h-16 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div class="text-5xl font-black text-potads-navy mb-2 tracking-tighter">15</div>
                        <div class="text-gray-600 font-bold uppercase tracking-wider text-sm opacity-80">Cabang Regional</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dynamic Content (Events) -->
        <section class="py-24 bg-white" id="events">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                 <div class="flex flex-col md:flex-row justify-between items-center mb-16 gap-4">
                    <div class="text-center md:text-left">
                        <div class="text-potads-navy font-black text-4xl mb-4">Event <span class="text-potads-yellow">Pilihan</span></div>
                        <p class="text-gray-500 font-medium">Ikuti berbagai kegiatan seru bersama komunitas POTADS.</p>
                    </div>
                    <a href="#" class="bg-gray-100 text-potads-navy px-6 py-3 rounded-xl font-bold hover:bg-potads-navy hover:text-white transition group flex items-center gap-2">Lihat Semua <svg class="w-5 h-5 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    @forelse($events as $event)
                    <div class="bg-white rounded-[32px] overflow-hidden shadow-xl border border-gray-100 group">
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $event->image ? asset('storage/' . $event->image) : 'https://via.placeholder.com/800x600?text=Event' }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-potads-navy/60 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 text-white">
                                <div class="bg-potads-yellow text-potads-navy px-3 py-1 rounded-lg text-xs font-bold uppercase mb-2 inline-block">Mendatang</div>
                                <div class="flex items-center gap-2 text-sm font-semibold opacity-90"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}</div>
                            </div>
                            <div class="absolute top-6 right-6">
                                <div class="w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white cursor-pointer hover:bg-potads-yellow hover:text-potads-navy transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-extrabold text-potads-navy mb-4 group-hover:text-potads-yellow transition line-clamp-2">{{ $event->title }}</h3>
                            <p class="text-gray-500 text-sm mb-8 line-clamp-3 leading-relaxed">{{ $event->description ?? 'Deskripsi event belum tersedia. Silakan cek detail untuk informasi lebih lanjut.' }}</p>
                            <a href="#" class="inline-flex items-center gap-3 font-bold text-potads-navy group/link">Baca Detail <div class="w-8 h-8 bg-potads-yellow rounded-full flex items-center justify-center group-hover/link:translate-x-2 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></div></a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>

        <!-- "Adakan Acara" Section -->
        <section class="py-24 bg-[#F9FAFB]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-[48px] overflow-hidden shadow-2xl flex flex-col md:flex-row items-center border border-gray-50">
                    <div class="w-full md:w-1/2 h-96 md:h-auto overflow-hidden">
                        <img src="https://via.placeholder.com/800x600?text=Acara+Komunitas" alt="Community Event" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full md:w-1/2 p-12 md:p-20 space-y-8 text-center md:text-left">
                        <h2 class="text-4xl md:text-5xl font-black text-potads-navy leading-tight">Adakan <span class="text-[#005AB5]">Acara</span> Anda Sendiri</h2>
                        <p class="text-lg text-gray-600 font-medium leading-relaxed">Apakah Anda memiliki ide untuk acara yang mendukung misi kami? Kami menawarkan sumber daya, ruang, dan dukungan organisasi untuk inisiatif yang dipimpin komunitas.</p>
                        <a href="#" class="inline-block bg-potads-yellow text-potads-navy px-12 py-5 rounded-[20px] font-extrabold text-xl hover:bg-potads-yellow-dark hover:scale-105 transition shadow-lg">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </section>

         <!-- Footer -->
        <footer class="bg-potads-navy text-white pt-24 pb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-16 mb-20 text-center md:text-left">
                    <div class="col-span-1 md:col-span-1 border-b border-white/10 md:border-0 pb-12 md:pb-0">
                         <img src="https://via.placeholder.com/60x60?text=LOGO" alt="POTADS Logo" class="w-16 h-16 bg-white rounded-lg p-2 mb-8 mx-auto md:mx-0">
                         <p class="text-gray-400 font-medium leading-relaxed text-sm">Organisasi nirlaba yang berdedikasi mendukung orang tua dan anak-anak Down Syndrome di seluruh Indonesia.</p>
                    </div>
                    <div>
                        <h4 class="text-potads-yellow font-black uppercase tracking-widest text-sm mb-10">Tautan Cepat</h4>
                        <ul class="space-y-4 font-bold text-gray-300">
                             <li><a href="#" class="hover:text-potads-yellow transition">Tentang Kami</a></li>
                             <li><a href="#" class="hover:text-potads-yellow transition">Program Kami</a></li>
                             <li><a href="#" class="hover:text-potads-yellow transition">Pusat Bantuan</a></li>
                             <li><a href="#" class="hover:text-potads-yellow transition">Kebijakan Privasi</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-potads-yellow font-black uppercase tracking-widest text-sm mb-10">Hubungi Kami</h4>
                        <div class="flex flex-col gap-6 text-gray-300 font-medium">
                            <div class="flex items-center gap-4 justify-center md:justify-start">
                                <div class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center"><svg class="w-5 h-5 text-potads-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"></path></svg></div>
                                <span>+62 821-2389-9931</span>
                            </div>
                            <div class="flex items-center gap-4 justify-center md:justify-start">
                                <div class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center"><svg class="w-5 h-5 text-potads-yellow" fill="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg></div>
                                <span>admin@potadsjabar.or.id</span>
                            </div>
                        </div>
                    </div>
                    <div>
                         <h4 class="text-potads-yellow font-black uppercase tracking-widest text-sm mb-10">Media Sosial</h4>
                         <div class="flex gap-4 justify-center md:justify-start">
                             <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-potads-yellow hover:text-potads-navy transition cursor-pointer border border-white/10 group"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.256-.149-4.771-1.691-4.919-4.919-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></div>
                             <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-potads-yellow hover:text-potads-navy transition cursor-pointer border border-white/10 group"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg></div>
                             <div class="w-12 h-12 bg-white/5 rounded-2xl flex items-center justify-center hover:bg-potads-yellow hover:text-potads-navy transition cursor-pointer border border-white/10 group"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></div>
                         </div>
                    </div>
                </div>
                <div class="pt-12 border-t border-white/10 text-center">
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">&copy; {{ date('Y') }} PIK POTADS Jawa Barat. All Rights Reserved.</p>
                </div>
            </div>
        </footer>

        <style>
            @keyframes fade-in-left {
                from { opacity: 0; transform: translateX(-50px); }
                to { opacity: 1; transform: translateX(0); }
            }
            .animate-fade-in-left {
                animation: fade-in-left 1s ease-out forwards;
            }
        </style>
    </body>
</html>
