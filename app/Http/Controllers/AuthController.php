<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Barang;
use App\Detailbarang;
use App\Keluar;
use App\Terima;
use App\Reqjual;
use App\Reqbeli;
use App\Notajual;
use App\Notabeli;

class AuthController extends Controller
{
    public function cekLogin(Request $request) {
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]))
        {
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
    }

    public function dashboard() {
        $barang = Barang::paginate(15);
        return view('dashboard', ['barang' => $barang]);
    }

    public function formTambah() {
        return view('form');
    }

    public function tambahBarang(Request $request){
        Barang::create([
            'nama_barang' => $this->nama_barang,
            'harga_beli' => $this->harga_beli,
            'harga_jual' => $this->arga_jual,
            'kategori' => $this->kategori,
            'baru' => $this->baru,
            'berat' => $this->berat,
            'keterangan' => $this->keterangan,
            'stok' => $this->stok,
            'satuan' => $this->satuan
        ]);
        return redirect('/dashboard');
    }

    public function formEdit() {

        return view('form');
    }

    public function editBarang(Request $request){
        Barang::where('id_barang', $id_barang)-first();
    }
}
