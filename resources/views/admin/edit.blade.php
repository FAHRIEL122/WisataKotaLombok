@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto py-10">
    <div class="bg-white p-8 shadow rounded-xl">
        <h2 class="text-xl font-bold mb-6">Edit Wisata: {{ $wisata->nama_tempat }}</h2>
        <form action="{{ route('admin.wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold">Nama Tempat Wisata</label>
                    <input type="text" name="nama_tempat" value="{{ $wisata->nama_tempat }}" class="w-full border p-2 rounded mt-1" required>
                </div>
                <div>
                    <label class="block text-sm font-bold">Alamat</label>
                    <textarea name="alamat" class="w-full border p-2 rounded mt-1" rows="2">{{ $wisata->alamat }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold">Harga Tiket (Rp)</label>
                        <input type="number" name="harga_tiket" value="{{ $wisata->harga_tiket }}" class="w-full border p-2 rounded mt-1">
                    </div>
                    <div>
                        <label class="block text-sm font-bold">Kategori</label>
                        <select name="kategori" class="w-full border p-2 rounded mt-1">
                            <option value="Pantai" {{ $wisata->kategori == 'Pantai' ? 'selected' : '' }}>Pantai</option>
                            <option value="Gunung" {{ $wisata->kategori == 'Gunung' ? 'selected' : '' }}>Gunung</option>
                            <option value="Kuliner" {{ $wisata->kategori == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold">Deskripsi Wisata</label>
                    <textarea name="deskripsi" class="w-full border p-2 rounded mt-1" rows="4">{{ $wisata->deskripsi }}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4 border-t pt-4">
                    <div>
                        <label class="block text-sm font-bold">Ganti Foto Cover (Biarkan kosong jika tidak diubah)</label>
                        <input type="file" name="foto_cover" class="block w-full text-sm mt-1">
                    </div>
                    <div>
                        <label class="block text-sm font-bold">Tambah Foto Galeri Baru</label>
                        <input type="file" name="fotos[]" multiple class="block w-full text-sm mt-1">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full bg-yellow-500 text-white py-3 rounded mt-8 font-bold hover:bg-yellow-600 transition">Update Data Wisata</button>
            <a href="{{ route('admin.wisata.index') }}" class="block text-center mt-4 text-gray-500 text-sm">Batal</a>
        </form>
    </div>
</div>
@endsection