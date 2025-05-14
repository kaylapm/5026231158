<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;

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
