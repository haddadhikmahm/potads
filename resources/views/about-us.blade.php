@extends('layouts.frontend')

@section('title', 'Tentang Kami - PIK POTADS')

@section('content')
    <!-- Hero Section -->
    <section class="px-6 md:px-12 py-16 bg-blue-50/30">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-16">
            <div class="w-full md:w-1/2">
                <h1 class="text-5xl font-extrabold text-potads-blue mb-6">Mengenal <span class="text-potads-yellow">POTADS</span> Lebih Dekat</h1>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    POTADS (Persatuan Orang Tua Anak dengan Down Syndrome) adalah komunitas yang berdedikasi untuk memberikan dukungan, informasi, dan harapan bagi keluarga dengan anak Down Syndrome.
                </p>
                <div class="flex gap-4">
                    <div class="flex flex-col">
                        <span class="text-3xl font-bold text-potads-blue">2003</span>
                        <span class="text-gray-500 text-sm">Didirikan</span>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="flex flex-col">
                        <span class="text-3xl font-bold text-potads-blue">50+</span>
                        <span class="text-gray-500 text-sm">Cabang</span>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="flex flex-col">
                        <span class="text-3xl font-bold text-potads-blue">10rb+</span>
                        <span class="text-gray-500 text-sm">Anggota</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 relative">
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-potads-yellow/20 rounded-full blur-3xl"></div>
                <img src="https://images.unsplash.com/photo-1594608661623-aa0bd3a69d98?q=80&w=1896&auto=format&fit=crop" alt="POTADS Community" class="rounded-3xl shadow-2xl relative z-10 w-full object-cover aspect-[4/3]">
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="px-6 md:px-12 py-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="p-10 bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="eye" class="w-8 h-8 text-yellow-600"></i>
                </div>
                <h2 class="text-3xl font-bold text-potads-blue mb-4">Visi Kami</h2>
                <p class="text-gray-600 leading-relaxed">
                    Menjadi pusat informasi dan konsultasi terlengkap tentang Down Syndrome di Indonesia, serta mewujudkan masyarakat yang inklusif bagi individu dengan Down Syndrome.
                </p>
            </div>
            <div class="p-10 bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-md transition">
                <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="target" class="w-8 h-8 text-potads-blue"></i>
                </div>
                <h2 class="text-3xl font-bold text-potads-blue mb-4">Misi Kami</h2>
                <ul class="text-gray-600 space-y-3">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-potads-blue shrink-0 mt-1"></i>
                        <span>Memiliki pusat informasi terlengkap mengenai Down Syndrome.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-potads-blue shrink-0 mt-1"></i>
                        <span>Menyediakan informasi terkini dan berbasis bukti ilmiah.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-potads-blue shrink-0 mt-1"></i>
                        <span>Menyebarluaskan informasi mengenai Down Syndrome kepada masyarakat luas.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-5 h-5 text-potads-blue shrink-0 mt-1"></i>
                        <span>Memberikan konsultasi berkelanjutan bagi orang tua dan keluarga.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- History/Story -->
    <section class="px-6 md:px-12 py-20 bg-potads-blue text-white overflow-hidden relative">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl font-bold mb-8">BEDA TAPI <span class="text-potads-yellow">KEREN</span></h2>
            <p class="text-white/80 text-lg leading-relaxed mb-10">
                Walaupun berbeda, tetapi anak-anak dengan Down Syndrome di Jawa Barat tetap mampu berkarya, berprestasi, dan menunjukkan keistimewaan dalam berbagai bidang. Kami percaya bahwa setiap anak memiliki potensi yang luar biasa jika didukung dengan kasih sayang dan lingkungan yang tepat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                    <h4 class="font-bold text-xl mb-2 text-potads-yellow">Penerimaan</h4>
                    <p class="text-sm text-white/70">Menerima dengan tulus keistimewaan setiap individu.</p>
                </div>
                <div class="p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                    <h4 class="font-bold text-xl mb-2 text-potads-yellow">Pemberdayaan</h4>
                    <p class="text-sm text-white/70">Memberikan ruang untuk tumbuh dan berkembang.</p>
                </div>
                <div class="p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                    <h4 class="font-bold text-xl mb-2 text-potads-yellow">Inklusi</h4>
                    <p class="text-sm text-white/70">Membangun dunia yang terbuka bagi semua orang.</p>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/2"></div>
    </section>
@endsection