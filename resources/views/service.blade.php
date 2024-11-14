@extends('templates.navs')

@section('title', 'Service')

@section('content')

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-icon" style="background-image:url(assets/images/icons/page-title_icon-1.png)"></div>
		<div class="page-title-icon-two" style="background-image:url(assets/images/icons/page-title_icon-2.png)"></div>
		<div class="page-title-shadow" style="background-image:url(assets/images/background/page-title-1.png)"></div>
		<div class="page-title-shadow_two" style="background-image:url(assets/images/background/page-title-2.png)"></div>
        <div class="auto-container">
			<h2>Our Service</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="/">Home</a></li>
				<li>Service</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="steps-one">
        <div class="steps-one_bg" style="background-image:url(assets/images/background/step-1_bg.png)"></div>
        <div class="steps-one_icon" style="background-image:url(assets/images/icons/step.png)"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="circle-layer"></div>
                <div class="dots-layer">
                    <span class="dot-one"></span>
                    <span class="dot-two"></span>
                </div>

                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title_title">Our Services</div>
                    <h2 class="sec-title_heading">Kami memberikan <br> <span>pelayanan terbaik</span><br><br><br></h2>
                </div>
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">02</div>
                                <h5 class="step-block_one-title">Product Quality</h5>
                                <div class="step-block_one-text">Kami memberikan produk dengan Kualitas Terbaik</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="assets/images/gallery/product.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">01</div>
                                <h5 class="step-block_one-title">Jasa Service</h5>
                                <div class="step-block_one-text">Melayani jasa service dengan teknisi berpengalaman <br>Authorize Service Center</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="assets/images/gallery/service.jpg" alt="" height="300" width="300"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step Block One -->
                        <div class="step-block_one">
                            <div class="step-block_one-inner">
                                <div class="step-block_one-steps">03</div>
                                <h5 class="step-block_one-title">Shipment</h5>
                                <div class="step-block_one-text">Kami menjamin pengiriman barang ke seluruh Indonesis terkirim dengan Aman dan Cepat</div>
                                <div class="step-block_one-content">
                                    <div class="image">
                                        <img src="assets/images/gallery/shipment.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authorize Service -->
	<section class="clients-two style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="sec-title_title">Authorize Service</div>
			</div>
			<div class="clients_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href="#"><img src="assets/images/clients/epson.svg" alt="" height="50" width="65"/></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href="#"><img src="assets/images/clients/tp-link.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href="#"><img src="assets/images/clients/microsoft.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href="#"><img src="assets/images/clients/acer.svg" alt="" /></a>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<div class="client-image">
							<a href="#"><img src="assets/images/clients/fargo.svg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Authorize Service -->

@endsection
