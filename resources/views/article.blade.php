<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - PIK POTADS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-potads-blue { background-color: #003D73; }
        .text-potads-blue { color: #003D73; }
        .bg-potads-yellow { background-color: #FFD700; }
        .text-potads-yellow { color: #FFD700; }
        .border-potads-blue { border-color: #003D73; }
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
            <a href="event.html" class="hover:text-potads-yellow transition">Event</a>
            <a href="#" class="border-b-2 border-potads-yellow pb-1 text-potads-yellow">Artikel</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-potads-yellow">
                Materi <i data-lucide="chevron-down" class="w-4 h-4"></i>
            </div>
            <a href="#" class="hover:text-potads-yellow transition">Akademis & Medis</a>
        </div>

        <div class="flex items-center gap-4">
            <button class="bg-potads-yellow text-potads-blue px-6 py-2 rounded-lg font-bold hover:bg-yellow-400 transition text-sm">Login</button>
            <div class="text-white cursor-pointer">
                <i data-lucide="user-circle" class="w-8 h-8"></i>
            </div>
        </div>
    </nav>

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
            <button class="bg-white border border-gray-300 text-gray-700 px-6 py-2 rounded-full text-sm font-semibold shadow-sm hover:bg-gray-50 transition">
                Buat Artikel
            </button>
        </div>
    </header>

    <!-- Search & Filter Section -->
    <section class="px-6 md:px-12 py-8 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 border-t border-gray-100 pt-10">
            <h2 class="text-3xl font-extrabold text-potads-blue">Artikel</h2>
            <div class="flex items-center gap-2 w-full md:w-auto">
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search......" class="w-full bg-gray-50 border border-gray-200 rounded-full py-2 px-6 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20">
                </div>
                <button class="bg-blue-600 text-white px-8 py-2 rounded-full text-sm font-bold hover:bg-blue-700 transition">Cari</button>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="px-6 md:px-12 pb-16 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article Card 1 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1536640712247-c45474d66827?q=80&w=2070&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Menemukan Ketenangan: Mindful Parenting 101</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?q=80&w=2040&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Integrasi Kerja-Hidup: Perspektif Baru</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Article Card 3 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1520206151081-9bf94ee04e5d?q=80&w=2074&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Revolusi Tidur: Istirahat Lebih Baik untuk Semua</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Article Card 4 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?q=80&w=1896&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Sains di Balik Rasa Ingin Tahu Anak</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Article Card 5 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Makanan Otak: Nutrisi Penting untuk Pertumbuhan</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Article Card 6 -->
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 flex flex-col group">
                <div class="overflow-hidden h-56">
                    <img src="https://images.unsplash.com/photo-1522071823990-b99787a07a3c?q=80&w=2070&auto=format&fit=crop" alt="Article" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-xl font-bold text-potads-blue mb-4 leading-tight">Membangun Komunitas Pendukung di Era Digital</h3>
                    <p class="text-gray-400 text-sm mb-8 line-clamp-2">Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    <div class="mt-auto w-full flex items-center justify-between border-t border-gray-50 pt-6">
                        <div class="flex items-center gap-3 text-[10px] text-blue-400 font-bold uppercase tracking-wider">
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> 20 April 2026</span>
                            <span class="flex items-center gap-1"><i data-lucide="edit-3" class="w-3 h-3"></i> Ica</span>
                        </div>
                        <button class="bg-blue-50 text-potads-blue font-bold px-4 py-2 rounded-xl text-xs hover:bg-potads-blue hover:text-white transition">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="mt-16 flex justify-center">
            <button class="flex items-center gap-2 border-2 border-potads-blue text-potads-blue font-bold px-8 py-3 rounded-2xl hover:bg-potads-blue hover:text-white transition">
                Muat Lebih Banyak <i data-lucide="chevron-down" class="w-5 h-5"></i>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-potads-blue text-white pt-20 pb-10 px-6 md:px-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <div class="bg-white p-2 rounded inline-block mb-6">
                    <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10">
                </div>
                <p class="text-white/70 text-sm leading-relaxed max-w-xs">
                    Mendukung setiap perjalanan melalui aksi komunitas yang inklusif dan penceritaan digital.
                </p>
                <div class="flex gap-4 mt-8">
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="globe" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="mail" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="share-2" class="w-5 h-5"></i></a>
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
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="youtube" class="w-5 h-5"></i></a>
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