@extends('templates.navs')

@section('title', 'Home')
@section('content')
<section class="slider-one">
    <div class="main-slider swiper-container">
        <div class="swiper-wrapper">

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/bg1.png)"></div>
                <div class="auto-container ">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <div class="slider-one_content col-lg-4 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <img class="slider-one_image" src="assets/images/logo-gkp.png" alt="GKP">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/bg2.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <div class="slider-one_content col-lg-4 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <img class="slider-one_image" src="assets/images/logo-gkp.png" alt="GKP">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide">
                <div class="slider-one_pattern" style="background-image:url(assets/images/main-slider/bg3.png)"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="slider-one_content col-lg-7 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <h1 class="slider-one_heading"><span>CV Glory Karya Perkasa</span></h1>
                                <div class="slider-one_text">To Be With You</div>
                            </div>
                        </div>
                        <div class="slider-one_content col-lg-4 col-md-12 col-sm-12">
                            <div class="slider-one_content-inner">
                                <img class="slider-one_image" src="assets/images/logo-gkp.png" alt="GKP">
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
                    <p class="sec-title_text">Melayani berbagai kebutuhan produk berbasis IT, Kelengkapan kantor, Sekolah dan Stationery. Kami Telah dipercaya sebagai penyedia dalam komoditas perangkat komputer guna melayani Kementrian / Lembaga / Satuan Kerja / Perangkat Daerah / Sekolah / Institusi lainnya.
                        Kami berkomitmen untuk senantiasa memberikan pelayanan, mutu dan harga terbaik kepada semua pelanggan.</p>
                    <p class="sec-title_text">Berdiri Sejak Januari 2012</p>
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

    @if($daftarBerita->isNotEmpty())
    <div class="container mt-5">
        <div class="row g-0 news-container shadow-sm">

            <div class="col-md-8">
                <div class="main-image-wrapper">

                    <img src="{{ asset('storage/'.$daftarBerita[0]->foto1) }}" id="mainNewsImage" alt="Berita Utama">

                    <div class="news-overlay">
                        <div class="news-overlay-title" id="mainNewsTitle">
                            {{ $daftarBerita->judul }}
                        </div>
                        <div class="news-meta" id="mainNewsMeta">
                            <i class="bi bi-person-fill"></i> <span id="metaAuthor">{{ $daftarBerita->penulis }}</span> |
                            <i class="bi bi-calendar-event"></i> <span id="metaDate">{{ $daftarBerita->tanggal }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="news-list-wrapper">
                    @foreach($daftarBerita as $index => $berita)
                        <div class="news-list-item {{ $index === 0 ? 'active-item' : '' }}"
                            onclick="changeNews(this)"
                            data-judul="{{ $berita->judul }}"
                            data-gambar="{{ $berita->foto1 }}"
                            data-penulis="{{ $berita->berita }}"
                            data-tanggal="{{ $berita->tanggal }}">

                            <h6>{{ $berita->judul }}</h6>
                            <div class="news-meta">
                                <i class="bi bi-calendar-event"></i> {{ $berita->tanggal }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @endif
</section>
<!-- End Product One -->

<!-- Choose One -->

<!-- End Choose One -->
<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br><br><br><br><br>
        </div>
    </div>
</div>

<script>
    function changeNews(element) {
        const judul = element.getAttribute('data-judul');
        const gambar = element.getAttribute('data-gambar');
        const penulis = element.getAttribute('data-penulis');
        const tanggal = element.getAttribute('data-tanggal');
        const dilihat = element.getAttribute('data-dilihat');

        document.getElementById('mainNewsTitle').innerText = judul;
        document.getElementById('mainNewsImage').src = gambar;
        document.getElementById('metaAuthor').innerText = penulis;
        document.getElementById('metaDate').innerText = tanggal;
        document.getElementById('metaViews').innerText = dilihat;

        let items = document.querySelectorAll('.news-list-item');
        items.forEach(function(item) {
            item.classList.remove('active-item');
        });

        element.classList.add('active-item');
    }
</script>
@endsection
