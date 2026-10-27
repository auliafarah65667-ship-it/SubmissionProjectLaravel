<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductsController;

Route::get('/profil', [
    MahasiswaController::class,
    'profil'
])->name('mahasiswa.profil');

Route::get('/mahasiswa', [
    MahasiswaController::class,
    'daftar'
])->name('mahasiswa.daftar');

Route::get('/mahasiswa/{nim}', [
    MahasiswaController::class,
    'detail'
])->name('mahasiswa.detail');

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/{id}',
   function ($id) {
      return 'Produk #' . $id;
   });

Route::get('/products/{id}', [ProductsController::class, 'show']);
