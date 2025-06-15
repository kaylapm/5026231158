<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route.fer("publish url",view)
//get itu ada dua, yang pertama itu publish url. lalu yang kedua itu viewnya

Route::get('/selamat', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
}); //simple HTML

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello',[Coba::class, 'helloworld']);

//Route untuk tugas - ets
Route::get('pertama', function () {
	return view('pertama');
});

Route::get('animation', function () {
	return view('animation');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('bootstrap2', function () {
	return view('bootstrap2');
});

Route::get('counter', function () {
	return view('counter');
});

Route::get('form', function () {
	return view('form');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('latihan', function () {
	return view('latihan');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('ets', function () {
	return view('ets');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('dosen',[Coba::class, 'index']);

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']); //halaman isian formulir

Route::post('/formulir/proses', [PegawaiController::class, 'proses']); //action form

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD dataabase pegawai belajar_laravel
Route::get('/pegawai', [PegawaiDBCOntroller::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBCOntroller::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBCOntroller::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBCOntroller::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBCOntroller::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBCOntroller::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBCOntroller::class, 'cari']);

// route CRUD dataabase monitor belajar_laravel
Route::get('/monitor', [MonitorController::class, 'indexmonitor']);
Route::get('/monitor/tambah', [MonitorController::class, 'tambahmonitor']);
Route::post('/monitor/store', [MonitorController::class, 'storemonitor']);
Route::get('/monitor/edit/{ID}', [MonitorController::class, 'editmonitor']);
Route::post('/monitor/update', [MonitorController::class, 'updatemonitor']);
Route::get('/monitor/hapus/{ID}', [MonitorController::class, 'hapusmonitor']);
Route::get('/monitor/cari', [MonitorController::class, 'carimonitor']);

// route CRUD dataabase keranjangbelanja belajar_laravel
Route::get('/keranjang', [App\Http\Controllers\KeranjangController::class, 'indexkeranjang']);
Route::get('/keranjang/tambah', [App\Http\Controllers\KeranjangController::class, 'tambahkeranjang']);
// Route::post('/keranjang/store', [App\Http\Controllers\KeranjangController::class, 'storekeranjang']);
Route::get('/keranjang/tambah/{ID}', [App\Http\Controllers\KeranjangController::class, 'storekeranjang']);
Route::post('/keranjang/update', [App\Http\Controllers\KeranjangController::class, 'updatekeranjang']);
Route::get('/keranjang/hapus/{ID}', [App\Http\Controllers\KeranjangController::class, 'keranjangbelanja']);

//route CRUD dataabase karyawan belajar_laravel
Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'indexkaryawan']);
Route::get('/karyawan/tambah', [App\Http\Controllers\KaryawanController::class, 'tambahkaryawan']);
Route::post('/karyawan/store', [App\Http\Controllers\KaryawanController::class, 'storekaryawan']);
Route::get('/karyawan/edit/{kodepegawai}', [App\Http\Controllers\KaryawanController::class, 'editkaryawan']);
Route::post('/karyawan/update', [App\Http\Controllers\KaryawanController::class, 'updatekaryawan']);
Route::get('/karyawan/hapus/{kodepegawai}', [App\Http\Controllers\KaryawanController::class, 'hapuskaryawan']);

//route controller
Route::get('/counter',[CounterController::class, 'read']);
