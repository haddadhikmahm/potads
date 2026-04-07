<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard - PIK POTADS Jabar</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans antialiased">
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            <aside class="w-64 bg-potads-blue-dark text-white hidden md:block">
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-8 h-8 bg-potads-yellow rounded-full flex items-center justify-center font-bold text-potads-blue-dark text-xs">P</div>
                        <span class="text-lg font-bold tracking-tight">POTADS <span class="text-potads-yellow">Admin</span></span>
                    </div>
                    <nav class="space-y-2">
                        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-white' : 'text-gray-300' }} hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg block transition font-medium">
                            Dashboard Overview
                        </a>
                        <a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'bg-white/10 text-white' : 'text-gray-300' }} hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg block transition font-medium">
                            Manajemen Event
                        </a>
                        <a href="{{ route('admin.articles.index') }}" class="{{ request()->routeIs('admin.articles.*') ? 'bg-white/10 text-white' : 'text-gray-300' }} hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg block transition font-medium">
                            Manajemen Berita
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg block transition font-medium">
                            Donasi (Mendatang)
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white hover:bg-white/10 px-4 py-2 rounded-lg block transition font-medium">
                            Materi Edukasi
                        </a>
                    </nav>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 flex flex-col">
                <!-- Topbar -->
                <header class="bg-white shadow-sm h-16 flex items-center justify-between px-8">
                    <h2 class="text-xl font-semibold text-gray-800">
                        @yield('header', 'Dashboard')
                    </h2>
                    <div class="flex items-center gap-4">
                        <span class="text-sm text-gray-600 font-medium">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-semibold">Logout</button>
                        </form>
                    </div>
                </header>

                <!-- Page Content -->
                <main class="p-8 flex-1">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
