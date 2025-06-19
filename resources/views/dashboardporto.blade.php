@extends('templates.nav-admin')
@section('title', 'Dashboard Portofolio')

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
            <a class="template-btn price-one_button" href="/formporto">Tambah Portofolio</a><br>
        </div>
    </div>

    <section>
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="sidebar-side d-flex justify-content-center">
                        <aside class="sidebar col-lg-8 col-md-12 col-sm-12">
                            <div class="sidebar-inner">
                                <div class="sidebar-widget post-widget">
                                    <div class="widget-content">
                                        <h5 class="sidebar-widget_title text-center">Portofolio</h5>
                                        @if($porto->isEmpty())
                                            <div class="team-block_one-content">
                                                <h3 class="team-block_one-title text-white text-center">Portofolio Belum Tersedia</h3>
                                            </div>
                                        @else
                                            @foreach ($porto as $porto)
                                                <div class="post">
                                                    <div class="thumb"><i class="bi bi-geo" style="font-size: 50px; color: var(--main-color)"></i></div>
                                                    <h6 class="text-white">{{ $porto->nama_porto }}</h6>
                                                    <div class="post-date"><i class="fa-regular fa-calendar fa-fw"></i>{{ $porto->tanggal }}</div>
                                                    <br>
                                                    <div class="d-flex gap-2">
                                                        <div class="team-detail_button">
                                                            <a href="{{ route('porto.edit', $porto->id_portofolio) }}" class="template-btn btn-style-one">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Edit</span>
                                                                    <span class="text-two">Edit</span>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <form action="{{ route('porto.delete', $porto->id_portofolio) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
    </section>

@endsection
