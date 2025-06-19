@extends('templates.navs')

@section('title', 'Home')
@section('content')
<section class="slider-one">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/home1.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">

                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
                                <div class="slider-one_author">
                                    <i><img src="assets/images/logo-removebg.png" alt="" width="250" height="250"/></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/home2.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">

                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
                                <div class="slider-one_author">
                                    <i><img src="assets/images/logo-removebg.png" alt="" width="250" height="250"/></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/home3.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">

                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <!-- Image Column -->
                        <div class="slider-one_image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="slider-one_pattern-three" style="background-image:url(assets/images/main-slider/pattern-3.png)"></div>
                            <div class="slider-one_image-outer">
                                <!-- Slider One Author -->
                                <div class="slider-one_author">
                                    <i><img src="assets/images/logo-removebg.png" alt="" width="250" height="250"/></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Main Slider Section -->

<!-- Services One -->
<section class="services-one">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="sec-title_title">Our Service</div>
            <h2 class="sec-title_heading">Kami Melayani</h2>
        </div>
        <div class="row clearfix">

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <img src="assets/images/icons/wrench.svg" alt="">
                    </div>
                    <h5 class="service-block_one-heading"><a href="/service">Service</a></h5>
                    <div class="service-block_one-text"><span>Melayani jasa service dengan teknisi berpengalaman <br>Authorize Service Center</span></div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">01</div>
                        <a class="service-block_one-join" href="/service">Detail <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <img src="assets/images/icons/printer.svg" alt="">
                    </div>
                    <h5 class="service-block_one-heading"><a href="/service">Product Quality</a></h5>
                    <div class="service-block_one-text"><span>Kami memberikan produk dengan <br>Kualitas Terbaik</span></div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">02</div>
                        <a class="service-block_one-join" href="/service">Detail <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Block One -->
            <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-block_one-icon">
                        <img src="assets/images/icons/box.svg" alt="">
                    </div>
                    <h5 class="service-block_one-heading"><a href="/service">Shipment</a></h5>
                    <div class="service-block_one-text"><span>Kami menjamin pengiriman barang ke seluruh Indonesis terkirim dengan<br>Aman dan Cepat</span></div>
                    <div class="lower-box d-flex justify-content-between align-items-center flex-wrap">
                        <div class="service-block_one-number">03</div>
                        <a class="service-block_one-join" href="/service">Detail <i class="fa-solid fa-plus fa-fw"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services One -->

<!-- About One -->
<section class="about-one">
    <div class="about-one_pattern" style="background-image:url(assets/images/gallery/dark_gradient_circle.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Tab Column -->
            <div class="about-one_tab-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_tab-outer">
                    <div class="about-one_tab-shadow" style="background-image:url(assets/images/background/tab-shadow.png)"></div>
                    <div class="about-one_tab-image">
                        <img class="rounded" src="assets/images/gallery/kantor_GKP1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <!-- Tab Column -->
            <div class="about-one_content-column col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="about-one_content-outer">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="sec-title_title">About us</div>
                        <h2 class="sec-title_heading">CV. GLORY KARYA PERKASA</h2>
                    </div>
                    <p>Melayani berbagai kebutuhan produk berbasis IT, Kelengkapan kantor, Sekolah dan Stationery. Kami Telah dipercaya sebagai penyedia dalam komoditas perangkat komputer guna melayani kementrian/Lembaga/satuan kerja/perangkat daerah/Sekolah/Institusi lainnya.
                        Manajemen kami berkomitmen untuk senantiasa memberikan pelayanan,mutu dan harga terbaik kepada semua pelanggan kami.</p>
                    <p>Berdiri Sejak Januari 2012</p>
                    <div class="about-one_options d-flex align-items-center flex-wrap">
                        <a href="/about" class="template-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">Detail</span>
                                <span class="text-two">Detail</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About One -->

<!-- Product One -->
<section class="price-one">

    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">Our Product</div>
            </div>
            <div class="pricing-tabs tabs-box">

                <!--Tabs Container-->
                <div class="tabs-content">

                    <!-- Tab -->
                    <div class="tab active-tab" id="prod-monthly">
                        <div class="content">
                            <div class="row clearfix">

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Printer</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/2.png" alt="Printer">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Computer</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/1.png" alt="Computer">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Price Block One -->
                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Electronic</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/3.png" alt="Electronic">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Server</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/6.png" alt="Server">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Musical Instrument</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/4.png" alt="Alat Musik">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Sports Equipment</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/7.png" alt="Alat Olahraga">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Medical Equipment</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/5.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="price-block_one col-lg-3 col-md-4 col-sm-12">
                                    <div class="price-block_one-inner">
                                        <div class="price-block_one-title text-center">Furniture</div>
                                        <div class="price-block_one-content">
                                            <div class="text-center">
                                                <img class="rounded" src="assets/images/gallery/8.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="price-block_one-button text-center">
                        <a class="template-btn price-one_button" href="/product">Lihat Barang Lainnya</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Product One -->

<!-- Choose One -->

<!-- End Choose One -->
<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br><br><br><br>
        </div>
    </div>
</div>
@endsection
