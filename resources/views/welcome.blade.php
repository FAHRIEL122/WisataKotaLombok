@extends('layouts.app')
@section('content')

<!-- Navbar -->
<nav class="bg-white p-4 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4">
        <h1 class="text-2xl font-extrabold text-blue-700">WisataLombok</h1>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 text-gray-600 font-bold items-center">
            <a href="#" class="hover:text-blue-600 transition">Home</a>
            <a href="#destinasi" class="hover:text-blue-600 transition">Destinasi Wisata</a>
            <a href="#tentang" class="hover:text-blue-600 transition">Tentang Kota</a>
            <a href="#kontak" class="hover:text-blue-600 transition">Kontak</a>
            @if(Auth::check())
                <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200">Login Admin</a>
            @endif
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="relative bg-blue-900 py-32 text-center text-white overflow-hidden">
    <img src="https://images.unsplash.com/photo-1570784332195-2bd0439f75b8?q=80&w=2000&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-30">
    <div class="relative z-10 max-w-3xl mx-auto px-6">
        <h2 class="text-5xl font-extrabold mb-4">Explore Beautiful Places in Lombok</h2>
        <p class="text-xl text-blue-100 mb-8">Temukan surga tersembunyi di Pulau Seribu Masjid. Mulai dari pantai berpasir putih, bukit hijau yang memanjakan mata, hingga kemegahan Gunung Rinjani.</p>
        <a href="#destinasi" class="bg-yellow-500 text-yellow-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-400 transition shadow-lg inline-block">Lihat Destinasi</a>
    </div>
</header>

<!-- Tentang Kota -->
<section id="tentang" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=1470&auto=format&fit=crop" class="rounded-2xl shadow-xl w-full h-80 object-cover">
            </div>
            <div>
                <h3 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-2">Tentang Kota</h3>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Mengenal Lebih Dekat Pulau Lombok</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p><strong>Sejarah Singkat:</strong> Lombok adalah sebuah pulau di kepulauan Sunda Kecil atau Nusa Tenggara yang terpisahkan oleh Selat Lombok dari Bali di sebelah barat dan Selat Alas di sebelah timur dari Sumbawa. Pulau ini memiliki warisan budaya Suku Sasak yang kental dan sejarah panjang masa kerajaan Karangasem.</p>
                    <p><strong>Keunikan:</strong> Dijuluki "Pulau Seribu Masjid" karena mayoritas penduduknya beragama Islam dan masjid dapat ditemukan di setiap sudut desa. Lombok juga terkenal dengan tenun khas Sade dan desa adatnya yang lantainya dibersihkan menggunakan kotoran kerbau.</p>
                    <p><strong>Daya Tarik Wisata:</strong> Mulai dari keeksotisan 3 Gili (Trawangan, Meno, Air), Pantai berpasir merica (Kuta Mandalika), hingga sirkuit bertaraf internasional, serta kemegahan Gunung Rinjani yang menjadi magnet bagi pendaki di seluruh dunia.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pencarian & Filter (Bonus) -->
<section id="destinasi" class="bg-gray-50 pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl font-extrabold text-gray-900 mb-8">Pilih Destinasi Favoritmu</h3>
        
        <form action="{{ route('welcome') }}#destinasi" method="GET" class="max-w-2xl mx-auto flex flex-col md:flex-row gap-2 mb-10">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama tempat wisata..." class="flex-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            
            <select name="kategori" class="p-3 border border-gray-300 rounded-lg outline-none">
                <option value="">Semua Kategori</option>
                <option value="Pantai" {{ request('kategori') == 'Pantai' ? 'selected' : '' }}>Pantai</option>
                <option value="Gunung" {{ request('kategori') == 'Gunung' ? 'selected' : '' }}>Gunung</option>
                <option value="Alam" {{ request('kategori') == 'Alam' ? 'selected' : '' }}>Alam</option>
                <option value="Sejarah" {{ request('kategori') == 'Sejarah' ? 'selected' : '' }}>Sejarah</option>
                <option value="Kuliner" {{ request('kategori') == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
            </select>
            
            <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-blue-700">Cari</button>
            @if(request('search') || request('kategori'))
                <a href="{{ route('welcome') }}#destinasi" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-bold hover:bg-gray-400">Reset</a>
            @endif
        </form>
    </div>
</section>

<!-- Daftar Wisata -->
<section class="bg-gray-50 pb-20">
    <div class="max-w-7xl mx-auto px-6">
        @if($wisatas->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($wisatas as $w)
            <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition duration-300 overflow-hidden flex flex-col">
                <img src="{{ Str::startsWith($w->foto_cover, 'http') ? $w->foto_cover : asset('storage/'.$w->foto_cover) }}" class="h-48 w-full object-cover">
                <div class="p-5 flex-1 flex flex-col">
                    <span class="text-xs font-bold text-blue-500 uppercase bg-blue-50 px-2 py-1 rounded w-max mb-2">{{ $w->kategori }}</span>
                    <h4 class="text-lg font-bold text-gray-900 leading-tight">{{ $w->nama_tempat }}</h4>
                    <p class="text-gray-500 text-sm mt-2 line-clamp-2 mb-4">{{ $w->deskripsi }}</p>
                    
                    <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                        <div>
                            <span class="block text-xs text-gray-400">Tiket Masuk</span>
                            <span class="font-bold text-green-600">Rp {{ number_format($w->harga_tiket) }}</span>
                        </div>
                        <a href="{{ route('wisata.detail', $w->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-blue-700">Detail &rarr;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-20">
            <p class="text-gray-500 text-lg">Maaf, tempat wisata tidak ditemukan.</p>
        </div>
        @endif
    </div>
</section>

<!-- Footer -->
<footer id="kontak" class="bg-gray-900 text-gray-400 py-12">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
            <h2 class="text-2xl font-extrabold text-white mb-4">WisataLombok</h2>
            <p class="text-sm">Menyajikan informasi destinasi wisata terbaik di Pulau Lombok dengan data yang akurat dan terpercaya.</p>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4 uppercase">Kontak Kami</h3>
            <ul class="space-y-2 text-sm">
                <li>📍 Jl. Pariwisata No 1, Mataram, NTB</li>
                <li>📞 +62 812-3456-7890</li>
                <li>📧 info@wisatalombok.com</li>
            </ul>
        </div>
        <div>
            <h3 class="text-white font-bold mb-4 uppercase">Media Sosial</h3>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-white transition">Instagram</a>
                <a href="#" class="hover:text-white transition">Facebook</a>
                <a href="#" class="hover:text-white transition">YouTube</a>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-6 mt-8 pt-8 border-t border-gray-800 text-center text-sm">
        <p>&copy; 2024 Aplikasi Web CRUD Tempat Wisata. Dibuat untuk memenuhi tugas sekolah.</p>
    </div>
</footer>

@endsection