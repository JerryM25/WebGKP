@extends('templates.nav-admin')
@section('title', 'Detail Transaksi Request Barang')

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
                <a class="template-btn price-one_button" href="{{ route('request') }}">Kembali</a>
                <br class="space">
            </div>
            <div class="col-md-8"></div>
            <div class="col-md-2">
                @if($data->isNotEmpty() && $data->first()->status == 'on going')
                    <form action="{{ route('notabeli.cancel', $data->first()->id_nota_beli) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin Cancel Transaksi?');">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="submit-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">CANCEL PEMBELIAN</span>
                                <span class="text-two">CANCEL PEMBELIAN</span>
                            </span>
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}

<section class="trans-info">
		<div class="auto-container">
            <div class="sec-title style-four centered">
				<div class="sec-title_title">TRANSAKSI PEMBELIAN</div>
			</div>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nomor Nota Beli</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->no_notabeli }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Nama Vendor</h4>
                        <h4 class="sec-title_title2">{{ $data->first()->nama_vendor }}</h4>
                    </div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Tanggal</h4>
                        <h4 class="sec-title_title2">{{ date('d-m-Y', strtotime($data->first()->tanggal)) }}</h4>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4 centered"></div>
                    <div class="col-md-4 centered">
                        <h4 class="sec-title_title1">Status</h4>
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
                    <div class="col-md-4 centered"></div>
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
                                <td>{{ number_format($item->harga_beli) }}</td>
                                <td>{{ number_format($item->total) }}</td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <form action="{{ route('delete.reqbeli', $item->id_req_beli) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="trans-block_one-icon">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('edit.reqbeli', $item->id_req_beli) }}">
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
