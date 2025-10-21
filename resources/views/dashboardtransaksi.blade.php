@extends('templates.nav-admin')
@section('title', 'Dashboard Transaksi')

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
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('request') }}">Request Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('terima') }}">Terima Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('permintaan') }}">Permintaan Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="{{ route('jual') }}">Jual Barang</a>
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="contact-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">TRANSAKSI</div>
			</div>
			<div class="row clearfix">

				<!-- Info Block One -->
				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Total Transaksi Pembelian</h4>
						<h1>35</h1>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Total Transaksi</h4>
						<h1>70</h1>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="trans-block_one col-lg-4 col-md-4 col-sm-12">
					<div class="trans-block_one-inner">
						<h4>Total Transaksi Penjualan</h4>
						<h1>35</h1>
					</div>
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
