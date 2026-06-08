<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['wisata_id', 'foto', 'angle_foto'];

    // Foto galeri ini milik satu tempat wisata
    public function wisata() { return $this->belongsTo(Wisata::class); }
}