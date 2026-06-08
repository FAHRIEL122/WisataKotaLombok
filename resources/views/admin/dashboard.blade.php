@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-extrabold text-gray-800 mb-8">Dashboard Admin</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Card Total Wisata -->
        <div class="bg-blue-600 rounded-xl shadow-lg p-6 text-white flex items-center justify-between">
            <div>
                <p class="text-blue-200 text-sm font-bold uppercase tracking-wider">Total Tempat Wisata</p>
                <h3 class="text-4xl font-extrabold mt-2">{{ $totalWisata }}</h3>
            </div>
            <div class="text-5xl opacity-50">🏖️</div>
        </div>

        <!-- Card Kota -->
        <div class="bg-green-600 rounded-xl shadow-lg p-6 text-white flex items-center justify-between">
            <div>
                <p class="text-green-200 text-sm font-bold uppercase tracking-wider">Fokus Kota</p>
                <h3 class="text-4xl font-extrabold mt-2">{{ $kota }}</h3>
            </div>
            <div class="text-5xl opacity-50">📍</div>
        </div>

        <!-- Card Akses Cepat -->
        <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 flex flex-col justify-center">
            <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-3">Akses Cepat</p>
            <a href="{{ route('admin.wisata.create') }}" class="block w-full text-center bg-blue-50 text-blue-700 py-2 rounded-lg font-bold hover:bg-blue-100 transition">+ Tambah Wisata Baru</a>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-100">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Statistik Kategori Wisata</h3>
        @if(count($kategoriStats) > 0)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($kategoriStats as $stat)
                <div class="bg-gray-50 p-4 rounded-lg border border-gray-100 text-center">
                    <span class="block text-gray-500 text-sm font-bold uppercase">{{ $stat->kategori }}</span>
                    <span class="block text-3xl font-extrabold text-blue-600 mt-2">{{ $stat->total }}</span>
                </div>
                @endforeach
            </div>
        @else
            <p class="text-gray-500 italic">Belum ada data wisata.</p>
        @endif
    </div>
</div>
@endsection
