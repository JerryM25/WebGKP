@extends('templates.navs')
@section('title', 'Portofolio')

@section('content')
<section class="page-title">
    <div class="page-title-shadow" style="background-image:url(assets/images/main-slider/background-daun-adjust-upscale.jpg)"></div>
    <div class="auto-container">
        <h2>Portofolio</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Portofolio</li>
        </ul>
    </div>
</section>

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br>
        </div>
    </div>
</div>

<section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="sidebar-side d-flex justify-content-center">
                    <aside class="sidebar col-lg-6 col-md-12 col-sm-12">
                        <div class="sidebar-inner">
                            <div class="sidebar-widget post-widget">
                                <div class="widget-content">
                                    <h5 class="sidebar-widget_title text-center">Portofolio</h5>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan Alat Rekam KTPel DISDUKCAPIL Kabupaten Brebes</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2018-10-24</div>
                                    </div>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan Peralatan Pelayanan DISDUKCAPIL Kabupaten Boyolali</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2020-07-01</div>
                                    </div>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan Alat Rekam DISDUKCAPIL Kabupaten Brebes</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2020-10-22</div>
                                    </div>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan ATK Rumah Sakit Sardjito</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2022-01-12</div>
                                    </div>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan Printer Evolis DISDUKCAPIL Kota Semarang</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2022-07-19</div>
                                    </div>
                                    <div class="post">
                                        <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                        <h6 class="text-white">Pengadaan Server BPKAD Provinsi Maluku Utara</h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>2022-12-16</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="choose-one">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="sec-title_title">Customer Kami</div>
            </div>
            <div class="row clearfix">

                <div class="clients_slider swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="client-image-home">
                                <img src="assets/images/icons/soerojo.png" alt="" />
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="client-image-home">
                                <img src="assets/images/clients/pemkab sleman.png" alt="" />
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="client-image-home">
                                <img src="assets/images/clients/oku.png" alt="" />
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="client-image-home">
                                <img src="assets/images/clients/kotaJogja.png" alt="" />
                            </div>
                        </div>

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="client-image-home">
                                <img src="assets/images/clients/kominfo.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br><br><br><br>
        </div>
    </div>
</div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
