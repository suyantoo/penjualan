<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController,
    SuplierController,
    PembeliController,
    PembelianController,
    PenjualanController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::resource('/barang', BarangController::class);
Route::get('/barang/{id}/edit', [ BarangController::class, 'edit']);
Route::get('/barang/{id}/hapus', [ BarangController::class, 'destroy']);

Route::resource('/kategori', KategoriController::class);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'destroy']);

Route::resource('/suplier', SuplierController::class);
Route::get('/suplier/edit/{id}', [SuplierController::class, 'edit']);
Route::get('/suplier/hapus/{id}', [SuplierController::class, 'destroy']);

Route::resource('/pembeli', PembeliController::class);
Route::get('/pembeli/edit/{id}', [PembeliController::class, 'edit']);
Route::get('/pembeli/hapus/{id}', [PembeliController::class, 'destroy']);

Route::resource('/pembelian', PembelianController::class);
Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit']);
Route::get('/pembelian/hapus/{id}', [PembelianController::class, 'destroy']);

Route::resource('/penjualan', PenjualanController::class);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::get('/penjualan/{id}/hapus', [PenjualanController::class, 'destroy']);

