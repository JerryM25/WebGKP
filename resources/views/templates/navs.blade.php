<!DOCTYPE blade.php>
<blade.php>
<head>
<meta charset="utf-8">
<title>@yield('title') - Glory Karya Perkasa</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/meanmenu.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/logo-gkp-1.png') }}" type="image/png">

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

	<!-- Main Header -->
	<header class="main-header header-style-one">

		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex justify-content-between align-items-center flex-wrap">

						<div class="logo-box">
							<div class="logo"><a href="/"><img src="{{ asset('assets/images/logo-gkp-1.png') }}" alt="" title="" width="50" height="50"></a></div>
						</div>

						<div class="nav-outer d-flex flex-wrap">
							<!-- Main Menu -->
							<nav class="main-menu navbar-expand-md">
								<div class="navbar-header">
									<!-- Toggle Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li class="{{ Route::currentRouteName() == 'home' ? 'active current' : '' }}">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'service' ? 'active current' : '' }}">
                                            <a href="{{ route('service') }}">Service</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'product' ? 'active current' : '' }}">
                                            <a href="{{ route('product') }}">Product</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'about' ? 'active current' : '' }}">
                                            <a href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'news' ? 'active current' : '' }}">
                                            <a href="{{ route('news') }}">News</a>
                                        </li>
                                        <li class="{{ Route::currentRouteName() == 'portofolio' ? 'active current' : '' }}">
                                            <a href="{{ route('portofolio') }}">Portofolio</a>
                                        </li>
									</ul>
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
        @yield('content')

        <footer class="main-footer">
            {{-- <div class="footer_pattern" style="background-image: url(assets/images/background/footer-pattern.png)"></div> --}}

            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                        <div class="footer-logo"><a href="/"><img src="{{ asset('assets/images/logo-gkp-1.png') }}" width="50" height="50"></a></div>
                        <div class="footer-copyright">&copy; 2024 <a href="/">CV Glory Karya Perkasa</a> All rights reserved.</div>
                    </div>
                </div>
            </div>
        </footer>
</div>

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
</blade.php>
