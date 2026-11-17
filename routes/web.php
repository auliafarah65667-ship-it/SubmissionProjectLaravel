<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\JurusanController;

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

Route::get('/products/{id}', [ProductsController::class, 'show']);

Route::get('/jurusan', [JurusanController::class, 'index'])
    ->name('jurusan.index');

Route::get('/jurusan/create', [JurusanController::class, 'create'])
    ->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])
    ->name('jurusan.store');

Route::get('/jurusan/{id}', [JurusanController::class, 'show'])
    ->name('jurusan.show');