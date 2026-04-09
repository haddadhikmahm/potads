<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - PIK POTADS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-potads-blue { background-color: #003D73; }
        .text-potads-blue { color: #003D73; }
        .bg-potads-yellow { background-color: #FFD700; }
        .text-potads-yellow { color: #FFD700; }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-potads-blue py-4 px-6 md:px-12 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <div class="bg-white p-1 rounded">
                <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10 object-contain">
            </div>
        </div>
        
        <div class="hidden md:flex items-center gap-8 text-white font-medium">
            <a href="welcome.html" class="hover:text-potads-yellow transition">Beranda</a>
            <a href="#" class="hover:text-potads-yellow transition">Tentang Kami</a>
            <a href="#" class="border-b-2 border-potads-yellow pb-1 text-potads-yellow">Event</a>
            <a href="#" class="hover:text-potads-yellow transition">Artikel</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-potads-yellow">
                Materi <i data-lucide="chevron-down" class="w-4 h-4"></i>
            </div>
            <a href="#" class="hover:text-potads-yellow transition">Akademis & Medis</a>
        </div>

        <div class="flex items-center gap-4">
            <button class="bg-potads-yellow text-potads-blue px-6 py-2 rounded-lg font-bold hover:bg-yellow-400 transition">Login</button>
            <div class="text-white cursor-pointer">
                <i data-lucide="user-circle" class="w-8 h-8"></i>
            </div>
        </div>
    </nav>

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
            <button class="bg-potads-yellow text-potads-blue font-bold px-8 py-2 rounded-full shadow-md">Upcoming</button>
            <button class="bg-blue-50 text-blue-400 font-semibold px-8 py-2 rounded-full border border-blue-100 hover:bg-blue-100 transition">Recent</button>
            <button class="bg-blue-50 text-blue-400 font-semibold px-8 py-2 rounded-full border border-blue-100 hover:bg-blue-100 transition">Passed</button>
        </div>
    </header>

    <!-- Main Events Grid -->
    <section class="px-6 md:px-12 pb-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Featured Event (Large) -->
            <div class="md:col-span-2 relative h-[500px] rounded-[2.5rem] overflow-hidden group shadow-xl">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=2070&auto=format&fit=crop" alt="Featured Event" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-potads-blue/95 via-potads-blue/20 to-transparent p-12 flex flex-col justify-end">
                    <h2 class="text-4xl font-bold text-white mb-6 leading-tight max-w-lg">Senandung Jiwa Musim Panas: Konser Terbuka</h2>
                    <div class="flex flex-wrap gap-6 text-white/90">
                        <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-5 h-5 text-potads-yellow"></i> 15 Agustus 2024</span>
                        <span class="flex items-center gap-2"><i data-lucide="map-pin" class="w-5 h-5 text-potads-yellow"></i> Paviliun Taman Menteng</span>
                    </div>
                </div>
                <div class="absolute bottom-12 right-12">
                    <div class="bg-white/20 backdrop-blur-md p-4 rounded-full text-white group-hover:bg-potads-yellow group-hover:text-potads-blue transition-all">
                        <i data-lucide="arrow-up-right" class="w-8 h-8"></i>
                    </div>
                </div>
            </div>

            <!-- Secondary Featured Event -->
            <div class="relative h-[500px] rounded-[2.5rem] overflow-hidden group shadow-xl">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?q=80&w=1932&auto=format&fit=crop" alt="Secondary Event" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-potads-blue/95 via-transparent to-transparent p-10 flex flex-col justify-end">
                    <h3 class="text-2xl font-bold text-white mb-4">Cerita, Cinta, dan Harapan</h3>
                    <div class="space-y-2 text-white/80 text-sm">
                        <span class="flex items-center gap-2"><i data-lucide="calendar" class="w-4 h-4"></i> 15 Agustus 2024</span>
                        <span class="flex items-center gap-2"><i data-lucide="map-pin" class="w-4 h-4"></i> Paviliun Taman Menteng</span>
                    </div>
                </div>
                <div class="absolute bottom-10 right-10">
                    <div class="bg-white/20 backdrop-blur-md p-3 rounded-full text-white group-hover:bg-potads-yellow group-hover:text-potads-blue transition-all">
                        <i data-lucide="arrow-up-right" class="w-6 h-6"></i>
                    </div>
                </div>
            </div>

            <!-- Smaller Event Cards Row -->
            <!-- Card 1 -->
            <div class="relative h-64 rounded-3xl overflow-hidden group shadow-lg">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Small Event" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-potads-blue/60 transition duration-300 p-6 flex flex-col justify-end">
                    <div class="absolute top-4 left-4 bg-potads-yellow text-potads-blue text-[10px] font-bold px-3 py-1 rounded-md uppercase">25 Maret 2024</div>
                    <h4 class="text-white font-bold leading-snug">Konferensi Pemberdayaan Pemuda</h4>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition">
                    <i data-lucide="arrow-right" class="text-white w-6 h-6"></i>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative h-64 rounded-3xl overflow-hidden group shadow-lg">
                <img src="https://images.unsplash.com/photo-1522071823990-b99787a07a3c?q=80&w=2070&auto=format&fit=crop" alt="Small Event" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-potads-blue/60 transition duration-300 p-6 flex flex-col justify-end">
                    <div class="absolute top-4 left-4 bg-potads-yellow text-potads-blue text-[10px] font-bold px-3 py-1 rounded-md uppercase">28 Maret 2024</div>
                    <h4 class="text-white font-bold leading-snug">Konferensi Pemberdayaan Pemuda</h4>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition">
                    <i data-lucide="arrow-right" class="text-white w-6 h-6"></i>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative h-64 rounded-3xl overflow-hidden group shadow-lg">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=2070&auto=format&fit=crop" alt="Small Event" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-potads-blue/60 transition duration-300 p-6 flex flex-col justify-end">
                    <div class="absolute top-4 left-4 bg-potads-yellow text-potads-blue text-[10px] font-bold px-3 py-1 rounded-md uppercase">30 Maret 2024</div>
                    <h4 class="text-white font-bold leading-snug">Konferensi Pemberdayaan Pemuda</h4>
                </div>
                <div class="absolute bottom-6 right-6 opacity-0 group-hover:opacity-100 transition">
                    <i data-lucide="arrow-right" class="text-white w-6 h-6"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Create Event Section -->
    <section class="px-6 md:px-12 py-20 bg-white">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2 relative">
                <!-- Decorative yellow shadow effect -->
                <div class="absolute -bottom-4 -left-4 w-full h-full bg-potads-yellow rounded-[2.5rem] -z-10 blur-sm opacity-20"></div>
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop" alt="Adakan Acara" class="rounded-[2.5rem] w-full h-[450px] object-cover shadow-2xl">
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-5xl font-bold text-potads-blue mb-8 leading-tight">
                    Adakan <span class="text-blue-900 border-b-4 border-potads-yellow pb-1">Acara</span> Anda Sendiri
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

    <!-- Footer -->
    <footer class="bg-potads-blue text-white pt-20 pb-10 px-6 md:px-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <div class="bg-white p-2 rounded inline-block mb-6">
                    <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10">
                </div>
                <p class="text-white/70 text-sm leading-relaxed">
                    Mendukung setiap perjalanan melalui aksi komunitas yang inklusif dan penceritaan digital.
                </p>
                <div class="flex gap-4 mt-8">
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="youtube" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Organisasi</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="#" class="hover:text-white">Misi Kami</a></li>
                    <li><a href="#" class="hover:text-white">Relawan</a></li>
                    <li><a href="#" class="hover:text-white">Artikel</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Legal</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="#" class="hover:text-white">Privasi</a></li>
                    <li><a href="#" class="hover:text-white">Ketentuan</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Hubungkan</h4>
                <p class="text-white/70 text-sm mb-6">Hubungi Kami</p>
                <div class="flex gap-4">
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="globe" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="mail" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="share-2" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-white/50 text-[10px] uppercase tracking-[0.2em] font-bold">
                © 2026 POTADS. SELURUH HAK CIPTA DILINDUNGI UNDANG-UNDANG.
            </p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>