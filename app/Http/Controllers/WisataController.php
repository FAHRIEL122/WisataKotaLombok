<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    public function index() {
        $wisatas = Wisata::latest()->get();
        return view('admin.index', compact('wisatas'));
    }

    public function create() { return view('admin.create'); }

    public function store(Request $request) {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
            'alamat' => 'required|string',
            'deskripsi' => 'required|string',
            'harga_tiket' => 'required|numeric|min:0',
            'jam_operasional' => 'required|string|max:255',
            'no_kontak' => 'required|string|max:20',
            'kategori' => 'required|string',
            'foto_cover' => 'required|image|mimes:jpg,png,jpeg|max:5120',
        ]);

        $data = $request->all();
        
        // Upload Foto Cover
        if ($request->hasFile('foto_cover')) {
            $data['foto_cover'] = $request->file('foto_cover')->store('wisata/covers', 'public');
        }

        $wisata = Wisata::create($data);

        // Upload Multiple Foto Galeri
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $foto) {
                Galeri::create([
                    'wisata_id' => $wisata->id,
                    'foto' => $foto->store('wisata/galeri', 'public')
                ]);
            }
        }

        return redirect()->route('admin.wisata.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(Wisata $wisata) { return view('admin.edit', compact('wisata')); }

    public function update(Request $request, Wisata $wisata) {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
            'alamat' => 'required|string',
            'deskripsi' => 'required|string',
            'harga_tiket' => 'required|numeric|min:0',
            'jam_operasional' => 'required|string|max:255',
            'no_kontak' => 'required|string|max:20',
            'kategori' => 'required|string',
            'foto_cover' => 'nullable|image|mimes:jpg,png,jpeg|max:5120',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_cover')) {
            // Hapus foto lama jika ada
            if($wisata->foto_cover && !str_starts_with($wisata->foto_cover, 'http')) {
                Storage::disk('public')->delete($wisata->foto_cover);
            }
            $data['foto_cover'] = $request->file('foto_cover')->store('wisata/covers', 'public');
        }

        $wisata->update($data);

        // Tambah foto galeri baru jika ada yang diupload saat edit
        if ($request->hasFile('fotos')) {
            foreach ($request->file('fotos') as $foto) {
                Galeri::create([
                    'wisata_id' => $wisata->id,
                    'foto' => $foto->store('wisata/galeri', 'public')
                ]);
            }
        }

        return redirect()->route('admin.wisata.index')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(Wisata $wisata) {
        // Hapus file fisik foto cover
        Storage::disk('public')->delete($wisata->foto_cover);
        
        // Hapus foto galeri
        foreach($wisata->galeris as $g) {
            Storage::disk('public')->delete($g->foto);
        }

        $wisata->delete();
        return back()->with('success', 'Data Wisata Berhasil Dihapus');
    }
}