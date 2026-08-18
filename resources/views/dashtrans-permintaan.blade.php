@extends('templates.nav-admin')
@section('title', 'Dashboard Transaksi Permintaan Penjualan')

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
                <a class="template-btn price-one_button" href="{{ route('reqJual') }}">Tambah</a>
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="trans-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">TRANSAKSI</div>
			</div>
			<div class="row clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Nota Jual</th>
                            <th>Tanggal</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->no_notajual }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
                                <td>{{ $item->nama_customer }}</td>
                                <td>{{ number_format($item->grandtotal) }}</td>
                                <td>
                                    @if($item->status == 'on going')
                                        <span class="badge-status badge-warning">On Going</span>
                                    @elseif($item->status == 'cancel')
                                        <span class="badge-status badge-danger">Cancel</span>
                                    @elseif($item->status == 'selesai')
                                        <span class="badge-status badge-success">Selesai</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('detail.per', $item->id_nota_jual) }}">
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
