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

				<!-- Team Block One -->
				<div class="team-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="team-block_one-inner">
						<div class="team-block_one-image">
							<a href="/detailproduct"><img src="assets/images/resource/team-1.jpg" alt="" /></a>
						</div>
						<div class="team-block_one-content">
							<h4 class="team-block_one-title"><a href="/detailproduct">Elliot S. Acevedo</a></h4>
							<div class="team-block_one-designation">Founder</div>
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
							<h4 class="team-block_one-title"><a href="/detailproduct">Ronald Richards</a></h4>
							<div class="team-block_one-designation">Founder</div>
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
							<h4 class="team-block_one-title"><a href="/detailproduct">Guy Hawkins</a></h4>
							<div class="team-block_one-designation">Founder</div>
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
							<h4 class="team-block_one-title"><a href="/detailproduct">Albert Flores</a></h4>
							<div class="team-block_one-designation">Founder</div>
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
							<h4 class="team-block_one-title"><a href="/detailproduct">Jacob Jones</a></h4>
							<div class="team-block_one-designation">Founder</div>
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
							<h4 class="team-block_one-title"><a href="/detailproduct">Robert Fox</a></h4>
							<div class="team-block_one-designation">Founder</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Team Two -->

	<!-- Mitra -->
	<section class="clients-two style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Mitra Kami</div>
			</div>
			<div class="clients_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href=""><img src="assets/images/clients/epson.svg" alt="" height="50" width="65"/></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href=""><img src="assets/images/clients/tp-link.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href=""><img src="assets/images/clients/microsoft.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href=""><img src="assets/images/clients/acer.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href=""><img src="assets/images/clients/fargo.svg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Mitra -->

@endsection
