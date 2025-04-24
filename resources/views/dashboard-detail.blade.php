@extends('templates.nav-admin')
@section('title', 'Detail Dashboard Product')

@section('content')
<!-- Team Detail -->
<section class="team-detail">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="nav-outer d-flex flex-wrap">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="price-block_one-button text-center">
                        <a class="template-btn price-one_button" href="/dashprod">Back</a>
                    </div>
                </nav>
            </div>

            <!-- Team Block One -->
            <div class="team-detail_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_image-outer">
                    <div class="team-detail_image">
                        <img class="team-detail_image" src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" />
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-detail_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_content-outer">
                    <div class="team-detail_subtitle">Detail</div>
                        <h2 class="team-detail_title">{{ $barang->nama_barang }}</h2>
                        <div class="team-detail_text">{{ $barang->kategori }}</div>
                        <div class="team-detail_subtitle"><span>Spesifikasi</span></div>
                        <div class="team-detail_text">{{ $barang->keterangan }}</div>
                        <div class="team-detail_info-outer">
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Harga Jual
                                        <span>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Harga Beli
                                        <span>Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Stok
                                        <span>{{ $barang->stok }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Satuan
                                        <span>{{ $barang->satuan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="team-detail_button">
                                <a href="{{ route('barang.edit', $barang->id_barang) }}" class="template-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Edit</span>
                                        <span class="text-two">Edit</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <form action="{{ route('barang.delete', $barang->id_barang) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <div class="team-detail_button">
                                    <button class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Delete</span>
                                            <span class="text-two">Delete</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Team Detail -->

@endsection
