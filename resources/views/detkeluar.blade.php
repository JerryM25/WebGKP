@extends('templates.nav-admin')
@section('title', 'Detail Keluar Barang')

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
                <a class="template-btn price-one_button" href="{{ route('keluar') }}">Kembali</a>
            </div>
            <div class="col-md-10"></div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="trans-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">DETAIL BARANG KELUAR</div>
			</div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nomor Keluar</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->no_keluar }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nama Customer</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->nama_customer }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Tanggal Barang Keluar</h4>
                        <h4 class="sec-title_title2">{{ date('d-m-Y', strtotime($data->first()->tanggal)) }}</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3 centered">
                    </div>
                    <div class="col-md-3 centered">
                        <h4 class="sec-title_title1">Nota Jual</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->no_notajual }}</h4>
                    </div>
                    <div class="col-md-3 centered">
                        <h4 class="sec-title_title1">Status Nota Jual</h4>
                        @if($data->first()->status == 'on going')
                            <span class="badge-status badge-warning">On Going</span>
                        @elseif($data->first()->status == 'cancel')
                            <span class="badge-status badge-danger">Cancel</span>
                        @elseif($data->first()->status == 'selesai')
                            <span class="badge-status badge-success">Selesai</span>
                            @elseif($data->first()->status == 'retur')
                            <span class="badge-status badge-primary">Retur</span>
                        @endif
                    </div>
                </div>
                <br>
            </div>
			<div class="row clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Quantity Penjualan</th>
                            <th>Quantity Pengiriman</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->qty }}</td>
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
