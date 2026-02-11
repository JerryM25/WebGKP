@extends('templates.nav-admin')
@section('title', 'Dashboard Customer')

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
				<div class="sec-title_title">CUSTOMER</div>
			</div>
			<div class="row clearfix">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Action</th>
                    </thead>
                    {{-- <tbody>
                        @foreach($b as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a['nomor_terima'] }}</td>
                                <td>{{ $a['deskripsi'] }}</td>
                                <td>{{ $a['status'] }}</td>
                                <td>{{ $a['tanggal'] }}</td>
                                <td>
                                    <a href="">
                                        <button class="trans-block_one-icon">
                                            <i class="bi bi-file-earmark"></i>
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="">
                                            <button class="trans-block_one-icon">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </a>
                                        <a href="">
                                            <button class="trans-block_one-icon">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody> --}}
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
