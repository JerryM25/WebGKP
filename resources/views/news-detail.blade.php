@extends('templates.navs')
@section('title', 'News')

@section('content')
<section class="page-title">
    <div class="page-title-shadow" style="background-image:url({{ asset('assets/images/main-slider/bgabout.png') }})"></div>
    <div class="auto-container">
        <h2>Detail News</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/news">News</a></li>
            <li>Detail News</li>
        </ul>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                    <div class="blog-detail_inner">
                        <div class="blog-detail_image">
                            <img src="{{ asset('storage/' . $berita->foto1) }}" alt="" />
                        </div>
                        <div class="blog-detail_content">
                            <h3 class="blog-detail_heading">{{ $berita->judul }}</h3>
                            <div class="blog-detail_author-outer d-flex align-items-center flex-wrap">
                                <ul class="blog-detail-author d-flex align-items-center flex-wrap">
                                    <li><span class="icon fa-regular fa-user fa-fw"></span></li>
                                    <i>By {{ $berita->penulis }}</i>
                                </ul>
                                <ul class="blog-detail-meta d-flex align-items-center flex-wrap">
                                    <li><span class="icon fa-regular fa-calendar fa-fw"></span>{{ $berita->tanggal }}</li>
                                </ul>
                            </div>
                            <p class="blog-detail_text">{{ $berita->berita }}</p>
                            @if ($berita->foto2)
                                <div class="blog-detail_image-others">
                                    <img src="{{ asset('storage/' . $berita->foto2) }}" alt="" />
                                </div>
                                <br><br>
                            @endif
                            @if ($berita->foto3)
                                <div class="blog-detail_image-others">
                                    <img src="{{ asset('storage/' . $berita->foto3) }}" alt="" />
                                </div>
                                <br><br>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">

                        <!-- Post Widget -->
                        <div class="sidebar-widget post-widget">
                            <div class="widget-content">
                                <h5 class="sidebar-widget_title">Latest post</h5>

                                @foreach ($news->take(5) as $item)
                                    <div class="post">
                                        <div class="thumb"><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}"><img src="{{ asset('storage/'.$item->foto1) }}" alt=""></a></div>
                                        <h6 class="sidebar-widget_text"><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}">{{ $item->judul }}</a></h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>{{ $item->tanggal }}</div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
