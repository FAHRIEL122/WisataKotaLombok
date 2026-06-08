<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->text('alamat');
            $table->text('deskripsi');
            $table->integer('harga_tiket');
            $table->string('jam_operasional');
            $table->string('no_kontak');
            $table->string('foto_cover');
            $table->string('kategori');
            $table->text('map_embed')->nullable();
            $table->text('video_embed')->nullable();
            $table->timestamps();
        });
    }
    public function down() { Schema::dropIfExists('wisatas'); }
};