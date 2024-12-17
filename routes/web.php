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
    Route::post('/savebarang', 'AuthController@tambahBarang');
    Route::get('/detaildashboard', function () {
        return view('dashboard-detail');
    });
    Route::get('/logout', 'WebController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'WebController@home');
    Route::get('/about', 'WebController@about');
    Route::get('/contact', 'WebController@contact');
    Route::get('/product', 'WebController@product');
    Route::get('/service', 'WebController@service');
    Route::get('/admin', 'WebController@admin');
    Route::get('/login', 'WebController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@cekLogin');
});
