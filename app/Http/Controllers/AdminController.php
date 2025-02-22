<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function uploadFoto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png|max:2048',
        ]);

        $path = $request->file('foto')->store('uploads/foto', 'public');

        return response()->json(['path' => $path], 200);
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
            'foto' => 'required'
        ]);

        $barang = new barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->harga_beli = $request->harga_beli;
        $barang->harga_jual = $request->harga_jual;
        $barang->kategori = $request->kategori;
        $barang->keterangan = $request->keterangan;
        $barang->satuan = $request->satuan;
        $barang->stok = $request->stok;
        $barang->foto = $request->foto;
        $barang->save();

        return redirect('/dashboard');
        return response()->json(['message' => 'Barang berhasil ditambahkan'], 200);
    }
}
