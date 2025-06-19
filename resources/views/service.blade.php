@extends('templates.navs')

@section('title', 'Service')

@section('content')

	<!-- Page Title -->
    <section class="page-title">
		<div class="page-title-shadow" style="background-image:url(assets/images/main-slider/background-daun-adjust-upscale.jpg)"></div>
        <div class="page-title-shadow" style="background-image:url(assets/images/main-slider/bgservice.png)"></div>
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
        <div class="steps-one_bg" style="background-image:url(assets/images/gallery/gradient_circle_large.png)"></div>
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
                                        <img src="assets/images/gallery/servis7.jpg" alt="" height="300" width="600"/>
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
                                        <img src="assets/images/gallery/gkp1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </section>

@endsection
