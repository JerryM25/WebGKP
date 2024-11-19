<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'WebController@home');
Route::get('/about', 'WebController@about');
Route::get('/contact', 'WebController@contact');
Route::get('/product', 'WebController@product');
Route::get('/team', 'WebController@team');
Route::get('/service', 'WebController@service');

Route::get('/admin', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tambah', function () {
    return view('form');
});

Route::get('/detaildashboard', function () {
    return view('dashboard-detail');
});

Route::get('/detailproduct', function () {
    return view('product-detail');
});
