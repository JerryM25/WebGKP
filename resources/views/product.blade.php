@extends('templates.navs')
@section('title', 'Product')

@section('content')

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-shadow" style="background-image:url(assets/images/main-slider/background-daun-gelap-1.png)"></div>
        <div class="auto-container">
			<h2>Our Product</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/">Home</a></li>
				<li>Product</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Team Two -->
	<section class="team-two">
		<div class="auto-container">
			<div class="row clearfix">
                <!-- Search -->
                <div class="big-column col-lg-12 col-md-12 col-sm-12">
                    <div class="footer-newsletter">
                        <div class="product-form">
                            <form method="get" action="/product">
                                <div class="form-group">
                                    {{-- <span class="icon fa-solid fa-magnifying-glass fa-fw"></span>
                                    <input type="text" name="search-field" value="" placeholder="Search" required> --}}
                                    <label for="Kategori">Filter by Kategori</label>
                                    <select class="dropdown" id="kategori" name="kategori" onchange="this.form.submit()">
                                        <option value="Semua Kategori">Semua Kategori</option>
                                        <option value="Komputer dan Pendukungnya">Komputer dan Pendukungnya</option>
                                        <option value="Server dan Pendukungnya">Server dan Pendukungnya</option>
                                        <option value="Peralatan Kantor dan Pendukungnya">Peralatan Kantor dan Pendukungnya</option>
                                        <option value="Alat Elektronik dan Pendukungnya">Alat Elektronik dan Pendukungnya</option>
                                        <option value="Alat Olahraga">Alat Olahraga</option>
                                        <option value="Alat Pengolahan Sampah">Alat Pengolahan Sampah</option>
                                        <option value="Jasa Sewa Server">Jasa Sewa Server</option>
                                        <option value="Alat Kesehatan">Alat Kesehatan</option>
                                        <option value="Alat Laboratorium">Alat Laboratorium</option>
                                        <option value="Alat Kebakaran">Alat Kebakaran</option>
                                        <option value="Mesin">Mesin</option>
                                        <option value="Alat Musik">Alat Musik</option>
                                        <option value="Furnitur">Furnitur</option>
                                        <option value="Jasa Lainnya">Jasa Lainnya</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <br>
                </div>

                @foreach ($barang as $barang)
                @csrf
                <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <a href="{{ route('product.detail', ['id' => $barang->id_barang]) }}"><img src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" /></a>
                        </div>
                        <div class="team-block_one-content">
                            <h4 class="team-block_one-title"><a href="{{ route('product.detail', ['id' => $barang->id_barang]) }}">{{ $barang->nama_barang }}</a></h4>
                            <div class="team-block_one-designation">{{ $barang->kategori }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <br><br><br><br><br>
                </div>

			</div>

		</div>
	</section>
	<!-- End Team Two -->

@endsection
