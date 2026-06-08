<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();
            // Relasi ke tabel wisatas, jika wisata dihapus, galeri ikut terhapus (cascade)
            $table->foreignId('wisata_id')->constrained('wisatas')->onDelete('cascade');
            $table->string('foto');
            $table->string('angle_foto')->nullable();
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('galeris'); }
};