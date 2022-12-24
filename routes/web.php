<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

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
	return view('welcome');
});

Route::get('dashboard', function () {
	return view('dashboard');
})->name('dashboard');

Route::controller(BarangController::class)->prefix('barang')->group(function () {
	Route::get('', 'index')->name('barang');
	Route::get('tambah', 'tambah')->name('barang.tambah');
	Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
	Route::get('edit/{id}', 'edit')->name('barang.edit');
	Route::post('edit/{id}', 'update')->name('barang.tambah.update');
	Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
});
