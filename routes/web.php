<?php

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

Route::get('/blog', function () {
    return view('blog');
});

// Week 1
Route::get('week1', function()
{
return view('week1');
});

// Week 2
Route::get('week2', function()
{
return view('week2');
});

Route::get('week8', function()
{
return view('week8');
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

// Route::get('pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
//route CRUD tugas 04 Desember 2023
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@indexnilaikuliah');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store', 'App\Http\Controllers\NilaiKuliahController@store');

//route cari pegawai
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD untuk Teh
Route::get('/teh', 'App\Http\Controllers\TehController@index');
Route::get('/teh/tambah','App\Http\Controllers\TehController@tambah');
Route::post('/teh/store', 'App\Http\Controllers\TehController@store');
Route::get('/teh/edit/{id}','App\Http\Controllers\TehController@edit');
Route::post('/teh/update','App\Http\Controllers\TehController@update');
Route::get('/teh/hapus/{id}','App\Http\Controllers\TehController@hapus');
Route::get('/teh/cari','App\Http\Controllers\TehController@cari');
Route::get('/teh/view/{id}','App\Http\Controllers\TehController@view');

