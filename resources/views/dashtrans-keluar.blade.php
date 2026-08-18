@extends('templates.nav-admin')
@section('title', 'Dashboard Transaksi Keluar Barang')

@section('content')
{{-- Tambah Barang --}}
<div class="price-block_one-button text-center">
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <a class="template-btn price-one_button" href="{{ route('dashPenjualan') }}">Kembali</a>
            </div>
            <div class="col-md-8">

            </div>
            <div class="col-md-2">
                <a class="template-btn price-one_button" href="{{ route('formKeluar') }}">Tambah</a>
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="trans-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">BARANG KELUAR</div>
			</div>
			<div class="row clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pengantaran</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                            <tr>
                                <td>{{ (int) $key + 1 }}</td>
                                <td>{{ $item->no_keluar }}</td>
                                <td>{{ $item->no_notajual }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                <td>
                                    <a href="{{ route('keluar.detail', $item->id_no_keluar) }}">
                                        <button class="price-one_button" style="color: black">
                                            <i>Detail</i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

			</div>
		</div>
        <br>
	</section>

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

@endsection
