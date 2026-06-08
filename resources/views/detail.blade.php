@extends('layouts.app')
@section('content')
<nav class="bg-white p-4 shadow-sm flex justify-between items-center px-10">
    <a href="{{ route('welcome') }}" class="text-blue-600 font-bold">&larr; Kembali</a>
    <h1 class="text-xl font-bold">Detail Wisata</h1>
    <div></div>
</nav>

<div class="max-w-5xl mx-auto py-10 px-6">
    <img src="{{ Str::startsWith($wisata->foto_cover, 'http') ? $wisata->foto_cover : asset('storage/'.$wisata->foto_cover) }}" class="w-full h-[450px] object-cover rounded-2xl shadow-lg">
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10">
        <div class="md:col-span-2">
            <h2 class="text-4xl font-extrabold text-gray-900">{{ $wisata->nama_tempat }}</h2>
            <p class="text-blue-500 font-bold mt-2 uppercase tracking-wide">{{ $wisata->kategori }}</p>
            
            <div class="mt-6 text-gray-700 leading-relaxed text-lg whitespace-pre-wrap">{{ $wisata->deskripsi }}</div>

            <h3 class="text-2xl font-bold mt-12 mb-4">Galeri Foto</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($wisata->galeris as $galeri)
                <img src="{{ Str::startsWith($galeri->foto, 'http') ? $galeri->foto : asset('storage/'.$galeri->foto) }}" class="h-40 w-full object-cover rounded-lg shadow-sm">
                @endforeach
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h4 class="font-bold text-gray-800 border-b pb-2 mb-4">Informasi Penting</h4>
                <div class="space-y-3 text-sm">
                    <p><strong>📍 Alamat:</strong><br><span class="text-gray-600">{{ $wisata->alamat }}</span></p>
                    <p><strong>🎟️ Tiket:</strong> <span class="text-green-600 font-bold">Rp {{ number_format($wisata->harga_tiket) }}</span></p>
                    <p><strong>⏰ Jam:</strong> {{ $wisata->jam_operasional }}</p>
                    <p><strong>📞 Kontak:</strong> {{ $wisata->no_kontak }}</p>
                </div>
            </div>

            @if($wisata->map_embed)
            <div class="rounded-xl overflow-hidden shadow-sm h-64">
                {!! $wisata->map_embed !!}
            </div>
            @endif
        </div>
    </div>

    @if($wisata->video_embed)
    <div class="mt-16">
        <h3 class="text-2xl font-bold mb-6">Video Terkait</h3>
        <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-xl">
            {!! $wisata->video_embed !!}
        </div>
    </div>
    @endif
</div>

<footer class="bg-gray-100 py-10 text-center mt-20">
    <p class="text-gray-500 text-sm">&copy; 2024 Wisata Lombok - Detail Page</p>
</footer>
@endsection