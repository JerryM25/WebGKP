@extends('templates.nav-admin')
@section('title', 'Dashboard Product')

@section('content')
{{-- Tambah Barang --}}
<div class="price-block_one-button text-center">
    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <a class="template-btn price-one_button" href="/formbarang">Tambah Barang</a><br>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}
{{-- Barang --}}
<section class="team-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Search -->
            <div class="big-column col-lg-12 col-md-12 col-sm-12">
                <div class="footer-newsletter">
                    <div class="product-form">
                        <form method="get" action="/dashboard">
                            <div class="form-group">
                                <label class="label" for="kategori">Filter by Kategori</label>
                                <select class="dropdown" id="kategori" name="kategori" onchange="this.form.submit()">
                                    <option value="">Filter Kategori</option>
                                    <option value="Semua Kategori">Semua Kategori</option>
                                    <option value="Komputer dan Pendukungnya">Komputer dan Pendukungnya</option>
                                    <option value="Server dan Pendukungnya">Server dan Pendukungnya</option>
                                    <option value="Peralatan Kantor dan Pendukungnya">Peralatan Kantor dan Pendukungnya</option>
                                    <option value="Alat Elektronik dan Pendukungnya">Alat Elektronik dan Pendukungnya</option>
                                    <option value="Alat Olahraga">Alat Olahraga</option>
                                    <option value="Alat Pengolahan Sampah">Alat Pengolahan Sampah</option>
                                    <option value="Jasa Sewa Server">Jasa Sewa Server</option>
                                    <option value="Alat Kesehatan">Alat Kesehatan</option>
                                    <option value="Alat Laboratorium">Alat Laboratorium</option>
                                    <option value="Alat Kebakaran">Alat Kebakaran</option>
                                    <option value="Mesin">Mesin</option>
                                    <option value="Alat Musik">Alat Musik</option>
                                    <option value="Furnitur">Furnitur</option>
                                    <option value="Jasa Lainnya">Jasa Lainnya</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <br>
            </div>

            @if($barang->isEmpty())
                    <div class="team-block_one-content">
                        <h3 class="team-block_one-title text-white text-center">Barang Belum Tersedia</h3>
                    </div>
                @else
                    @foreach ($barang as $barang)
                        <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="team-block_one-inner">
                                <div class="team-block_one-image">
                                    <a href="{{ route('dashboard.detail', ['id' => $barang->id_barang]) }}">
                                        <img src="{{ asset('storage/'.$barang->foto) }}" alt="Barang">
                                    </a>
                                </div>
                                <div class="team-block_one-content">
                                    <h4 class="team-block_one-title">
                                        <a href="{{ route('dashboard.detail', ['id' => $barang->id_barang]) }}">{{ $barang->nama_barang }}</a>
                                    </h4>
                                    <div class="team-block_one-designation">{{ $barang->kategori }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            <div class="col-lg-12 col-md-12 col-sm-12">
                <br>
            </div>

        </div>

    </div>
</section>
{{-- End Barang --}}

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script>
    document.getElementById("kategori").addEventListener("change", function () {
        let kategori = this.value;
        let url = new URL(window.location.href);
        if (kategori === "Semua Kategori") {
            url.searchParams.delete("kategori"); // Hapus filter jika memilih Semua Kategori
        } else {
            url.searchParams.set("kategori", kategori);
        }
        window.location.href = url.toString();
    });
</script>

@endsection
