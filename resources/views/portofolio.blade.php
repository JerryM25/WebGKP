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
