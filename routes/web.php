<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\FrontEndController;

// Halaman depan untuk pengunjung
Route::get('/', [FrontEndController::class, 'welcome'])->name('welcome');
Route::get('/wisata/{id}', [FrontEndController::class, 'detail'])->name('wisata.detail');

use App\Http\Controllers\AdminController;

// Halaman Admin (Wajib Login)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('wisata', WisataController::class);
});

// Route dashboard bawaan Breeze diarahkan ke AdminController
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route Auth bawaan Laravel
require __DIR__.'/auth.php';