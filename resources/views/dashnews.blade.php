@extends('templates.nav-admin')
@section('title', 'Dashboard News Detail')

@section('content')

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br>
        </div>
    </div>
</div>

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
                            <p>{{ $berita->berita }}</p>
                            @if ($berita->foto2)
                                <div class="blog-detail_image-others">
                                    <img src="{{ asset('storage/' . $berita->foto2) }}" alt="" />
                                </div>
                            @endif
                            <br>
                            @if ($berita->foto3)
                                <div class="blog-detail_image-other">
                                    <img src="{{ asset('storage/' . $berita->foto3) }}" alt="" />
                                </div>
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
                                        <h6><a href="{{ route('news.dashdetail', ['id' => $item->id_berita]) }}">{{ $item->judul }}</a></h6>
                                        <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>{{ $item->tanggal }}</div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <div class="team-detail_button">
                                    <a href="{{ route('berita.edit', $berita->id_berita) }}" class="template-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Edit</span>
                                            <span class="text-two">Edit</span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <form action="{{ route('berita.delete', $berita->id_berita) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <div class="team-detail_button">
                                        <button class="template-btn btn-style-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">Delete</span>
                                                <span class="text-two">Delete</span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
@endsection
