<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - POTADS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Tailwind Config (if needed) & Vite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'potads-blue': '#0f407a',
                        'potads-yellow': '#facc15',
                        'soft-bg': '#f8fafc',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.2); }

        /* SweetAlert2 Premium Customization */
        .swal2-popup {
            border-radius: 2.5rem !important;
            padding: 3rem 2rem !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
        }
        .swal2-title {
            font-size: 1.5rem !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            margin-bottom: 0.5rem !important;
        }
        .swal2-html-container {
            font-size: 0.875rem !important;
            color: #64748b !important;
            line-height: 1.6 !important;
            margin-bottom: 2rem !important;
        }
        .swal2-actions {
            gap: 1rem !important;
            width: 100% !important;
            justify-content: center !important;
        }
        .swal2-styled.swal2-confirm {
            padding: 1rem 3rem !important;
            border-radius: 9999px !important;
            font-weight: 700 !important;
            font-size: 0.875rem !important;
            text-transform: none !important;
        }
        .swal2-styled.swal2-confirm.success-btn {
            background-color: #0f407a !important;
        }
        .swal2-styled.swal2-confirm.delete-btn {
            background-color: #b91c1c !important;
        }
        .swal2-styled.swal2-cancel {
            padding: 1rem 3rem !important;
            border-radius: 9999px !important;
            font-weight: 700 !important;
            font-size: 0.875rem !important;
            background-color: #fff !important;
            color: #64748b !important;
            border: 1px solid #e2e8f0 !important;
        }
        .swal2-icon {
            border: none !important;
            margin-bottom: 2rem !important;
        }
        .swal2-icon.swal2-success .swal2-success-ring {
            border: 0.25em solid rgba(16, 185, 129, 0.2) !important;
            background-color: #ecfdf5 !important;
        }
        .swal2-icon.swal2-warning {
            background-color: #fefce8 !important;
            color: #eab308 !important;
        }
    </style>
</head>
<body class="bg-soft-bg font-sans antialiased text-slate-800">
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
        <aside class="w-72 bg-potads-blue flex-shrink-0 flex flex-col h-full overflow-hidden transition-all duration-300">
            <!-- Sidebar Header -->
            <div class="px-8 py-6 flex flex-col items-center">
                <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center shadow-sm p-1.5 mb-2">
                    <svg viewBox="0 0 100 100" class="w-full h-full text-red-600">
                        <path d="M50 20 L80 80 L20 80 Z" fill="none" stroke="currentColor" stroke-width="8" />
                        <circle cx="50" cy="45" r="10" fill="currentColor" />
                        <path d="M30 70 Q50 90 70 70" fill="none" stroke="currentColor" stroke-width="5" />
                    </svg>
                </div>
                <h1 class="text-white font-bold text-lg tracking-wider">Admin POTADS</h1>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-1.5 custom-scrollbar">
                @php
                    $menuItems = [
                        ['route' => 'admin.dashboard', 'label' => 'Dashboard', 'icon' => 'layout-grid'],
                        ['route' => 'admin.events.index', 'label' => 'Event', 'icon' => 'calendar'],
                        ['route' => 'admin.articles.index', 'label' => 'Berita/Artikel', 'icon' => 'file-text'],
                        ['route' => 'admin.materials.index', 'label' => 'Video & File Materi', 'icon' => 'play-circle'],
                        ['route' => 'admin.medical-infos.index', 'label' => 'Info Akademis & Medis', 'icon' => 'activity'],
                        ['route' => 'admin.faqs.index', 'label' => 'FAQ', 'icon' => 'help-circle'],
                        ['route' => 'admin.members.index', 'label' => 'Member', 'icon' => 'users'],
                        ['route' => 'admin.settings.index', 'label' => 'Site Settings', 'icon' => 'settings'],
                    ];
                @endphp

                @foreach($menuItems as $item)
                    @php 
                        $isActive = $item['route'] !== '#' && (request()->routeIs($item['route']) || (strpos($item['route'], 'index') === false && request()->routeIs(explode('.', $item['route'])[0].'.'.explode('.', $item['route'])[1].'.*')));
                        if ($item['label'] === 'Event' && request()->routeIs('admin.events.*')) $isActive = true;
                        if ($item['label'] === 'Berita/Artikel' && request()->routeIs('admin.articles.*')) $isActive = true;
                    @endphp
                    <a href="{{ $item['route'] !== '#' ? route($item['route']) : 'javascript:void(0)' }}" 
                       class="flex items-center gap-3 px-4 py-3.5 rounded-xl transition-all duration-200 group {{ $isActive ? 'bg-potads-yellow text-potads-blue font-bold shadow-lg shadow-yellow-500/20' : 'text-white/70 hover:bg-white/10 hover:text-white' }}">
                        <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 {{ $isActive ? 'text-potads-blue' : 'text-white opacity-50' }}"></i>
                        <span class="text-sm">{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <!-- Sidebar Footer (Optional Logout) -->
            <div class="p-4 border-t border-white/10">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-white/70 hover:bg-red-500/20 hover:text-red-400 transition-all">
                        <i data-lucide="log-out" class="w-5 h-5"></i>
                        <span class="text-sm font-medium">Keluar</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col h-full overflow-hidden">
            <!-- Top Navbar -->
            <header class="h-20 bg-white border-b border-slate-100 flex items-center justify-between px-8 flex-shrink-0">
                <!-- Search Bar -->
                <div class="flex-1 max-w-md relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </span>
                    <input type="text" placeholder="Cari data..." class="w-full pl-12 pr-4 py-2.5 bg-slate-50 border border-slate-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-potads-blue/5 text-sm">
                </div>

                <!-- User Profile Dropdown -->
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="flex items-center gap-4 text-right group focus:outline-none">
                        <div class="hidden md:block">
                            <p class="text-xs font-bold text-slate-900 group-hover:text-potads-blue transition-colors">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] font-semibold text-potads-blue uppercase tracking-wider">Admin POTADS</p>
                        </div>
                        <div class="w-10 h-10 bg-slate-200 rounded-full overflow-hidden border-2 border-white shadow-sm ring-1 ring-slate-100 group-hover:ring-potads-blue/30 transition-all">
                            @if(Auth::user()->avatar)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-potads-blue text-white text-xs font-bold">
                                    {{ substr(Auth::user()->name, 0, 2) }}
                                </div>
                            @endif
                        </div>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400 group-hover:text-potads-blue transition-all" :class="{ 'rotate-180': open }"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" 
                         x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                         x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                         class="absolute right-0 mt-4 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50">
                        
                        <div class="px-4 py-3 border-b border-slate-50 mb-1">
                            <p class="text-xs font-bold text-slate-900">{{ Auth::user()->name }}</p>
                            <p class="text-[10px] text-slate-500 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <a href="{{ route('admin.profile.edit') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 hover:text-potads-blue transition-all">
                            <i data-lucide="user" class="w-4 h-4"></i>
                            <span>Profil Saya</span>
                        </a>

                        <div class="border-t border-slate-50 mt-1 pt-1">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 text-sm text-red-500 hover:bg-red-50 transition-all font-medium">
                                    <i data-lucide="log-out" class="w-4 h-4"></i>
                                    <span>Keluar</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Scrollable Content Container -->
            <main class="flex-1 overflow-y-auto p-8 custom-scrollbar">
                <!-- Header Component for Pages -->
                @hasSection('header_title')
                    <div class="mb-8">
                        <p class="text-[10px] font-extrabold text-blue-600 uppercase tracking-[0.2em] mb-1">
                            @yield('header_breadcrumb', 'Management Portal')
                        </p>
                        <h2 class="text-2xl font-bold text-slate-900">@yield('header_title')</h2>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        lucide.createIcons();

        // Global Alert Handlers
        window.showAlert = {
            success: (message) => {
                Swal.fire({
                    title: 'Data Berhasil Disimpan',
                    text: message || 'Perubahan Anda telah berhasil diperbarui ke sistem.',
                    icon: 'success',
                    iconColor: '#10b981',
                    confirmButtonText: 'Tutup',
                    customClass: {
                        confirmButton: 'success-btn'
                    },
                    buttonsStyling: false
                });
            },
            confirmDelete: (form) => {
                Swal.fire({
                    title: 'Hapus Data Ini?',
                    text: 'Apakah Anda yakin ingin menghapus data ini? Aksi ini tidak dapat dibatalkan.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'delete-btn',
                        cancelButton: 'cancel-btn'
                    },
                    buttonsStyling: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }
        };

        // Auto-trigger success alert from session
        @if(session('success'))
            showAlert.success("{{ session('success') }}");
        @endif

        // Global Delete Listener
        document.addEventListener('click', function(e) {
            if (e.target.closest('.btn-delete-confirm')) {
                e.preventDefault();
                const form = e.target.closest('form');
                if (form) showAlert.confirmDelete(form);
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
