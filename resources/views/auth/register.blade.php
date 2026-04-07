<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Akun - PIK POTADS Jabar</title>
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
            <div class="md:w-[40%] bg-potads-navy relative p-12 md:p-20 flex flex-col justify-between text-white overflow-hidden">
                 <!-- Background Circle Decoration -->
                <div class="absolute -top-20 -left-20 w-[400px] h-[400px] bg-white opacity-5 rounded-full blur-[80px]"></div>
                <div class="absolute bottom-20 right-[-100px] w-64 h-64 bg-potads-yellow opacity-10 rounded-full blur-[60px]"></div>

                <div class="relative z-10 space-y-10">
                    <a href="/">
                        <img src="https://via.placeholder.com/100x100?text=LOGO" alt="POTADS Logo" class="w-16 h-16 bg-white rounded-2xl p-2 shadow-xl">
                    </a>
                    
                    <h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight">
                        Mari Bergabung<br>dalam Perjalanan<br>Inklusi.
                    </h1>
                    
                    <p class="text-lg text-blue-100/80 font-medium leading-relaxed">
                        Kami percaya setiap anak memiliki potensi luar biasa. Dengan mendaftar, Anda membantu kami menciptakan dunia yang lebih ramah bagi penyandang Down Syndrome.
                    </p>
                </div>

                <div class="relative z-10">
                    <div class="bg-white/5 backdrop-blur-md p-8 rounded-[32px] border border-white/10 shadow-2xl">
                         <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-potads-yellow rounded-full flex items-center justify-center text-potads-navy group hover:scale-110 transition cursor-pointer">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </div>
                            <p class="font-bold text-sm tracking-wide">"Setiap dukungan kecil membawa perubahan besar bagi masa depan anak-anak kami."</p>
                        </div>
                        <div class="flex items-center gap-3 ml-1">
                             <div class="w-8 h-8 rounded-full bg-potads-yellow flex items-center justify-center text-[10px] font-black text-potads-navy">EH</div>
                             <div class="text-[10px] font-black uppercase tracking-widest opacity-60">Tim Potads <br> <span class="font-medium lowercase">Relawan Komunitas</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Register Form -->
            <div class="flex-1 flex flex-col items-center justify-center p-8 md:p-16 relative overflow-y-auto">
                <div class="w-full max-w-[720px] space-y-10 py-12 animate-fade-in">
                    <div class="space-y-3">
                        <h2 class="text-4xl font-black text-potads-navy tracking-tight">Buat Akun Baru</h2>
                        <p class="text-gray-500 font-bold">Lengkapi formulir di bawah ini untuk menjadi bagian dari komunitas kami.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="space-y-10">
                        @csrf

                        <!-- Section: Informasi Pribadi -->
                        <div class="space-y-6">
                            <h3 class="text-xs font-black text-potads-navy uppercase tracking-[0.2em] border-b border-gray-100 pb-4">Informasi Pribadi</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Nama Lengkap</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Contoh: Budi Santoso" required class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Email Aktif</label>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com" required class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">No HP (WhatsApp)</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="0812xxxx" class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('phone')" class="mt-1" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Pekerjaan</label>
                                    <input type="text" name="profession" value="{{ old('profession') }}" placeholder="Guru, Wirausaha, dll" class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('profession')" class="mt-1" />
                                </div>
                            </div>
                        </div>

                        <!-- Section: Domisili -->
                        <div class="space-y-6">
                            <h3 class="text-xs font-black text-potads-navy uppercase tracking-[0.2em] border-b border-gray-100 pb-4">Domisili</h3>
                            <div class="space-y-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Alamat Lengkap</label>
                                    <textarea name="address" rows="3" placeholder="Nama jalan, nomor rumah, RT/RW" class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">{{ old('address') }}</textarea>
                                    <x-input-error :messages="$errors->get('address')" class="mt-1" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Kabupaten / Kota</label>
                                    <input type="text" name="city" value="{{ old('city') }}" placeholder="Masukkan nama kota" class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('city')" class="mt-1" />
                                </div>
                            </div>
                        </div>

                        <!-- Additional: Username & Password -->
                         <div class="space-y-6">
                            <h3 class="text-xs font-black text-potads-navy uppercase tracking-[0.2em] border-b border-gray-100 pb-4">Akses Akun</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Username</label>
                                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Pilih username" required class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('username')" class="mt-1" />
                                </div>
                                <div class="space-y-2"></div> <!-- Spacer -->
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Kata Sandi</label>
                                    <input type="password" name="password" placeholder="Min. 8 karakter" required class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[10px] font-black uppercase tracking-widest text-gray-400 ml-1">Konfirmasi Sandi</label>
                                    <input type="password" name="password_confirmation" placeholder="Masuk ulang sandi" required class="w-full bg-[#EDF2FA] border-0 rounded-xl px-6 py-4 font-bold text-gray-700 focus:ring-4 focus:ring-potads-navy/10 transition">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                                </div>
                            </div>
                        </div>

                        <!-- Question -->
                        <div class="bg-[#FFFCEB] p-8 rounded-[32px] border border-potads-yellow/20 space-y-4">
                             <p class="text-sm font-black text-potads-navy leading-relaxed">Apa Anda orangtua dari ADS (Anak dengan Down Syndrome)?</p>
                             <div class="flex flex-wrap gap-8">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="is_parent" value="yes" checked class="w-5 h-5 text-potads-navy focus:ring-potads-navy transition border-gray-300">
                                    <span class="text-sm font-bold text-gray-600 group-hover:text-potads-navy transition">Ya, Benar</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="radio" name="is_parent" value="no" class="w-5 h-5 text-potads-navy focus:ring-potads-navy transition border-gray-300">
                                    <span class="text-sm font-bold text-gray-600 group-hover:text-potads-navy transition">Bukan / Pendamping</span>
                                </label>
                             </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-potads-navy text-white font-extrabold text-xl py-6 rounded-2xl shadow-xl hover:bg-[#002B5A] transform active:scale-95 transition-all flex items-center justify-center gap-3 group">
                                Daftar Akun Sekarang
                                <svg class="w-6 h-6 group-hover:translate-x-2 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                            <p class="text-center mt-8 text-gray-400 font-bold text-sm">
                                Sudah memiliki akun? <a href="{{ route('login') }}" class="text-potads-navy hover:underline">Masuk di sini</a>
                            </p>
                        </div>
                    </form>
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
