<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\akun;
use App\barang;
use App\betailbarang;
use App\keluar;
use App\terima;
use App\reqjual;
use App\reqbeli;
use App\notajual;
use App\notabeli;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cekLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = akun::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended(route('dashboard'));
        }

        return redirect(route('login'))->withErrors([
            'login' => 'Email atau password salah!'
        ]);
    }

    public function dashboard()
    {
        $barang = barang::paginate(15);
        return view('dashboard', ['barang' => $barang]);
    }

    public function formTambah()
    {
        return view('form');
    }

    public function tambahBarang(Request $request)
    {
        barang::create([
            'foto' => $request->foto,
            'nama_barang' => $request->nama_barang,
            'keterangan' => $request->keterangan,
            'kategori' => $request->kategori,
            'harga_beli' => $request->hrg_beli,
            'harga_jual' => $request->hrg_jual,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'berat' => $request->berat
        ]);
        return redirect('/dashboard')->with('Berhasil Ditambahkan');
    }

    public function formEdit()
    {

        return view('form');
    }

    public function editBarang(Request $request)
    {
        Barang::where('id_barang', $id_barang) - first();
    }
}
