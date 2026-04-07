<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - PIK POTADS Jabar</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Montserrat', sans-serif; }
            .bg-potads-navy { background-color: #003D7C; }
            .bg-potads-yellow { background-color: #FFD100; }
            .text-potads-navy { color: #003D7C; }
            .text-potads-yellow { color: #FFD100; }
        </style>
    </head>
    <body class="antialiased bg-[#F9F9FF]">
        <div class="min-h-screen flex flex-col md:flex-row overflow-hidden">
            <!-- Left Side: Navy Blue -->
            <div class="md:w-[45%] bg-potads-navy relative p-12 md:p-24 flex flex-col justify-between text-white overflow-hidden">
                 <!-- Background Circle Decoration -->
                <div class="absolute -bottom-20 -left-20 w-[400px] h-[400px] bg-white opacity-5 rounded-full blur-[80px]"></div>
                <div class="absolute top-20 right-[-100px] w-64 h-64 bg-potads-yellow opacity-10 rounded-full blur-[60px]"></div>

                <div class="relative z-10 space-y-12">
                    <a href="/">
                        <img src="https://via.placeholder.com/100x100?text=LOGO" alt="POTADS Logo" class="w-20 h-20 bg-white rounded-2xl p-3 shadow-xl">
                    </a>
                    
                    <h1 class="text-4xl md:text-6xl font-black leading-tight tracking-tight">
                        Membangun Masa<br>Depan Penuh<br>Senyuman.
                    </h1>
                    
                    <p class="text-xl text-blue-100/80 font-medium leading-relaxed max-w-sm">
                        Setiap langkah kecil membawa perubahan besar bagi anak-anak Down Syndrome. Mari melangkah bersama.
                    </p>
                </div>

                <div class="relative z-10 pt-12 md:pt-0">
                    <div class="bg-potads-yellow p-8 rounded-[32px] text-potads-navy shadow-2xl relative overflow-hidden group hover:scale-[1.02] transition duration-300">
                        <div class="absolute -right-4 bottom-[-20px] w-32 h-32 bg-white opacity-20 rounded-full"></div>
                        <p class="text-lg font-extrabold italic leading-relaxed mb-6 opacity-90">
                            "Pusat ini bukan sekadar bantuan, tapi keluarga yang memahami potensi anak saya."
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-potads-navy/10 rounded-full"></div>
                            <div>
                                <div class="font-black text-sm uppercase tracking-wider">Ibu Ratna</div>
                                <div class="text-xs font-bold opacity-60">Orang Tua Member</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Login Form -->
            <div class="flex-1 flex flex-col items-center justify-center p-8 md:p-24 relative overflow-y-auto">
                <div class="w-full max-w-[480px] space-y-10 animate-fade-in">
                    <div class="space-y-3">
                        <h2 class="text-4xl md:text-5xl font-black text-potads-navy tracking-tight">Selamat Datang</h2>
                        <p class="text-gray-500 font-bold text-lg">Silakan masuk ke akun Anda untuk melanjutkan.</p>
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-8">
                        @csrf

                        <!-- Username/Email -->
                        <div class="space-y-3">
                            <label for="email" class="text-sm font-black text-potads-navy uppercase tracking-widest ml-1">Username / Email</label>
                            <div class="relative group">
                                <span class="absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-potads-navy transition duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </span>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan username/email" required autofocus class="w-full bg-[#EDF2FA] border-0 rounded-2xl pl-16 pr-6 py-5 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition duration-200 placeholder:text-gray-400">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="space-y-3">
                            <label for="password" class="text-sm font-black text-potads-navy uppercase tracking-widest ml-1">PIN / Kata Sandi</label>
                            <div class="relative group">
                                <span class="absolute left-6 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-potads-navy transition duration-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                </span>
                                <input id="password" type="password" name="password" placeholder="Masukkan kata sandi" required class="w-full bg-[#EDF2FA] border-0 rounded-2xl pl-16 pr-12 py-5 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition duration-200 placeholder:text-gray-400">
                                <button type="button" class="absolute right-6 top-1/2 -translate-y-1/2 text-gray-400 hover:text-potads-navy transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between px-1">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input id="remember_me" type="checkbox" name="remember" class="w-5 h-5 rounded-lg border-gray-300 text-potads-navy focus:ring-potads-navy transition">
                                <span class="text-sm font-bold text-gray-500 group-hover:text-potads-navy transition">Ingat saya</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm font-black text-potads-navy hover:underline transform hover:scale-105 transition">Lupa sandi?</a>
                            @endif
                        </div>

                        <button type="submit" class="w-full bg-potads-navy text-white font-extrabold text-xl py-6 rounded-2xl shadow-xl hover:bg-[#002B5A] transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-3 group">
                            Masuk Sekarang
                            <svg class="w-6 h-6 group-hover:translate-x-2 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>

                    <div class="pt-10 space-y-6 text-center">
                        <p class="text-gray-400 font-bold tracking-wide uppercase text-xs">Belum memiliki akun?</p>
                        <a href="{{ route('register') }}" class="inline-block bg-potads-yellow text-potads-navy px-12 py-5 rounded-[20px] font-extrabold text-lg hover:bg-potads-yellow-dark transition-all transform hover:scale-105 shadow-md">
                            Daftar Akun Baru
                        </a>
                    </div>
                </div>

                <!-- Footer Text Overlay -->
                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-8 text-[10px] font-black uppercase tracking-[0.2em] text-gray-300 whitespace-nowrap">
                    <span class="hover:text-potads-navy cursor-pointer transition">Bantuan</span>
                    <span class="hover:text-potads-navy cursor-pointer transition">Privasi</span>
                    <span class="hover:text-potads-navy cursor-pointer transition">Syarat & Ketentuan</span>
                </div>
            </div>
        </div>
        
        <style>
            @keyframes animate-fade-in {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                 animation: animate-fade-in 0.8s ease-out forwards;
            }
        </style>
    </body>
</html>
