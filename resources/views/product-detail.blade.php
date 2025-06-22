@extends('templates.navs')
@section('title', 'Detail Product')

@section('content')

    <section class="page-title">
		<div class="page-title-shadow" style="background-image:url('{{ asset('assets/images/main-slider/bgproduct.png') }}')"></div>
        <div class="auto-container">
			<h2>Our Product</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/">Home</a></li>
				<li><a href="/product">Product</a></li>
                <li>Detail</li>
			</ul>
        </div>
    </section>


    <section class="team-detail">
        <div class="auto-container">
            <div class="row clearfix">

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
                                <!-- Column -->
                                <div class="column col-lg-12 col-md-12 col-sm-12">
                                    {{-- <div class="team-detail_info">
                                        Berat
                                        <span>500 gram</span>
                                    </div> --}}
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
                                    <a href="https://wa.me/+62811292554" target="_blank" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Tanyakan</span>
                                            <span class="text-two">Tanyakan</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
