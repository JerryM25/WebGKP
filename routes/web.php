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


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');
    Route::get('/tambah', 'AuthController@formTambah');

    Route::get('/dashboard/{id}', 'AuthController@detail')->name('dashboard.detail');
    Route::delete('/delete/{id}', 'AuthController@deleteBarang')->name('barang.delete');
    Route::post('/uploadFoto', 'AuthController@uploadFoto')->name('uploadFoto');
    Route::post('/tambahBarang', 'AuthController@tambahBarang')->name('tambahBarang');
    Route::get('/dashboard/{id}/edit', 'AuthController@editBarang')->name('barang.edit');
    Route::put('/dashboard/{id}', 'AuthController@updateBarang')->name('barang.update');
    Route::get('/logout', 'WebController@logout');
});



Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'WebController@home')->name('home');
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/product', 'WebController@tampil')->name('product');
    Route::get('/product/{id}', 'WebController@detail')->name('product.detail');
    Route::get('/service', 'WebController@service')->name('service');
    Route::get('/admin', 'WebController@admin')->name('login');
    Route::get('/login', 'WebController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@cekLogin');
});

// Tambahan dari bara
// Tambah Barang
// Route::group(['middleware' => ['auth']], function () {
//     Route::post('/tambah-barang', 'AdminController@tambahBarang')->name('tambahBarang');
// });
// Upload Foto BArang (Karena aku pakai library dropzone, jadi aku harus buat route khusus untuk upload foto)
// Route::post('/upload-foto', 'AdminController@uploadFoto')->name('uploadFoto');
