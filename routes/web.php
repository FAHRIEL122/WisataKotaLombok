<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\FrontEndController;

// Halaman depan untuk pengunjung
Route::get('/', [FrontEndController::class, 'welcome'])->name('welcome');
Route::get('/wisata/{id}', [FrontEndController::class, 'detail'])->name('wisata.detail');

use App\Http\Controllers\AdminController;

// Halaman Admin (Wajib Login & Role Admin)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('wisata', WisataController::class);
});

// Route dashboard bawaan Breeze diarahkan ke AdminController (Hanya untuk Admin)
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified', 'admin'])->name('dashboard');

// Route Auth bawaan Laravel
require __DIR__.'/auth.php';