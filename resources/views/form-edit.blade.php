<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form - Glory Karya Perkasa</title>
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/meanmenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo-removebg.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo-removebg.png') }}" type="image/x-icon">

    <!-- Dropzone JS Lib -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>

    <div class="page-wrapper">

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="txt-loading">
                            <span data-text-preloader="L" class="letters-loading">L</span>
                            <span data-text-preloader="O" class="letters-loading">O</span>
                            <span data-text-preloader="A" class="letters-loading">A</span>
                            <span data-text-preloader="D" class="letters-loading">D</span>
                            <span data-text-preloader="I" class="letters-loading">I</span>
                            <span data-text-preloader="N" class="letters-loading">N</span>
                            <span data-text-preloader="G" class="letters-loading">G</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->


        <!-- Register One -->
        <section class="register-one">
            <div class="team-detail_button">
                <a href="{{ route('dashboard.detail', ['id' => $barang->id_barang]) }}" class="template-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">Cancel</span>
                        <span class="text-two">Cancel</span>
                    </span>
                </a>
            </div>
            <div class="auto-container">
                <div class="inner-container">


                    <h3 class="text-center">Update Barang</h3>
                    <div class="register-form">
                        <form method="post" action="{{ route('barang.update', $barang->id_barang) }}" enctype="multipart/form-data">
                            @csrf
                            @METHOD('PUT')
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" id="foto" name="foto" value="{{ $barang->foto }}" accept="image/*" onchange="validateFoto(event)">
                                <br>
                                <img id="preview" src="" alt="Preview Gambar" style="max-width: 200px; display: none; margin-top: 10px;">
                                <p id="file-warning" style="color: red; display: none;">Ukuran file terlalu besar! Maksimal 5MB.</p>
                                {{-- <input type="file" id="foto" name="foto" placeholder="" required=""> --}}
                            </div>

                            <input type="hidden" id="id_barang" name="id_barang" value="{{ $barang->id_barang }}">

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" id="keterangan" name="keterangan" value="{{ $barang->keterangan }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                {{-- <label>Kategori</label>
                                <input type="text" id="kategori" name="kategori" placeholder="" required=""> --}}
                                <label for="Kategori">Kategori</label>
                                <select class="dropdown" id="kategori" name="kategori" value="{{ $barang->kategori }}">
                                    <option value="Komputer dan Pendukungnya" {{ $barang->kategori == "Komputer dan Pendukungnya" ? 'selected' : '' }}>Komputer dan Pendukungnya</option>
                                    <option value="Server dan Pendukungnya" {{ $barang->kategori == "Server dan Pendukungnya" ? 'selected' : '' }}>Server dan Pendukungnya</option>
                                    <option value="Peralatan Kantor dan Pendukungnya" {{ $barang->kategori == "Peralatan Kantor dan Pendukungnya" ? 'selected' : '' }}>Peralatan Kantor dan Pendukungnya</option>
                                    <option value="Alat Elektronik dan Pendukungnya" {{ $barang->kategori == "Alat Elektronik dan Pendukungnya" ? 'selected' : '' }}>Alat Elektronik dan Pendukungnya</option>
                                    <option value="Alat Olahraga" {{ $barang->kategori == "Alat Olahraga" ? 'selected' : '' }}>Alat Olahraga</option>
                                    <option value="Alat Pengolahan Sampah" {{ $barang->kategori == "Alat Pengolahan Sampah" ? 'selected' : '' }}>Alat Pengolahan Sampah</option>
                                    <option value="Jasa Sewa Server" {{ $barang->kategori == "Jasa Sewa Server" ? 'selected' : '' }}>Jasa Sewa Server</option>
                                    <option value="Alat Kesehatan" {{ $barang->kategori == "Alat Kesehatan" ? 'selected' : '' }}>Alat Kesehatan</option>
                                    <option value="Alat Laboratorium" {{ $barang->kategori == "Alat Laboratorium" ? 'selected' : '' }}>Alat Laboratorium</option>
                                    <option value="Alat Kebakaran" {{ $barang->kategori == "Alat Kebakaran" ? 'selected' : '' }}>Alat Kebakaran</option>
                                    <option value="Mesin" {{ $barang->kategori == "Mesin" ? 'selected' : '' }}>Mesin</option>
                                    <option value="Alat Musik" {{ $barang->kategori == "Alat Musik" ? 'selected' : '' }}>Alat Musik</option>
                                    <option value="Furnitur" {{ $barang->kategori == "Furnitur" ? 'selected' : '' }}>Furnitur</option>
                                    <option value="Jasa Lainnya" {{ $barang->kategori == "Jasa Lainnya" ? 'selected' : '' }}>Jasa Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="text" id="harga_beli" name="harga_beli" value="{{ $barang->harga_beli }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="text" id="harga_jual" name="harga_jual" value="{{ $barang->harga_jual }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" id="stok" name="stok" value="{{ $barang->stok }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                {{-- <label>Satuan</label>
                                <input type="text" id="satuan" name="satuan" placeholder="" required=""> --}}
                                <label for="satuan">Satuan</label>
                                <select class="dropdown" id="satuan" name="satuan" value="{{ $barang->satuan }}">
                                    <option value="Paket">Paket</option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Box">Box</option>
                                    <option value="Unit">Unit</option>
                                    <option value="Botol">Botol</option>
                                    <option value="Karung">Karung</option>
                                    <option value="Hari">Hari</option>
                                    <option value="Jam">Jam</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Lusin">Lusin</option>
                                    <option value="Gelas">Gelas</option>
                                    <option value="Meter">Meter</option>
                                    <option value="Porsi">Porsi</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <!-- Button Box -->
                                <button type="submit" class="submit-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Update</span>
                                        <span class="text-two">Update</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- End Default Form -->
                </div>
            </div>
            <br><br>
        </section>
        <!-- End Register One -->

    </div>
    <!-- End PageWrapper -->

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('assets/js/touchspin.js') }}"></script>
<script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/element-in-view.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Dropzone JS Lib -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <!-- JQuery     Lib -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>
