<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Barang;
use App\Detailbarang;
use App\Keluar;
use App\Terima;
use App\Reqjual;
use App\Reqbeli;
use App\Notajual;
use App\Notabeli;

class WebController extends Controller
{
    public function home() {
        return view('home');
    }

    public function service() {
        return view('service');
    }

    public function product() {
        // $barang = Barang::orderBy('id_barang')->paginate(12)->get();
        return view('product')->compact($collection, $item);
    }

    public function searchBarang(Request $request) {
        $cari = $request->q;
        $barang = Barang::where('nama_barang', 'Like', '%'.$cari.'%')->orWhere('kategori', 'like', '%'.$cari.'%')->orderBy('id', 'asc')->paginate(12);
        $cari->appends($request->all());
        return view('product');
    }

    public function about() {
        return view('about');
    }

    public function admin() {
        return view('login');
    }

    public function login() {
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
