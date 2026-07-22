<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form Beli - Glory Karya Perkasa</title>
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

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo-gkp-1.png') }}" type="image/png">

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
                            <span data-text-preloader="G" class="letters-loading">G</span>
                            <span data-text-preloader="K" class="letters-loading">K</span>
                            <span data-text-preloader="P" class="letters-loading">P</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->


        <!-- Register One -->
        <section class="register-two">
            <div class="team-detail_button">
                <a href="{{ route('detail.req', ['id' => $notabeli->id_nota_beli]) }}" class="template-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">Cancel</span>
                        <span class="text-two">Cancel</span>
                    </span>
                </a>
            </div>

            <div class="auto-container">
                <div class="inner-container">
                    <h3 class="text-center">Tambah Item Beli</h3>
                    <div class="register-form">
                        <form action="{{ route('item.simpan') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_nota_beli" value="{{ $notabeli->id_nota_beli }}">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Barang</label>
                                            <select name="id_barang" id="id_barang" class="form-control">
                                                <option value="">-- Pilih Barang --</option>
                                                @foreach($barang as $barang)
                                                    <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Quantity</label>
                                            <input type="number" name="quantity" id="quantity" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Harga</label>
                                            <input type="number" name="harga" id="harga" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="btn btn-warning btn-block">TAMBAH ITEM</button>
                                        </div>
                                    </div>
                                </form>

                                <form action="{{ route('itemreqbeli.tambah') }}" method="POST">
                                    @csrf
                                    <table class="table table-dark mt-4">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barang</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $grandtotal = 0; @endphp

                                            @if(session('list_barang'))
                                                @foreach(session('list_barang', []) as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item['nama_barang'] }}</td>
                                                    <td>{{ $item['quantity'] }}</td>
                                                    <td>{{ number_format($item['harga'], 0, ',', '.') }}</td>
                                                    <td>{{ number_format($item['total'], 0, ',', '.') }}</td>
                                                </tr>

                                                @php $grandtotal += $item['total']; @endphp

                                                @endforeach
                                            @endif
                                            <tr style="border-top: 2px solid orange; font-weight: bold;">
                                                <td colspan="4" class="text-right">Total Seluruh</td>
                                                <td style="color: orange;">{{ number_format($grandtotal, 0, ',', '.') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
