<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard Detail- Glory Karya Perkasa</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/meanmenu.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/logo-removebg.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/logo-removebg.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<body>
    <header class="main-header header-style-one">

		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex flex-wrap">

						<div class="nav-outer d-flex flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
                                <div class="price-block_one-button text-center">
                                    <a class="template-btn price-one_button" href="/dashboard">Back</a>
                                </div>
							</nav>
						</div>

						<!-- Main Menu End-->
						<div class="outer-box d-flex align-items-center flex-wrap">

							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 6l16 0" /><path d="M4 12l16 0" /><path d="M4 18l16 0" /></svg>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
		<!--End Header Lower-->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon fa-solid fa-xmark fa-fw"></span></div>

			<nav class="menu-box">
				<div class="nav-logo"><a href="/"><img src="{{ asset('assets/images/logo-removebg.png') }}" alt="" title="" height="50" width="50"></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->

	</header>

<!-- Team Detail -->
<section class="team-detail">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Team Block One -->
            <div class="team-detail_image-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_image-outer">
                    <div class="team-detail_image">
                        <img class="team-detail_image" src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" />
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-detail_content-column col-lg-6 col-md-12 col-sm-12">
                <div class="team-detail_content-outer">
                    <div class="team-detail_subtitle">Detail</div>
                        <h2 class="team-detail_title">{{ $barang->nama_barang }}</h2>
                        <div class="team-detail_text">{{ $barang->kategori }}</div>
                        <div class="team-detail_subtitle"><span>Spesifikasi</span></div>
                        <div class="team-detail_text">{{ $barang->keterangan }}</div>
                        <div class="team-detail_info-outer">
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Harga Jual
                                        <span>Rp {{ number_format($barang->harga_jual, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Harga Beli
                                        <span>Rp {{ number_format($barang->harga_beli, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Stok
                                        <span>{{ $barang->stok }}</span>
                                    </div>
                                </div>

                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <div class="team-detail_info">
                                        Satuan
                                        <span>{{ $barang->satuan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="team-detail_button">
                                <a href="{{ route('barang.edit', $barang->id_barang) }}" class="template-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Edit</span>
                                        <span class="text-two">Edit</span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <form action="{{ route('barang.delete', $barang->id_barang) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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
            </div>

        </div>

    </div>
</section>
<!-- End Team Detail -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
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

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/blade.php5shiv/3.7.3/blade.php5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</body>
</html>
