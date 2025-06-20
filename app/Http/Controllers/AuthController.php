<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\akun;
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
use App\portofolio as Portofolio;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    public function cekLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // 'g-recaptcha-response' => 'required'
        ]);

        // $client = new Client();
        // $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'form_params' => [
        //         'secret'   => env('RECAPTCHA_SECRET_KEY'),
        //         'response' => $request->input('g-recaptcha-response'),
        //     ],
        // ]);

        // $captchaValidation = json_decode($response->getBody(), true);

        // if (!$captchaValidation['success']) {
        //     return back()->withErrors(['captcha' => 'Verifikasi reCAPTCHA gagal.']);
        // }

        $user = akun::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended(route('dashboard'))->with('user', $user);
        }

        return redirect(route('login'))->withErrors([
            'login' => 'Email atau password salah!'
        ]);
    }

    public function dashboard(Request $request)
    {
        return view('dashboard');
    }

    public function dashboardProduct(Request $request)
    {
        $kategori = $request->query('kategori', 'Semua Kategori');
        $barang = ($kategori == 'Semua Kategori') ? Barang::all() : Barang::where('kategori', $kategori)->get();
        return view('dashboardprod', compact('barang', 'kategori'));
    }

    public function dashboardNews(Request $request)
    {
        $berita = Berita::all();
        $news = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('dashboardnews', compact('berita', 'news'));
    }

    public function dashboardPorto(Request $request)
    {
        $porto = Portofolio::orderBy('tanggal', 'asc')->get();
        return view('dashboardporto', compact('porto'));
    }

    public function formPorto()
    {
        return view('formporto');
    }

    public function tambahPorto(Request $request)
    {
        $request->validate([
            'nama_porto' => 'required',
            'tanggal' => 'required'
        ]);

        Portofolio::create([
            'nama_porto' => $request->nama_porto,
            'tanggal' => $request->tanggal
        ]);
        return redirect('dashporto');
    }

    public function editPorto($id_portofolio)
    {
        $porto = Portofolio::where('id_portofolio', $id_portofolio)->first();
        return view('formporto-edit', compact('porto'));
    }

    public function updatePorto(Request $request, $id_portofolio)
    {
        $porto = Portofolio::where('id_portofolio', $id_portofolio)->first();

        $request->validate([
            'nama_porto' => 'required',
            'tanggal' => 'required'
        ]);

        $porto->update([
            'nama_porto' => $request->nama_porto,
            'tanggal' => $request->tanggal
        ]);

        return redirect()->route('dashboardPorto')->with('success', 'Barang Berhasil Terupdate');
    }

    public function deletePorto($id_portofolio)
    {
        $porto = Portofolio::where('id_portofolio', $id_portofolio)->first();
        $porto->delete();

        return redirect('dashporto');
    }

    public function formBarang()
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

        $path = $request->file('foto')->store('storage', 'public');

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
        return redirect('dashprod');
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        if ($request->hasFile('foto')) {
            if ($barang->foto) {
                Storage::delete('public/' . $barang->foto);
            }

            $path = $request->file('foto')->store('public');
            $filename = basename($path);

            $barang->foto = $filename;
        }

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'keterangan' => $request->keterangan,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'stok' => $request->stok,
            'satuan' => $request->satuan,
            'kategori' => $request->kategori,
            'foto'
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

        return redirect('dashprod');
    }

    public function detail($id_barang) {
        $barang = Barang::where('id_barang', $id_barang)->first();
        return view('dashboard-detail', compact('barang'));
    }

    public function formBerita(){
        return view('formnews');
    }

    public function tambahBerita(Request $request){
        $request->validate([
            'judul' => 'required',
            'foto1' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'foto2' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'foto3' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'berita' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required'
        ]);

        $path1 = $request->file('foto1')->store('storage', 'public');
        $path2 = $request->file('foto2') ? $request->file('foto2')->store('storage', 'public') : null;
        $path3 = $request->file('foto3') ? $request->file('foto3')->store('storage', 'public') : null;

        Berita::create([
            'judul' => $request->judul,
            'foto1' => $path1,
            'foto2' => $path2,
            'foto3' => $path3,
            'berita' => $request->berita,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal
        ]);
        return redirect('dashnews');
    }

    public function updateBerita(Request $request, $id_berita)
    {
        $berita = Berita::where('id_berita', $id_berita)->first();

        $request->validate([
            'judul' => 'required',
            'foto1' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'foto2' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'foto3' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'berita' => 'required',
            'penulis' => 'required',
            'tanggal' => 'required'
        ]);

        if ($request->hasFile('foto1')) {
            if ($berita->foto1) {
                Storage::delete('public/' . $berita->foto1);
            }

            $path1 = $request->file('foto1')->store('public');
            $filename1 = basename($path1);

            $berita->foto1 = $filename1;
        }

        if ($request->hasFile('foto2')) {
            if ($berita->foto2) {
                Storage::delete('public/' . $berita->foto2);
            }

            $path2 = $request->file('foto2')->store('public');
            $filename2 = basename($path2);

            $berita->foto2 = $filename2;
        }

        if ($request->hasFile('foto3')) {
            if ($berita->foto3) {
                Storage::delete('public/' . $berita->foto3);
            }

            $path3 = $request->file('foto3')->store('public');
            $filename3 = basename($path3);

            $berita->foto3 = $filename3;
        }

        $barang->update([
            'judul' => $berita->judul,
            'foto1' => $path1,
            'foto2' => $path2,
            'foto3' => $path3,
            'berita' => $berita->berita,
            'penulis' => $berita->penulis,
            'tanggal' => $berita->tanggal
        ]);

        return redirect()->route('news.dashdetail', ['id' => $berita->id_berita])->with('success', 'Berita Berhasil Terupdate');
    }

    public function editBerita($id_berita)
    {
        $berita = Berita::where('id_berita', $id_berita)->first();
        return view('form-edit-news', compact('berita'));
    }

    public function deleteBerita($id_berita){
        $berita = Berita::where('id_berita', $id_berita)->first();
        $berita->delete();

        return redirect('dashnews');
    }

    public function detNews($id_berita) {
        $berita = Berita::where('id_berita', $id_berita)->first();
        $news = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('dashNews', compact('berita', 'news'));
    }
}
