<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\barang as Barang;
use App\detailbarang as Detailbarang;
use App\keluar as Keluar;
use App\terima as Terima;
use App\reqjual as Reqjual;
use App\reqbeli as Reqbeli;
use App\notajual as Notajual;
use App\notabeli as Notabeli;
use App\vendor as Vendor;
use App\customer as Customer;
use App\berita as Berita;

class WebController extends Controller
{
    public function home() {
        return view('home');
    }

    public function service() {
        return view('service');
    }

    public function tampil(Request $request) {
        $kategori = $request->query('kategori', 'Semua Kategori');

        if ($kategori == 'Semua Kategori') {
            $barang = Barang::all();
        } else {
            $barang = Barang::where('kategori', $kategori)->get();
        }
        $barang = ($kategori == 'Semua Kategori') ? Barang::all() : Barang::where('kategori', $kategori)->get();
        return view('product', compact('barang', 'kategori'));
    }

    public function detail($id_barang) {
        $barang = Barang::where('id_barang', $id_barang)->first();
        return view('product-detail', compact('barang'));
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

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function news() {
        $berita = Berita::all();
        $news = Berita::orderBy('tanggal', 'asc')->limit(5)->get();
        return view('news', compact('berita', 'news'));
    }

    public function detailnews($id_berita){
        $berita = Berita::where('id_berita', $id_berita)->first();
        $news = Berita::orderBy('tanggal', 'asc')->limit(5)->get();
        return view('news-detail', compact('berita', 'news'));
    }

    public function portofolio(){
        return view('portofolio');
    }
}
