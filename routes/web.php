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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/index', function () {
    return view('index');
});

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
