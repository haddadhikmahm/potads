<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Artikel - PIK POTADS</title>
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
            <a href="artikel.html" class="border-b-2 border-potads-yellow pb-1 text-potads-yellow">Artikel</a>
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

    <!-- Content Section -->
    <main class="max-w-7xl mx-auto px-6 md:px-12 py-8">
        <!-- Breadcrumbs -->
        <nav class="flex text-xs font-medium text-gray-400 mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1">
                <li><a href="artikel.html" class="hover:text-potads-blue transition">Artikel</a></li>
                <li><i data-lucide="chevron-right" class="w-3 h-3 mx-1"></i></li>
                <li class="text-gray-600">Buat Artikel</li>
            </ol>
        </nav>

        <!-- Page Title -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-potads-blue mb-3">Formulir Pembuatan Artikel</h1>
            <p class="text-gray-500 max-w-lg mx-auto leading-relaxed">
                Lengkapi data berikut untuk membagikan cerita atau informasi mengenai Down Syndrome
            </p>
        </div>

        <!-- Form Grid -->
        <form class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Side: Inputs -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Section: Informasi Umum -->
                <div class="bg-blue-50/30 rounded-[2rem] p-8 border border-blue-50">
                    <div class="flex items-center gap-3 text-potads-blue mb-8">
                        <i data-lucide="info" class="w-6 h-6"></i>
                        <h2 class="text-xl font-bold">Informasi Umum</h2>
                    </div>

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Judul Artikel</label>
                            <input type="text" placeholder="Masukkan judul kegiatan..." class="w-full bg-white border border-gray-200 rounded-xl py-3 px-6 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nama Penulis</label>
                            <input type="text" placeholder="Masukkan nama yang ditampilkan" class="w-full bg-white border border-gray-200 rounded-xl py-3 px-6 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Link Website (Opsional)</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400">
                                    <i data-lucide="link" class="w-4 h-4"></i>
                                </div>
                                <input type="url" placeholder="https://example.com/pendaftaran" class="w-full bg-white border border-gray-200 rounded-xl py-3 pl-12 pr-6 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20 transition">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section: Isi Artikel -->
                <div class="bg-blue-50/30 rounded-[2rem] p-8 border border-blue-50">
                    <div class="flex items-center gap-3 text-potads-blue mb-8">
                        <i data-lucide="file-text" class="w-6 h-6"></i>
                        <h2 class="text-xl font-bold">Isi Artikel</h2>
                    </div>
                    <div>
                        <textarea placeholder="Tuliskan isi artikel yang ingin Anda bagikan" class="w-full bg-white border border-gray-200 rounded-[2rem] py-6 px-8 text-sm focus:outline-none focus:ring-2 focus:ring-potads-blue/20 transition min-h-[200px]"></textarea>
                    </div>
                </div>
            </div>

            <!-- Right Side: Poster & Actions -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Section: Poster Artikel -->
                <div class="bg-blue-50/30 rounded-[2rem] p-8 border border-blue-50">
                    <h3 class="text-xs font-bold text-potads-blue uppercase tracking-widest mb-6">Poster Artikel</h3>
                    <div class="border-2 border-dashed border-gray-300 rounded-[1.5rem] bg-white p-8 text-center cursor-pointer hover:border-potads-blue transition group">
                        <div class="flex flex-col items-center">
                            <div class="bg-gray-100 p-4 rounded-xl mb-4 group-hover:bg-blue-100 transition">
                                <i data-lucide="image" class="w-8 h-8 text-gray-400 group-hover:text-potads-blue"></i>
                            </div>
                            <p class="text-sm font-bold text-gray-700 mb-1">Klik untuk unggah gambar</p>
                            <p class="text-[10px] text-gray-400 uppercase font-medium">PNG, JPG up to 5MB</p>
                        </div>
                        <input type="file" class="hidden" accept="image/*">
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col gap-4">
                    <button type="submit" class="w-full bg-potads-yellow text-potads-blue font-extrabold py-4 rounded-full shadow-lg hover:shadow-xl hover:bg-yellow-400 transition transform hover:-translate-y-1">
                        Kirim Artikel
                    </button>
                    <a href="artikel.html" class="w-full bg-blue-50 text-potads-blue font-bold py-4 rounded-full text-center hover:bg-blue-100 transition">
                        Batal
                    </a>
                </div>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-potads-blue text-white pt-20 pb-10 px-6 md:px-12 mt-20">
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