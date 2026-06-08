@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto py-10">
    <div class="bg-white p-8 shadow rounded-xl">
        <h2 class="text-xl font-bold mb-6">Tambah Wisata Baru</h2>
        <form action="{{ route('admin.wisata.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold">Nama Tempat Wisata</label>
                    <input type="text" name="nama_tempat" class="w-full border p-2 rounded mt-1" required>
                </div>
                <div>
                    <label class="block text-sm font-bold">Alamat</label>
                    <textarea name="alamat" class="w-full border p-2 rounded mt-1" rows="2"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold">Harga Tiket (Rp)</label>
                        <input type="number" name="harga_tiket" class="w-full border p-2 rounded mt-1">
                    </div>
                    <div>
                        <label class="block text-sm font-bold">Kategori</label>
                        <select name="kategori" class="w-full border p-2 rounded mt-1">
                            <option value="Pantai">Pantai</option>
                            <option value="Gunung">Gunung</option>
                            <option value="Kuliner">Kuliner</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold">Jam Operasional</label>
                        <input type="text" name="jam_operasional" placeholder="Contoh: 08:00 - 17:00" class="w-full border p-2 rounded mt-1">
                    </div>
                    <div>
                        <label class="block text-sm font-bold">No Kontak/WhatsApp</label>
                        <input type="text" name="no_kontak" class="w-full border p-2 rounded mt-1">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold">Deskripsi Wisata</label>
                    <textarea name="deskripsi" class="w-full border p-2 rounded mt-1" rows="4"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold">Foto Cover (Utama)</label>
                        <input type="file" name="foto_cover" class="block w-full text-sm mt-1">
                    </div>
                    <div>
                        <label class="block text-sm font-bold">Foto Galeri (Bisa Pilih Banyak)</label>
                        <input type="file" name="fotos[]" multiple class="block w-full text-sm mt-1">
                    </div>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <p class="text-sm text-blue-700 mb-2 font-bold">Informasi Embed (Opsional)</p>
                    <label class="block text-xs font-bold text-gray-600 uppercase">Google Maps Embed Code</label>
                    <textarea name="map_embed" placeholder="Paste <iframe> dari Google Maps" class="w-full border p-2 rounded mt-1 text-xs" rows="2"></textarea>
                    
                    <label class="block text-xs font-bold text-gray-600 uppercase mt-3">YouTube Video Embed Code</label>
                    <textarea name="video_embed" placeholder="Paste <iframe> dari YouTube" class="w-full border p-2 rounded mt-1 text-xs" rows="2"></textarea>
                </div>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded mt-8 font-bold hover:bg-blue-700 transition">Simpan Wisata</button>
            <a href="{{ route('admin.wisata.index') }}" class="block text-center mt-4 text-gray-500 text-sm">Kembali</a>
        </form>
    </div>
</div>
@endsection