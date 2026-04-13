@extends('layouts.frontend')

@section('title', 'Donasi - PIK POTADS')

@section('content')
    <section class="py-20 bg-potads-blue relative overflow-hidden">
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-potads-yellow opacity-10 rounded-full blur-3xl"></div>
        <div class="max-w-4xl mx-auto px-4 relative z-10 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Salurkan <span class="text-potads-yellow">Kebaikan</span> Anda</h1>
            <p class="text-lg text-blue-100 max-w-2xl mx-auto">Donasi Anda sangat berarti untuk mendukung program edukasi, terapi, dan pengembangan potensi putra-putri Down Syndrome di Jawa Barat.</p>
        </div>
    </section>

    <section class="py-12 -mt-16 relative z-20 px-6">
        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 p-8 md:p-12">
                @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-700 p-6 rounded-2xl mb-8 flex items-center gap-4">
                        <i data-lucide="check-circle" class="w-8 h-8 text-green-500"></i>
                        <p class="font-bold">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('donations.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="donor_name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="donor_name" id="donor_name" value="{{ old('donor_name', auth()->user() ? auth()->user()->name : '') }}" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4" placeholder="Masukkan nama Anda..." required>
                        @error('donor_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="donor_email" class="block text-sm font-bold text-gray-700 mb-2">Email</label>
                        <input type="email" name="donor_email" id="donor_email" value="{{ old('donor_email', auth()->user() ? auth()->user()->email : '') }}" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4" placeholder="Email untuk konfirmasi" required>
                         @error('donor_email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-bold text-gray-700 mb-2">Jumlah Donasi (Rp)</label>
                        <div class="relative">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">IDR</span>
                            <input type="number" name="amount" id="amount" value="{{ old('amount') }}" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition pl-16 pr-5 py-4 font-bold text-xl" placeholder="min. 10.000" min="10000" required>
                        </div>
                        @error('amount') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                     <div>
                        <label for="payment_method" class="block text-sm font-bold text-gray-700 mb-2">Metode Pembayaran</label>
                        <select name="payment_method" id="payment_method" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4 appearance-none bg-no-repeat bg-[right_1.25rem_center] bg-[length:1rem]">
                            <option value="BCA">Transfer Bank BCA</option>
                            <option value="BNI">Transfer Bank BNI</option>
                            <option value="MANDIRI">Transfer Bank Mandiri</option>
                            <option value="GOPAY">GOPAY / QRIS</option>
                        </select>
                    </div>

                    <div>
                        <label for="notes" class="block text-sm font-bold text-gray-700 mb-2">Catatan / Doa (Opsional)</label>
                        <textarea name="notes" id="notes" rows="3" class="w-full rounded-2xl border-gray-200 focus:border-potads-blue focus:ring-potads-blue transition px-5 py-4" placeholder="Tuliskan pesan atau doa Anda...">{{ old('notes') }}</textarea>
                    </div>

                    <button type="submit" class="w-full bg-potads-yellow text-potads-blue py-5 rounded-2xl font-bold text-xl hover:bg-yellow-400 transition-all shadow-xl transform active:scale-95">
                        Konfirmasi Donasi
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
