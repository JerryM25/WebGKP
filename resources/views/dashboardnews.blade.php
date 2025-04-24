@extends('templates.nav-admin')
@section('title', 'Dashboard News')

@section('content')

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br><br><br><br>
        </div>
    </div>
</div>

<div class="price-block_one-button text-center">
    <div class="container-fluid">
        <a class="template-btn price-one_button" href="/formnews">Tambah Berita</a><br>
    </div>
</div>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic">

                    @if($berita->isEmpty())
                        <div class="team-block_one-content">
                            <h3 class="team-block_one-title text-white text-center">Berita Belum Tersedia</h3>
                        </div>
                    @else
                        @foreach ($berita as $item)
                            <div class="news-block_three">
                                <div class="news-block_three-inner">
                                    <div class="news-block_three-image">
                                        <a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}">
                                            <img src="{{ asset('storage/'.$item->foto1) }}" alt="" /></a>
                                    </div>
                                    <div class="news-block_three-content">
                                        <ul class="news-block_three-meta">
                                            <li><i class="fa-regular fa-user fa-fw"></i>{{ $item->penulis }}</li>
                                            <li><i class="fa-regular fa-calendar fa-fw"></i>{{ $item->tanggal }}</li>
                                        </ul>
                                        <h3 class="news-block_three-title"><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}">{{ $item->judul }}</a></h3>
                                        <div class="news-block_three-button">
                                            <a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}" class="template-btn btn-style-one">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Read more</span>
                                                    <span class="text-two">Read more</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    {{-- <!-- Styled Pagination -->
                    <ul class="styled-pagination text-center">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#"><span class="fa-solid fa-angle-right fa-fw"></span></a></li>
                    </ul>
                    <!-- End Styled Pagination --> --}}

                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <div class="sidebar-inner">

                        <div class="sidebar-widget post-widget">
                            <div class="widget-content">
                                <h5 class="sidebar-widget_title">Latest post</h5>

                                @foreach ($news->take(5) as $item)
                                    <div class="post">
                                        <div class="thumb"><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}"><img src="{{ asset('storage/'.$item->foto1) }}" alt=""></a></div>
                                        <h6><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}">{{ $item->judul }}</a></h6>
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
