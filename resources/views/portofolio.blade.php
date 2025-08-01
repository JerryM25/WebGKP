@extends('templates.navs')
@section('title', 'Portofolio')

@section('content')
<section class="page-title">
    <div class="page-title-shadow" style="background-image:url(assets/images/main-slider/bgabout.png)"></div>
    <div class="auto-container">
        <h2>Portofolio</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li>Portofolio</li>
        </ul>
    </div>
</section>

{{-- <section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="sidebar-side d-flex justify-content-center">
                    <aside class="sidebar col-lg-6 col-md-12 col-sm-12">
                        <div class="sidebar-inner">
                            <div class="sidebar-widget post-widget">
                                <div class="widget-content">
                                    <h5 class="sidebar-widget_title text-center">Portofolio</h5><br>
                                    @if($porto->isEmpty())
                                        <div class="team-block_one-content">
                                            <h3 class="team-block_one-title text-white text-center">Portofolio Belum Tersedia</h3>
                                        </div>
                                    @else
                                        @foreach ($porto as $porto)
                                            <div class="post">
                                                <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                                <h6 class="porto-block_one-title text-white">{{ $porto->nama_porto }}</h6>
                                                <div class="porto-block_one-date post-date"><i class="fa-regular fa-calendar fa-fw"></i>{{ $porto->tanggal }}</div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br>
        </div>
    </div>
</div>

<section class="choose-one">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <div class="sec-title_title">Customer Kami</div>
                <br>
            </div>
            <div class="row clearfix">
                <img src="assets/images/gallery/cakupan.png" alt="">
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
