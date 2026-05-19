<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\akun;
use App\barang as Barang;
use App\detailbarang as Detailbarang;
use App\nokeluar as Nokeluar;
use App\noterima as Noterima;
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

    public function dashboardTransaksi(Request $request)
    {
        return view('dashboardtransaksi');
    }

    public function dashtransreq()
    {
        $data = DB::table('reqbeli')
        ->join('notabeli', 'reqbeli.id_nota_beli', '=', 'notabeli.id_nota_beli')
        ->join('vendor', 'notabeli.id_vendor', '=', 'vendor.id_vendor')
        ->select(
            'reqbeli.id_nota_beli',
            'notabeli.no_notabeli',
            'notabeli.tanggal',
            'vendor.nama_vendor',
            DB::raw('SUM(reqbeli.total) as grandtotal')
        )
        ->groupBy(
            'reqbeli.id_nota_beli',
            'notabeli.no_notabeli',
            'notabeli.tanggal',
            'vendor.nama_vendor'
        )
        ->get();

        return view('dashtrans-request', compact('data'));
    }

    public function detailtransreq($id_nota_beli)
    {
        $data = DB::table('reqbeli')
        ->join('notabeli', 'reqbeli.id_nota_beli', '=', 'notabeli.id_nota_beli')
        ->join('vendor', 'notabeli.id_vendor', '=', 'vendor.id_vendor')
        ->join('barang', 'reqbeli.id_barang', '=', 'barang.id_barang')
        ->select(
            'reqbeli.*',
            'notabeli.no_notabeli',
            'notabeli.tanggal',
            'vendor.nama_vendor',
            'barang.nama_barang',
        )
        ->where('reqbeli.id_nota_beli', $id_nota_beli)
        ->get();

        return view('detailtrans-req', compact('data'));
    }

    public function dashtranster(Request $request)
    {
        return view('dashtrans-terima');
    }

    public function dashtransper(Request $request)
    {
        $data = DB::table('reqjual')
        ->join('notajual', 'reqjual.id_nota_jual', '=', 'notajual.id_nota_jual')
        ->join('customer', 'notajual.id_customer', '=', 'customer.id_customer')
        ->select(
            'reqjual.id_nota_jual',
            'notajual.no_notajual',
            'notajual.tanggal',
            'customer.nama_customer',
            DB::raw('SUM(reqjual.total) as grandtotal')
        )
        ->groupBy(
            'reqjual.id_nota_jual',
            'notajual.no_notajual',
            'notajual.tanggal',
            'customer.nama_customer'
        )
        ->get();

        return view('dashtrans-permintaan', compact('data'));
    }

    public function detailtransper($id_nota_jual)
    {
        $data = DB::table('reqjual')
        ->join('notajual', 'reqjual.id_nota_jual', '=', 'notajual.id_nota_jual')
        ->join('customer', 'notajual.id_customer', '=', 'customer.id_customer')
        ->join('barang', 'reqjual.id_barang', '=', 'barang.id_barang')
        ->select(
            'reqjual.*',
            'notajual.no_notajual',
            'notajual.tanggal',
            'customer.nama_customer',
            'barang.nama_barang',
        )
        ->where('reqjual.id_nota_jual', $id_nota_jual)
        ->get();

        return view('detailtrans-per', compact('data'));
    }

    public function dashtransjual(Request $request)
    {
        $b = [
            ['nomor_keluar' => 'GKP/OUT/0001', 'deskripsi' => 'Permintaan 10 unit alat tulis', 'status' => 'Menunggu', 'tanggal' => '2025-10-10'],
            ['nomor_keluar' => 'GKP/OUT/0002', 'deskripsi' => 'Permintaan 5 unit printer', 'status' => 'Disetujui', 'tanggal' => '2025-10-09'],
            ['nomor_keluar' => 'GKP/OUT/0003', 'deskripsi' => 'Permintaan 20 rim kertas A4', 'status' => 'Diproses', 'tanggal' => '2025-10-08'],
            ['nomor_keluar' => 'GKP/OUT/0004', 'deskripsi' => 'Permintaan 3 unit laptop', 'status' => 'Menunggu', 'tanggal' => '2025-10-07'],
            ['nomor_keluar' => 'GKP/OUT/0005', 'deskripsi' => 'Permintaan 2 unit proyektor', 'status' => 'Disetujui', 'tanggal' => '2025-10-06'],
            ['nomor_keluar' => 'GKP/OUT/0006', 'deskripsi' => 'Permintaan 50 buku catatan', 'status' => 'Diproses', 'tanggal' => '2025-10-05'],
            ['nomor_keluar' => 'GKP/OUT/0007', 'deskripsi' => 'Permintaan 4 unit monitor', 'status' => 'Ditolak', 'tanggal' => '2025-10-04'],
            ['nomor_keluar' => 'GKP/OUT/0008', 'deskripsi' => 'Permintaan 10 unit mouse', 'status' => 'Menunggu', 'tanggal' => '2025-10-03'],
            ['nomor_keluar' => 'GKP/OUT/0009', 'deskripsi' => 'Permintaan 15 unit keyboard', 'status' => 'Disetujui', 'tanggal' => '2025-10-02'],
            ['nomor_keluar' => 'GKP/OUT/0010', 'deskripsi' => 'Permintaan 1 unit server', 'status' => 'Diproses', 'tanggal' => '2025-10-01'],
        ];
        return view('dashtrans-jual', compact('b'));
    }

    public function dashboardProduct(Request $request)
    {
        $kategori = $request->query('kategori', 'Semua Kategori');
        // $barang = ($kategori == 'Semua Kategori') ? Barang::all() : Barang::where('kategori', $kategori)->get();
        $barang = ($kategori == 'Semua Kategori')
        ? Barang::where('tayang', 1)->get()
        : Barang::where('kategori', $kategori)
                ->where('tayang', 1)
                ->get();
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
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'link' => 'nullable',
            'tayang'=> 'required'
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
            'satuan' => $request->satuan,
            'link' =>$request->link,
            'tayang' =>$request->tayang
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

    public function reqBeli(){
        $vendor = Vendor::all();
        $barang = Barang::all();
        return view('formbeli', compact('vendor', 'barang'));
    }

    public function tambahnotaBeli(Request $request){
        return DB::transaction(function () use ($request) {
            $tanggal = Carbon::parse($request->tanggal);
            $tahun = $tanggal->format('y');
            $bulan = $tanggal->format('m');
            $tahunPenuh = $tanggal->year;

            $lastRecord = Notabeli::whereYear('created_at', $tahunPenuh)
                                    ->lockForUpdate()
                                    ->latest('id_nota_beli')
                                    ->first();

            if ($lastRecord) {
                $lastNumber = intval(substr($lastRecord->no_notabeli, -4));
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }

            $nomorNota = "PO/GKP/" . $tahun . $bulan . "/" . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

            $notabeli = Notabeli::create([
                'id_nota_beli' => $request->id_nota_beli,
                'tanggal' => $request->tanggal,
                'id_vendor' => $request->id_vendor,
                'no_notabeli' => $nomorNota,
            ]);

            $vendor = Vendor::where('id_vendor', $request->id_vendor)->first();
            $barang = Barang::all();

            return back()->with([
                'success_step1' => true,
                'list_barang' => false,
                'id_nota_beli' => $notabeli->id_nota_beli,
                'nama_vendor' => $vendor->nama_vendor,
                'no_notabeli' => $nomorNota,
                'barang' => $barang
            ]);
        });
    }

    public function tambahReqBeli(Request $request){
        $list_barang = session()->get('list_barang', []);

        if (!$list_barang) return back();

        foreach ($list_barang as $item) {
            Reqbeli::create([
                'id_nota_beli' => $item['id_nota_beli'],
                'id_barang'    => $item['id_barang'],
                'quantity'     => $item['quantity'],
                'harga_beli'   => $item['harga'],
                'total'        => $item['total'],
            ]);

            Barang::where('id_barang', $item['id_barang'])
            ->update([
                'harga_beli' => $item['harga'],
            ]);
        }

        session()->forget(['list_barang', 'success_step1']);

        return redirect('/dashtransreq')->with('success', 'Data Berhasil Disimpan!');
    }

    public function simpanItem(Request $request){
        $list_barang = session()->get('list_barang', []);

        $dataBarang = Barang::find($request->id_barang);

        $subtotal = $request->quantity * $request->harga;

        $list_barang[] = [
            'id_nota_beli' => $request->id_nota_beli,
            'id_barang'    => $request->id_barang,
            'nama_barang'  => $dataBarang->nama_barang,
            'quantity'     => $request->quantity,
            'harga'        => $request->harga,
            'total'        => $subtotal
        ];

        $notabeli = Notabeli::where('id_nota_beli', $request->id_nota_beli)->first();
        $barang = Barang::all();

        session()->put('list_barang', $list_barang);
        return back()->with([
                'success_step1' => true,
                'id_nota_beli'  => $request->id_nota_beli,
                'no_notabeli'   => $notabeli ->no_notabeli,
                'nama_vendor'   => $request->nama_vendor,
                'no_nota'       => $request->no_nota,
                'barang'        => $barang
            ]);
    }

    public function deleteReqBeli($id_req_beli){
        $reqbeli = Reqbeli::where('id_req_beli', $id_req_beli)->first();
        $reqbeli->delete();

        return back()->with(['success', 'Data Berhasil Dihapus!']);
    }

    public function formBeliEdit($id_req_beli){
        $reqbeli = Reqbeli::join('barang', 'reqbeli.id_barang', '=', 'barang.id_barang')
        ->select('reqbeli.*', 'barang.nama_barang')
        ->where('id_req_beli', $id_req_beli)
        ->first();
        $barang = Barang::all();

        return view('formbeli-edit', compact('reqbeli', 'barang'));
    }

    public function updateBeli(Request $request, $id_req_beli){
        $reqbeli = Reqbeli::where('id_req_beli', $id_req_beli)->first();

        $total = $request->quantity * $request->harga_beli;

        $request->validate([
            'id_barang'     => 'required',
            'quantity'      => 'required',
            'harga_beli'    => 'required'
        ]);

        $reqbeli->update([
            'id_barang'     => $request->id_barang,
            'quantity'      => $request->quantity,
            'harga_beli'    => $request->harga_beli,
            'total'         => $total
        ]);

        return redirect()->route('detail.req')->with('success', 'Berita Berhasil Terupdate');
    }

    public function formTerima(){
        $reqbeli = Reqbeli::join('notabeli', 'reqbeli.id_nota_beli', '=', 'notabeli.id_nota_beli')
        ->select('reqbeli.*', 'notabeli.no_notabeli')
        ->get();
        return view('formin', compact('reqbeli'));
    }

    public function tambahNoTerima(Request $request){
        return DB::transaction(function () use ($request) {
            $tanggal = Carbon::parse($request->tanggal);
            $tahun = $tanggal->format('y');
            $bulan = $tanggal->format('m');
            $tahunPenuh = $tanggal->year;
            $lastRecord = Noterima::whereYear('created_at', $tahunPenuh)
                                    ->lockForUpdate()
                                    ->latest('id_no_terima')
                                    ->first();
            if ($lastRecord) {
                $lastNumber = intval(substr($lastRecord->no_terima, -4));
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }
            $nomorTerima = "IN/GKP/" . $tahun . $bulan . "/" . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
            $noterima = Noterima::create([
                'id_no_terima' => $request->id_no_terima,
                'tanggal' => $request->tanggal,
                'no_terima' => $nomorTerima
            ]);
            $barang = Barang::all();
            $reqbeli = Reqbeli::where('reqbeli.id_nota_beli', $request->id_nota_beli)
            ->join('notabeli', 'reqbeli.id_nota_beli', '=', 'notabeli.id_nota_beli')
            ->select('reqbeli.*', 'notabeli.no_notabeli')->first();

            return back()->with([
                'success_step1' => true,
                'list_barang'   => false,
                'id_no_terima'  => $noterima->id_no_terima,
                'no_terima'     => $nomorTerima,
                'barang'        => $barang,
                'no_notabeli'   => $reqbeli->no_notabeli,
                'id_nota_beli'  => $reqbeli->id_nota_beli,
                'id_req_beli'   => $reqbeli->id_req_beli
            ]);
        });
    }

    public function tambahTerima(Request $request){
        $list_terima = session()->get('list_terima', []);

        if (!$list_terima) return back();

        foreach ($list_terima as $item) {
            Terima::create([
                'id_no_terima' => $item['id_no_terima'],
                'id_req_beli'  => $item['id_req_beli'],
                'quantity'     => $item['diterima']
            ]);

            Barang::where('id_barang', $item['id_barang'])
            ->increment('stok', (int) $item['diterima']);
        }

        session()->forget(['list_terima', 'success_step1']);

        return redirect('/dashterima')->with('success', 'Data Berhasil Disimpan!');
    }

    public function simpanTerima(Request $request){
        $list_terima = session()->get('list_terima', []);

        $dataBarang = Barang::find($request->id_barang);

        $kekurangan = $request->quantity - $request->diterima;

        $list_terima[] = [
            'id_no_terima' => $request->id_no_terima,
            'id_req_beli'  => $request->id_req_beli,
            'id_barang'    => $request->id_barang,
            'nama_barang'  => $dataBarang->nama_barang,
            'quantity'     => $request->quantity,
            'diterima'     => $request->diterima,
            'kekurangan'   => $kekurangan
        ];

        $reqbeli = Reqbeli::where('reqbeli.id_nota_beli', $request->id_nota_beli)
        ->join('notabeli', 'reqbeli.id_nota_beli', '=', 'notabeli.id_nota_beli')
        ->select('reqbeli.*', 'notabeli.no_notabeli')->first();
        $barang = Barang::all();

        session()->put('list_terima', $list_terima);
        return back()->with([
                'success_step1' => true,
                'id_nota_beli'  => $request->id_nota_beli,
                'no_notabeli'   => $reqbeli->no_notabeli,
                'nama_vendor'   => $request->nama_vendor,
                'no_nota'       => $request->no_nota,
                'barang'        => $barang
            ]);
    }

    public function reqJual(){
        $customer = Customer::all();
        $barang = Barang::all();

        return view('formjual', compact('customer', 'barang'));
    }

    public function tambahnotaJual(Request $request){
        return DB::transaction(function () use ($request) {
            $tanggal = Carbon::parse($request->tanggal);
            $tahun = $tanggal->format('y');
            $bulan = $tanggal->format('m');
            $tahunPenuh = $tanggal->year;

            $lastRecord = Notajual::whereYear('created_at', $tahunPenuh)
                                    ->lockForUpdate()
                                    ->latest('id_nota_jual')
                                    ->first();

            if ($lastRecord) {
                $lastNumber = intval(substr($lastRecord->no_notabeli, -4));
                $newNumber = $lastNumber + 1;
            } else {
                $newNumber = 1;
            }

            $nomorNota = "SO/GKP/" . $tahun . $bulan . "/" . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

            $notajual = Notajual::create([
                'id_nota_jual' => $request->id_nota_jual,
                'tanggal' => $request->tanggal,
                'id_customer' => $request->id_customer,
                'no_notajual' => $nomorNota,
            ]);

            $customer = Customer::where('id_customer', $request->id_customer)->first();
            $barang = Barang::all();

            return back()->with([
                'success_step1' => true,
                'list_barang' => false,
                'id_nota_jual' => $notajual->id_nota_jual,
                'nama_customer' => $customer->nama_customer,
                'no_notajual' => $nomorNota,
                'barang' => $barang
            ]);
        });
    }

    public function tambahReqJual(Request $request){
        $list_barang = session()->get('list_barang', []);

        if (!$list_barang) return back();

        foreach ($list_barang as $item) {
            Reqjual::create([
                'id_nota_jual' => $item['id_nota_jual'],
                'id_barang'    => $item['id_barang'],
                'quantity'     => $item['quantity'],
                'harga_jual'   => $item['harga'],
                'total'        => $item['total'],
            ]);

            Barang::where('id_barang', $item['id_barang'])
            ->update([
                'harga_jual' => $item['harga'],
            ]);
        }

        session()->forget(['list_barang', 'success_step1']);

        return redirect('/dashtransper')->with('success', 'Data Berhasil Disimpan!');
    }

    public function tambahItem(Request $request){
        $list_barang = session()->get('list_barang', []);

        $dataBarang = Barang::find($request->id_barang);

        $subtotal = $request->quantity * $request->harga;

        $list_barang[] = [
            'id_nota_jual' => $request->id_nota_jual,
            'id_barang'    => $request->id_barang,
            'nama_barang'  => $dataBarang->nama_barang,
            'quantity'     => $request->quantity,
            'harga'        => $request->harga,
            'total'        => $subtotal
        ];

        $notajual = Notajual::where('id_nota_jual', $request->id_nota_jual)->first();
        $barang = Barang::all();

        session()->put('list_barang', $list_barang);
        return back()->with([
                'success_step1' => true,
                'id_nota_jual'  => $request->id_nota_jual,
                'no_notajual'   => $notajual ->no_notajual,
                'nama_customer' => $request->nama_customer,
                'no_nota'       => $request->no_nota,
                'barang'        => $barang
            ]);
    }

    public function deleteReqJual($id_req_jual){
        $reqjual = Reqjual::where('id_req_jual', $id_req_jual)->first();
        $reqjual->delete();

        return back()->with(['success', 'Data Berhasil Dihapus!']);
    }

    public function formJualEdit(){
        return view('formnews');
    }

    public function updateJual(Request $request, $id_req_jual){
        $reqjual = Reqjual::where('id_req_jual', $id_req_jual)->first();

        $total = $request->quantity * $request->harga_jual;

        $request->validate([
            'id_barang'     => 'required',
            'quantity'      => 'required',
            'harga_jual'    => 'required'
        ]);

        $reqbeli->update([
            'id_barang'     => $request->id_barang,
            'quantity'      => $request->quantity,
            'harga_jual'    => $request->harga_jual,
            'total'         => $total
        ]);

        return redirect()->route('detail.per')->with('success', 'Berita Berhasil Terupdate');
    }

    public function vendor(){
        $vendor = Vendor::all();
        return view('dashvendor', compact('vendor'));
    }

    public function formVendor(){
        return view('formvendor');
    }

    public function tambahVendor(Request $request){
        $request->validate([
            'nama_vendor' => 'required',
            'nomor_vendor',
            'alamat_vendor'
        ]);

        Vendor::create([
            'nama_vendor' => $request->nama_vendor,
            'nomor_vendor' => $request->nomor_vendor,
            'alamat_vendor' => $request->alamat_vendor
        ]);
        return redirect('dashvendor');
    }

    public function editVendor($id_vendor){
        $vendor = Vendor::where('id_vendor', $id_vendor)->first();
        return view('formvendor-edit', compact('vendor'));
    }

    public function updateVendor(Request $request, $id_vendor)
    {
        $vendor = Vendor::where('id_vendor', $id_vendor)->first();

        $request->validate([
            'nama_vendor' => 'required',
            'nomor_vendor',
            'alamat_vendor'
        ]);

        $vendor->update([
            'nama_vendor' => $request->nama_vendor,
            'nomor_vendor' => $request->nomor_vendor,
            'alamat_vendor' => $request->alamat_vendor
        ]);

        return redirect()->route('vend.dash')->with('success', 'Berita Berhasil Terupdate');
    }

    public function deleteVendor($id_vendor){
        $vendor = Vendor::where('id_vendor', $id_vendor)->first();
        $vendor->delete();

        return redirect('dashvendor');
    }

    public function customer(){
        $customer = Customer::all();
        return view('dashcust', compact('customer'));
    }

    public function formCustomer(){
        return view('formcust');
    }

    public function tambahCustomer(Request $request){
        $request->validate([
            'nama_customer' => 'required',
            'nomor_customer',
            'alamat_customer'
        ]);

        Customer::create([
            'nama_customer' => $request->nama_customer,
            'nomor_customer' => $request->nomor_customer,
            'alamat_customer' => $request->alamat_customer
        ]);
        return redirect('dashcust');
    }

    public function editCustomer($id_customer){
        $customer = Customer::where('id_customer', $id_customer)->first();
        return view('formcust-edit', compact('customer'));
    }

    public function updateCustomer(Request $request, $id_customer)
    {
        $customer = Customer::where('id_customer', $id_customer)->first();

        $request->validate([
            'nama_customer' => 'required',
            'nomor_customer',
            'alamat_customer'
        ]);

        $customer->update([
            'nama_customer' => $request->nama_customer,
            'nomor_customer' => $request->nomor_customer,
            'alamat_customer' => $request->alamat_customer
        ]);

        return redirect()->route('cust.dash', ['id' => $customer->id_customer])->with('success', 'Berita Berhasil Terupdate');
    }

    public function deleteCustomer($id_customer){
        $customer = Customer::where('id_customer', $id_customer)->first();
        $customer->delete();

        return redirect('dashcust');
    }
}
