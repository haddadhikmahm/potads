<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel - PIK POTADS</title>
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
            <a href="#" class="hover:text-potads-yellow transition">Beranda</a>
            <a href="#" class="hover:text-potads-yellow transition">Tentang Kami</a>
            <a href="#" class="hover:text-potads-yellow transition">Event</a>
            <a href="#" class="border-b-2 border-potads-yellow pb-1 text-potads-yellow">Artikel</a>
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

    <!-- Content Section -->
    <main class="max-w-7xl mx-auto px-6 md:px-12 py-8">
        <!-- Breadcrumb -->
        <nav class="flex text-sm text-gray-400 mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="#" class="hover:text-potads-blue">Artikel</a></li>
                <li class="flex items-center">
                    <i data-lucide="chevron-right" class="w-4 h-4 mx-1"></i>
                    <span class="text-gray-600">Buat Artikel</span>
                </li>
            </ol>
        </nav>

        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column: Main Article -->
            <div class="lg:w-2/3">
                <div class="rounded-3xl overflow-hidden mb-8 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1536640712247-c45474d66827?q=80&w=2070&auto=format&fit=crop" alt="Featured Article" class="w-full h-auto object-cover">
                </div>
                
                <div class="text-right text-potads-blue font-bold text-sm mb-4">
                    25 April 2026
                </div>

                <div class="text-center mb-10">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-potads-blue mb-2 leading-tight">
                        Menemukan Ketenangan: <br> Mindful Parenting 101
                    </h1>
                    <p class="text-potads-blue font-semibold">By: Icaaa123</p>
                </div>

                <div class="space-y-6 text-gray-700 leading-relaxed">
                    <div>
                        <span class="font-extrabold text-potads-blue block text-lg mb-2">Deskripsi :</span>
                        <p>Teknik praktis untuk menjaga ketenangan diri saat suasana rumah terasa kurang terkendali.</p>
                    </div>

                    <div class="flex items-center gap-2">
                        <span class="font-extrabold text-potads-blue">Materi:</span>
                        <a href="#" class="text-blue-500 font-bold hover:underline">Yuk Baca Materinya !</a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sidebar -->
            <div class="lg:w-1/3">
                <div class="bg-blue-50/50 rounded-[2rem] p-8 border border-blue-100">
                    <h2 class="text-xl font-extrabold text-potads-blue mb-8">Artikel Lainnya</h2>
                    
                    <div class="space-y-8">
                        <!-- Sidebar Item 1 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden">
                                <!-- Placeholder thumbnail -->
                            </div>
                        </div>
                        
                        <!-- Sidebar Item 2 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden"></div>
                        </div>

                        <!-- Sidebar Item 3 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden"></div>
                        </div>

                        <!-- Sidebar Item 4 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden"></div>
                        </div>

                        <!-- Sidebar Item 5 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden"></div>
                        </div>

                        <!-- Sidebar Item 6 -->
                        <div class="flex gap-4 group cursor-pointer">
                            <div class="w-2/3">
                                <h3 class="text-blue-500 font-bold text-sm leading-snug group-hover:text-potads-blue transition">
                                    Tips Membangun Kemandirian Anak Down Syndrome | Tanam Benih Parenting
                                </h3>
                            </div>
                            <div class="w-1/3 aspect-video bg-potads-yellow rounded-xl overflow-hidden"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section: Create Your Own Article -->
        <section class="mt-24 mb-12 flex flex-col md:flex-row items-center gap-12 px-4">
            <div class="w-full md:w-5/12">
                <img src="https://images.unsplash.com/photo-1484665754804-74b091211472?q=80&w=2070&auto=format&fit=crop" alt="Family" class="rounded-3xl shadow-xl w-full h-72 object-cover">
            </div>
            <div class="w-full md:w-7/12">
                <h2 class="text-4xl font-extrabold text-potads-blue mb-6 leading-tight">Buat Artikel Anda Sendiri</h2>
                <p class="text-gray-500 mb-8 leading-relaxed text-lg">
                    Apakah Anda memiliki pengalaman atau informasi menarik untuk dibagikan kepada para pembaca? Kami menawarkan sumber daya, ruang, dan dukungan organisasi untuk inisiatif yang dipimpin komunitas.
                </p>
                <button class="bg-potads-yellow text-potads-blue font-extrabold px-10 py-4 rounded-full shadow-lg hover:shadow-xl transition-all">
                    Buat Artikel
                </button>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-potads-blue text-white pt-20 pb-10 px-6 md:px-12 rounded-t-[3rem] mt-20">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <div class="bg-white p-2 rounded inline-block mb-6">
                    <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10">
                </div>
                <p class="text-white/70 text-sm leading-relaxed max-w-xs">
                    Mendukung setiap perjalanan melalui aksi komunitas yang inklusif dan penceritaan digital.
                </p>
            </div>
            
            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6">Organisasi</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="#" class="hover:text-white">Misi Kami</a></li>
                    <li><a href="#" class="hover:text-white">Relawan</a></li>
                    <li><a href="#" class="hover:text-white">Artikel</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6">Legal</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="#" class="hover:text-white">Privasi</a></li>
                    <li><a href="#" class="hover:text-white">Ketentuan</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6">Hubungkan</h4>
                <p class="text-white/70 text-sm mb-6">Hubungi Kami</p>
                <div class="flex gap-4">
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="globe" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="mail" class="w-5 h-5"></i></a>
                    <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="share-2" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-white/50 text-xs uppercase tracking-widest font-medium">
                © 2026 POTADS. Seluruh Hak Cipta Dilindungi Undang-Undang.
            </p>
        </div>
    </footer>

    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();
    </script>
</body>
</html>