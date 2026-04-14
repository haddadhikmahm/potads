<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PIK POTADS')</title>
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
        .border-potads-yellow { border-color: #FFD700; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <nav class="bg-potads-blue py-4 px-6 md:px-12 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-2">
            <a href="{{ route('home') }}" class="bg-white p-1 rounded">
                <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10 object-contain">
            </a>
        </div>
        
        <div class="hidden md:flex items-center gap-8 text-white font-medium">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'border-b-2 border-potads-yellow pb-1 text-potads-yellow' : 'hover:text-potads-yellow transition' }}">Beranda</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'border-b-2 border-potads-yellow pb-1 text-potads-yellow' : 'hover:text-potads-yellow transition' }}">Tentang Kami</a>
            <a href="{{ route('events.index') }}" class="{{ request()->routeIs('events.*') ? 'border-b-2 border-potads-yellow pb-1 text-potads-yellow' : 'hover:text-potads-yellow transition' }}">Event</a>
            <a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') ? 'border-b-2 border-potads-yellow pb-1 text-potads-yellow' : 'hover:text-potads-yellow transition' }}">Artikel</a>
            <div class="flex items-center gap-1 cursor-pointer hover:text-potads-yellow">
                Materi <i data-lucide="chevron-down" class="w-4 h-4"></i>
            </div>
            <a href="#" class="hover:text-potads-yellow transition">Akademis & Medis</a>
        </div>

        <div class="flex items-center gap-4">
            @auth
                <div class="flex items-center gap-4">
                    <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="text-white hover:text-potads-yellow transition flex items-center gap-2">
                        <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                        <span class="hidden md:inline font-medium">{{ auth()->user()->name }}</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg font-bold hover:bg-red-600 transition text-sm flex items-center gap-2">
                            <i data-lucide="log-out" class="w-4 h-4"></i>
                            <span class="hidden md:inline">Logout</span>
                        </button>
                    </form>
                </div>
            @else
                <a href="{{ route('login') }}" class="bg-potads-yellow text-potads-blue px-6 py-2 rounded-lg font-bold hover:bg-yellow-400 transition text-sm">Login</a>
                <div class="text-white cursor-pointer">
                    <i data-lucide="user-circle" class="w-8 h-8"></i>
                </div>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-potads-blue text-white pt-20 pb-10 px-6 md:px-12 mt-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="md:col-span-1">
                <div class="bg-white p-2 rounded inline-block mb-6">
                    <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-community-logo_23-2148141253.jpg" alt="Logo" class="h-10 w-10">
                </div>
                <p class="text-white/70 text-sm leading-relaxed">
                    {{ $siteSettings['site_description'] ?? 'Mendukung setiap perjalanan melalui aksi komunitas yang inklusif.' }}
                </p>
                <div class="flex gap-4 mt-8">
                    @if($siteSettings['social_instagram'] ?? false)
                        <a href="{{ $siteSettings['social_instagram'] }}" target="_blank" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                    @endif
                    @if($siteSettings['social_facebook'] ?? false)
                        <a href="{{ $siteSettings['social_facebook'] }}" target="_blank" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    @endif
                    @if($siteSettings['social_youtube'] ?? false)
                        <a href="{{ $siteSettings['social_youtube'] }}" target="_blank" class="text-white/40 hover:text-potads-yellow transition"><i data-lucide="youtube" class="w-5 h-5"></i></a>
                    @endif
                </div>
            </div>
            
            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Organisasi</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="{{ route('about') }}" class="hover:text-white">Misi Kami</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-white">Artikel</a></li>
                    <li><a href="{{ route('faqs.index') }}" class="hover:text-white">FAQ</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Akses Publik</h4>
                <ul class="space-y-4 text-white/70 text-sm">
                    <li><a href="{{ route('materials.index') }}" class="hover:text-white">Materi Edukasi</a></li>
                    <li><a href="{{ route('medical_infos.index') }}" class="hover:text-white">Info Akademis & Medis</a></li>
                    <li><a href="{{ route('events.index') }}" class="hover:text-white">Explore Event</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-potads-yellow font-bold uppercase tracking-wider mb-6 text-xs">Hubungkan</h4>
                <p class="text-white/70 text-sm mb-6">{{ $siteSettings['contact_address'] ?? 'Hubungi Kami' }}</p>
                <div class="flex gap-4">
                    <a href="mailto:{{ $siteSettings['contact_email'] ?? '' }}" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="mail" class="w-5 h-5"></i></a>
                    <a href="tel:{{ $siteSettings['contact_phone'] ?? '' }}" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i data-lucide="phone" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-white/10 pt-8 text-center">
            <p class="text-white/50 text-[10px] uppercase tracking-[0.2em] font-bold">
                © {{ date('Y') }} {{ $siteSettings['site_name'] ?? 'POTADS' }}. SELURUH HAK CIPTA DILINDUNGI UNDANG-UNDANG.
            </p>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>
