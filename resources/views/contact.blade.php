@extends('templates.navs')
@section('title', 'Contact')

@section('content')

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-icon" style="background-image:url(assets/images/icons/page-title_icon-1.png)"></div>
		<div class="page-title-icon-two" style="background-image:url(assets/images/icons/page-title_icon-2.png)"></div>
		<div class="page-title-shadow" style="background-image:url(assets/images/background/page-title-1.png)"></div>
		<div class="page-title-shadow_two" style="background-image:url(assets/images/background/page-title-2.png)"></div>
        <div class="auto-container">
			<h2>Our Contact</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/">Home</a></li>
				<li>Contact</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Info -->
	<section class="contact-info">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-phone"></i>
						</div>
						<h4>Call us on</h4>
						<a href="https://wa.me/+6283131139933">0831 3113 9933</a> <br>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one active col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-envelope"></i>
						</div>
						<h4>Email us</h4>
						<a href="">glorykaryaperkasa@gmail.com</a> <br>
					</div>
				</div>

				<!-- Info Block One -->
				<div class="info-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="info-block_one-inner">
						<div class="info-block_one-icon">
							<i class="icon-map"></i>
						</div>
						<h4>Our location</h4>
						<a href="https://maps.app.goo.gl/jKxhCBEgbQbrzAWg7">Jl. Nogosari No.2, RW.08, Kadipaten, Kecamatan Kraton, <br>Kota Yogyakarta, Daerah Istimewa Yogyakarta</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Faq One -->

	<!-- Team Detail Form -->
	<section class="team-detail_form">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<!-- Sec Title -->
					<div class="sec-title style-four">
						<div class="sec-title_title">Find Us</div>
						<h2 class="sec-title_heading">Find us on</h2>
						<div class="sec-title_text">Jl. Nogosari No.2, RW.08, Kadipaten, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta</div>
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Detail Form -->

	<!-- Map One -->
	<section class="map-one">
		<div class="auto-container">
			<div class="map-one_map">
				<iframe width="820" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=18&ie=UTF8&iwloc=&output=embed"></iframe>
			</div>
		</div>
	</section>
	<!-- End Map One -->

@endsection
