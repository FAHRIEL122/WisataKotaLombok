<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    // Menentukan kolom mana saja yang boleh diisi secara massal
    protected $fillable = [
        'nama_tempat', 'alamat', 'deskripsi', 'harga_tiket', 
        'jam_operasional', 'no_kontak', 'foto_cover', 
        'kategori', 'map_embed', 'video_embed'
    ];

    // Satu tempat wisata bisa punya banyak foto galeri
    public function galeris() { return $this->hasMany(Galeri::class); }
}