@extends('templates.nav-admin')
@section('title', 'Detail Transaksi Permintaan Barang')

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
                <a class="template-btn price-one_button" href="{{ route('permintaan') }}">Kembali</a>
                <br class="space">
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
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nomor Nota Jual</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->no_notajual }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nama Customer</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->nama_customer }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Tanggal</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->tanggal }}</h4>
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
                            <th>Quantity</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->harga_jual) }}</td>
                                <td>{{ number_format($item->total) }}</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('delete.reqjual', $item->id_req_jual) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="trans-block_one-icon">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('edit.reqjual', $item->id_req_jual) }}">
                                            <button class="trans-block_one-icon">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                    </div>
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
