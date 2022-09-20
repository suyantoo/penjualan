<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    DashboardController,
    PembeliController,
    PembelianController,
    PenjualanController
};

Route::get('/', [DashboardController::class, 'index']);

// Route Barang
Route::resource('/barang', BarangController::class);
Route::get('/barang/{id}/edit', [BarangController::class, 'edit']);
Route::get('/barang/{id}/hapus', [BarangController::class, 'destroy']);

// Route Kategori
Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

// Route Suplier
Route::resource('/suplier', SuplierController::class);
Route::get('/suplier/edit/{id}', [SuplierController::class, 'hapus']);
Route::get('/suplier/hapus/{id}', [SuplierController::class, 'destroy']);

// Route Pembeli
Route::resource('/pembeli', PembeliController::class);
Route::get('/pembeli/edit/{id}', [PembeliController::class, 'hapus']);
Route::get('/pembeli/hapus/{id}', [PembeliController::class, 'destroy']);

// Route Pembelian
Route::resource('/pembelian', PembelianController::class);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'hapus']);
Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);


// Route penjualan
Route::resource('/penjualan', PenjualanController::class);
Route::get('/penjualan/edit/{id}', [PenjualanController::class, 'hapus']);
Route::get('/penjualan/hapus/{id}', [PenjualanController::class, 'destroy']);