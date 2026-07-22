@extends('templates.nav-admin')
@section('title', 'Dashboard Stok Barang')

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
                <a class="template-btn price-one_button" href="{{ route('dashboardTransaksi') }}">Kembali</a>
            </div>
            <div class="col-md-8">

            </div>
            <div class="col-md-2">
                <a class="template-btn price-one_button" href="">Tambah</a>
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="trans-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">STOK BARANG</div>
			</div>
			<div class="row clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stok as $stok)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $stok['nama_barang'] }}</td>
                                <td>{{ $stok['stok'] }}</td>
                                <td>Rp {{ number_format($stok['harga_beli']) }}</td>
                                <td>Rp {{ number_format($stok['harga_jual']) }}</td>
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
