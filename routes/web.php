<?php

use App\Http\Controllers\AuthController;
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

    Route::get('/dashstok', 'AuthController@dashStok')->name('stok.dash');

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

    //Transaksi
    Route::get('/dashboardTransaksi', 'AuthController@dashboardTransaksi')->name('dashboardTransaksi');
    Route::get('/dashPembelian', 'AuthController@dashPembelian')->name('dashPembelian');
    Route::get('/dashPenjualan', 'AuthController@dashPenjualan')->name('dashPenjualan');

        //Jual
    Route::get('/dashtransper', 'AuthController@dashtransper')->name('permintaan');
    Route::get('/detailtransper/{id}', 'AuthController@detailtransper')->name('detail.per');

    Route::get('/formtransper', 'AuthController@reqJual')->name('reqJual');
    Route::post('/tambahnotaJual', 'AuthController@tambahnotaJual')->name('notajual.tambah');
    Route::post('/tambahItem', 'AuthController@tambahItem')->name('item.tambah');
    Route::post('/tambahJual', 'AuthController@tambahReqJual')->name('reqjual.tambah');
    Route::delete('/deletereqjual/{id}', 'AuthController@deleteReqJual')->name('delete.reqjual');
    Route::get('/editJual/{id}', 'AuthController@formJualEdit')->name('edit.reqjual');
    Route::put('/updateJual/{id}', 'AuthController@updateJual')->name('update.reqjual');
    Route::put('/cancelNotaJual/{id}', 'AuthController@cancelNotaJual')->name('notajual.cancel');

    Route::get('/dashkeluar', 'AuthController@dashtranskeluar')->name('keluar');
    Route::get('/detailkeluar/{id}', 'AuthController@detailKeluar')->name('keluar.detail');

    Route::get('/formkeluar', 'AuthController@formKeluar')->name('formKeluar');
    Route::post('/tambahnokeluar', 'AuthController@tambahNoKeluar')->name('nokeluar.tambah');
    Route::post('/simpanKeluar', 'AuthController@simpanKeluar')->name('keluar.simpan');
    Route::post('/tambahKeluar', 'AuthController@tambahKeluar')->name('keluar.tambah');
    Route::post('/returjual/{id}', 'AuthController@returPenjualan')->name('jual.retur');

        //Beli
    Route::get('/dashtransreq', 'AuthController@dashtransreq')->name('request');
    Route::get('/detailtransreq/{id}', 'AuthController@detailtransreq')->name('detail.req');

    Route::get('/formtransreq', 'AuthController@reqBeli')->name('reqBeli');
    Route::post('/tambahnotaBeli', 'AuthController@tambahnotaBeli')->name('notabeli.tambah');
    Route::post('/simpanItem', 'AuthController@simpanItem')->name('item.simpan');
    Route::post('/tambahBeli', 'AuthController@tambahReqBeli')->name('reqbeli.tambah');
    Route::delete('/deletereqbeli/{id}', 'AuthController@deleteReqBeli')->name('delete.reqbeli');
    Route::get('/editBeli/{id}', 'AuthController@formBeliEdit')->name('edit.reqbeli');
    Route::put('/updateBeli/{id}', 'AuthController@updateBeli')->name('update.reqbeli');
    Route::put('/cancelNotaBeli/{id}', 'AuthController@cancelNotaBeli')->name('notabeli.cancel');
    Route::get('/tambahItemBeli/{id}', "AuthController@formTambahItemBeli")->name('tambahitem.reqbeli');

    Route::get('/dashterima', 'AuthController@dashtranster')->name('terima');
    Route::get('/detailterima/{id}', 'AuthController@detailTerima')->name('terima.detail');

    Route::get('/formterima', 'AuthController@formTerima')->name('formTerima');
    Route::post('/tambahnoterima', 'AuthController@tambahNoTerima')->name('noterima.tambah');
    Route::post('/simpanTerima', 'AuthController@simpanTerima')->name('terima.simpan');
    Route::post('/tambahTerima', 'AuthController@tambahTerima')->name('terima.tambah');
    Route::put('/returbeli/{id}', 'AuthController@returPembelian')->name('beli.retur');

        //Vendor
    Route::get('/dashvendor', 'AuthController@vendor')->name('vend.dash');
    Route::get('/formvendor', 'AuthController@formVendor')->name('form.vendor');
    Route::post('/tambahvendor', 'AuthController@tambahVendor')->name('vendor.tambah');
    Route::get('/formvendor/{id}/edit', 'AuthController@editVendor')->name('vendor.edit');
    Route::put('/updatevendor/{id}', 'AuthController@updateVendor')->name('vendor.update');
    Route::delete('/deletevendor/{id}', 'AuthController@deleteVendor')->name('vendor.delete');

        //Customer
    Route::get('/dashcust', 'AuthController@customer')->name('cust.dash');
    Route::get('/formcust', 'AuthController@formCustomer')->name('form.cust');
    Route::post('/tambahcust', 'AuthController@tambahCustomer')->name('cust.tambah');
    Route::get('/formcust/{id}/edit', 'AuthController@editCustomer')->name('cust.edit');
    Route::put('/updatecust/{id}', 'AuthController@updateCustomer')->name('cust.update');
    Route::delete('/deletecust/{id}', 'AuthController@deleteCustomer')->name('cust.delete');
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
    Route::post('/ceklogin', 'AuthController@cekLogin')->name('ceklogin');
});
