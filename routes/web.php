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
    //transaksi
    Route::get('/dashboardTransaksi', 'AuthController@dashboardTransaksi')->name('dashboardTransaksi');
    Route::get('/dashtransreq', 'AuthController@dashtransreq')->name('request');
    Route::get('/dashtranster', 'AuthController@dashtranster')->name('terima');
    Route::get('/dashtransper', 'AuthController@dashtransper')->name('permintaan');
    Route::get('/dashtransjual', 'AuthController@dashtransjual')->name('jual');

    //produk
    Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');
    Route::get('/dashprod', 'AuthController@dashboardProduct')->name('dashboardProduct');
    Route::get('/dashnews', 'AuthController@dashboardNews')->name('dashboardNews');
    Route::get('/dashporto', 'AuthController@dashboardPorto')->name('dashboardPorto');
    Route::post('/tambahBerita', 'AuthController@tambahBerita')->name('tambahBerita');
    Route::get('/formnews', 'AuthController@formBerita');
    Route::post('/tambahPorto', 'AuthController@tambahPorto')->name('tambahPorto');
    Route::get('/formporto', 'AuthController@formPorto');
    Route::get('/dashporto/{id}/edit', 'AuthController@editPorto')->name('porto.edit');
    Route::delete('/deleteporto/{id}', 'AuthController@deletePorto')->name('porto.delete');
    Route::put('/updateporto/{id}', 'AuthController@updatePorto')->name('porto.update');

    //berita
    Route::delete('/deletenews/{id}', 'AuthController@deleteBerita')->name('berita.delete');
    Route::get('/dashnews/{id}/edit', 'AuthController@editBerita')->name('berita.edit');
    Route::put('/dashnews/{id}', 'AuthController@updateBerita')->name('berita.update');
    Route::get('/dashnews/{id}', 'AuthController@detNews')->name('news.dashdetail');
    Route::get('/dashprod/{id}', 'AuthController@detail')->name('dashboard.detail');
    Route::delete('/deleteprod/{id}', 'AuthController@deleteBarang')->name('barang.delete');
    Route::post('/uploadFoto', 'AuthController@uploadFoto')->name('uploadFoto');
    Route::get('/formbarang', 'AuthController@formBarang');
    Route::post('/tambahBarang', 'AuthController@tambahBarang')->name('tambahBarang');
    Route::get('/dashprod/{id}/edit', 'AuthController@editBarang')->name('barang.edit');
    Route::put('/dashprod/{id}', 'AuthController@updateBarang')->name('barang.update');
    Route::post('/logout', 'WebController@logout')->name('logout');

    //porto
});



Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'WebController@home')->name('home');
    Route::get('/about', 'WebController@about')->name('about');
    Route::get('/product', 'WebController@tampil')->name('product');
    Route::get('/product/{id}', 'WebController@detail')->name('product.detail');
    Route::get('/service', 'WebController@service')->name('service');
    Route::get('/news', 'WebController@news')->name('news');
    Route::get('/news/{id}', 'WebController@detailnews')->name('news.detail');
    Route::get('/portofolio', 'WebController@portofolio')->name('portofolio');
    Route::get('/admin', 'WebController@admin')->name('login');
    Route::get('/login', 'WebController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@cekLogin');
});
