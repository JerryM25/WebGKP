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

    public function dashboard(Request $request)
    {
        $kategori = $request->query('kategori', 'Semua Kategori');
        $barang = ($kategori == 'Semua Kategori') ? Barang::all() : Barang::where('kategori', $kategori)->get();
        return view('dashboard', compact('barang', 'kategori'));
    }

    public function formTambah()
    {
        return view('form');
    }

    public function tambahBarang(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'kategori' => 'required',
            'keterangan' => 'required',
            'satuan' => 'required',
            'stok' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:5000'
        ]);

        $path = $request->file('foto')->store('images', 'public');

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kategori' => $request->kategori,
            'foto' => $path,
            'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            'satuan' => $request->satuan
        ]);
        return redirect('/dashboard');
    }

    public function updateBarang(Request $request, $id_barang)
    {
        $barang = Barang::where('id_barang', $id_barang)->first();

        $request->validate([
            'nama_barang' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'kategori' => 'required',
            'keterangan' => 'required',
            'satuan' => 'required',
            'stok' => 'required|numeric',
            // 'foto' => 'required|image|mimes:jpg,jpeg,png|max:5000'
        ]);

        // $path = $request->file('foto')->store('images', 'public');

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'keterangan' => $request->keterangan,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'kategori' => $request->kategori
        ]);

        return redirect()->route('dashboard.detail', ['id' => $barang->id_barang])->with('success', 'Barang Berhasil Terupdate');
    }

    public function editBarang($id_barang)
    {
        $barang = Barang::where('id_barang', $id_barang)->first();
        return view('form-edit', compact('barang'));
    }

    public function deleteBarang($id_barang){
        $barang = Barang::where('id_barang', $id_barang)->first();
        $barang->delete();

        return redirect('/dashboard');
    }

    public function detail($id_barang) {
        $barang = Barang::where('id_barang', $id_barang)->first();
        return view('dashboard-detail', compact('barang'));
    }
}
