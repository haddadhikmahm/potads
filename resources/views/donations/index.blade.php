<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Donasi - PIK POTADS Jabar</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .hero-gradient {
                background: linear-gradient(135deg, #0A2647 0%, #144272 100%);
            }
        </style>
    </head>
    <body class="bg-gray-50 font-sans antialiased">
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center">
                        <a href="/" class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-potads-yellow rounded-full flex items-center justify-center font-bold text-potads-blue-dark shadow-sm text-xs">P</div>
                            <span class="text-xl font-bold tracking-tight text-potads-blue-dark">PIK POTADS <span class="text-potads-blue">Jabar</span></span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center">
                         <a href="/" class="text-gray-600 hover:text-potads-blue-dark font-medium transition">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="py-20 hero-gradient relative overflow-hidden">
             <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-potads-yellow opacity-10 rounded-full blur-3xl"></div>
             <div class="max-w-4xl mx-auto px-4 relative z-10 text-center text-white">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Salurkan Kebaikan Anda</h1>
                <p class="text-lg text-blue-100 max-w-2xl mx-auto">Donasi Anda sangat berarti untuk mendukung program edukasi, terapi, dan pengembangan potensi putra-putri Down Syndrome di Jawa Barat.</p>
             </div>
        </section>

        <section class="py-12 -mt-16 relative z-20">
            <div class="max-w-xl mx-auto px-4">
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 p-8 md:p-12">
                    @if(session('success'))
                        <div class="bg-green-50 border border-green-200 text-green-700 p-6 rounded-2xl mb-8 flex items-center gap-4">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="font-bold">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('donations.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="donor_name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="donor_name" id="donor_name" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4" placeholder="Masukkan nama Anda..." required>
                            @error('donor_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="donor_email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                            <input type="email" name="donor_email" id="donor_email" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4" placeholder="Email untuk konfirmasi" required>
                             @error('donor_email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="amount" class="block text-sm font-bold text-gray-700 mb-2">Jumlah Donasi (Rp)</label>
                            <div class="relative">
                                <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">IDR</span>
                                <input type="number" name="amount" id="amount" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition pl-16 pr-5 py-4 font-bold text-xl" placeholder="min. 10.000" min="10000" required>
                            </div>
                            @error('amount') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                         <div>
                            <label for="payment_method" class="block text-sm font-bold text-gray-700 mb-2">Metode Pembayaran</label>
                            <select name="payment_method" id="payment_method" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4">
                                <option value="BCA">Transfer Bank BCA</option>
                                <option value="BNI">Transfer Bank BNI</option>
                                <option value="MANDIRI">Transfer Bank Mandiri</option>
                                <option value="GOPAY">GOPAY / QRIS</option>
                            </select>
                        </div>

                        <div>
                            <label for="notes" class="block text-sm font-bold text-gray-700 mb-2">Catatan / Doa (Opsional)</label>
                            <textarea name="notes" id="notes" rows="3" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-potads-yellow text-potads-blue-dark py-5 rounded-2xl font-bold text-xl hover:bg-potads-yellow-dark transition-all shadow-xl transform active:scale-95">
                            Konfirmasi Donasi
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <footer class="py-12 bg-gray-50 text-center text-sm text-gray-400 font-medium">
            &copy; {{ date('Y') }} PIK POTADS Jawa Barat. Seluruh Hak Cipta Dilindungi.
        </footer>
    </body>
</html>
