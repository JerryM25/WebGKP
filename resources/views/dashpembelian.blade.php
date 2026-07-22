@extends('templates.nav-admin')
@section('title', 'Dashboard Transaksi Pembelian')

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
            <div class="col-md-1">
                <a class="template-btn price-one_button" href="{{ route('dashboardTransaksi') }}">Back</a>
            </div>
            <div class="col-md-11">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('request') }}">Request Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('terima') }}">Terima Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('vend.dash') }}">Vendor</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('stok.dash') }}">Stok</a>
            </div>
        </div>
        <br>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="contact-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">TRANSAKSI PEMBELIAN</div>
			</div>
            <div class="row clearfix">
                <div class="footer-newsletter col-lg-2 col-md-2 col-sm-12">
					<div class="product-form">
                        <form method="get" action="{{ route('dashPembelian') }}">
                            <div class="form-group">
                                <label class="label" for="tahun">Tahun</label>
                                <select name="tahun" class="form-control" onchange="this.form.submit()">
                                    @foreach($listTahun as $item)
                                        <option value="{{ $item }}"
                                            {{ $tahun == $item ? 'selected' : '' }}>
                                            {{ $item }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
					</div>
				</div>
            </div>
            <br>
			<div class="row clearfix">
				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Transaksi On Going</h4>
						<h1>{{ $ongoing }}</h1>
					</div>
				</div>

				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Transaksi Selesai</h4>
						<h1>{{ $selesai }}</h1>
					</div>
				</div>

				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Transaksi Cancel</h4>
						<h1>{{ $cancel }}</h1>
					</div>
				</div>
			</div>
            <div class="row clearfix">
				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
				</div>

				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Total Transaksi Pembelian</h4>
						<h1>{{ $notabeli }}</h1>
					</div>
				</div>

				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
				</div>
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
