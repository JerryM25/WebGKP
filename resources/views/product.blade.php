@extends('templates.navs')
@section('title', 'Product')

@section('content')

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-icon" style="background-image:url(assets/images/icons/page-title_icon-1.png)"></div>
		<div class="page-title-icon-two" style="background-image:url(assets/images/icons/page-title_icon-2.png)"></div>
		<div class="page-title-shadow" style="background-image:url(assets/images/background/page-title-1.png)"></div>
		<div class="page-title-shadow_two" style="background-image:url(assets/images/background/page-title-2.png)"></div>
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
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                </div>
                <!-- Search -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="footer-newsletter">
                        <div class="newsletter-box">
                            <form method="post" action="/caribarang">
                                <div class="form-group">
                                    <span class="icon fa-solid fa-magnifying-glass fa-fw"></span>
                                    <input type="text" name="search-field" value="" placeholder="Search" required>
                                    <button type="submit" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Search</span>
                                            <span class="text-two">Search</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <br>
                </div>

                {{-- @if ($barang -> num_rows > 0)
                @foreach ($barang as $row)
                    <!-- Team Block One -->
                <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image">
                            <a href="/detailproduct"><img src="assets/images/resource/team-1.jpg" alt="" /></a>
                        </div>
                        <div class="team-block_one-content">
                            <h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
                            <div class="team-block_one-designation">Kategori</div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else --}}

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-1.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-2.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-3.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-4.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-5.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-6.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Nama Barang</a></h4>
							<div class="team-block_one-designation">Kategori</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Team Two -->

@endsection
