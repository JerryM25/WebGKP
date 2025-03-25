<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login - Glory Karya Perkasa</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/meanmenu.min.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/logo-removebg.png" type="image/x-icon">
<link rel="icon" href="assets/images/logo-removebg.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
	<header class="main-header header-style-two alternate">

		<!-- Header Lower -->
		<div class="header-lower">
			<div class="auto-container">
				<div class="inner-container">
					<div class="d-flex align-items-center justify-content-between flex-wrap">

						<div class="nav-outer d-flex align-items-center flex-wrap">
							<div class="logo-box">
								<div class="logo"><a href="/"><img src="assets/images/logo-removebg.png" alt="" title="" width="60" height="60"></a></div>
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
				<div class="nav-logo"><a href="/"><img src="assets/images/logo-removebg.png" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->

	</header>
	<!-- End Main Header -->

	<!-- Register One -->
	<section class="register-one">
		<div class="auto-container">
			<div class="inner-container">
				<h3 class="text-center">Login</h3>
				<!-- Register Form -->
				<div class="register-form">
					<form action="/ceklogin" method="post">
                        @csrf
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" required>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input id="password" type="password" name="password" required>
						</div>
                        <div class="form-group checkbox-container">
                            <input type="checkbox" id="showPassword">
                            <label for="showPassword">Show Password</label>
                        </div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LeIH_8qAAAAAMQMRPMwz5woTocN9vRvQ2ZWLJ4S"></div><br>

						<div class="form-group">
							<button type="submit" class="submit-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">Login</span>
									<span class="text-two">Login</span>
								</span>
							</button>
						</div>

					</form>
				</div>
				<!-- End Default Form -->
			</div>
		</div>
        <br><br><br><br><br>
	</section>
	<!-- End Register One -->

	<!-- Main Footer -->
	<footer class="main-footer">
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
					<div class="footer-logo"><a href="/"><img src="assets/images/logo-removebg.png" alt="" title="" width="50" height="50"></a></div>
					<div class="footer-copyright">&copy; 2024 <a href="/">Glory Karya Perkasa</a> All rights reserved.</div>
				</div>
			</div>
		</div>
	</footer>

</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

<script>
    document.getElementById('showPassword').addEventListener('change', function () {
        let passwordField = document.getElementById('password');
        if (this.checked) {
            passwordField.type = 'text';
        } else {
            passwordField.type = 'password';
        }
    });
</script>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/tilt.jquery.min.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/backtotop.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/SplitText.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/ScrollToPlugin.min.js"></script>
<script src="assets/js/ScrollSmoother.min.js"></script>

<script src="assets/js/touchspin.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/element-in-view.js"></script>
<script src="assets/js/script.js"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>
</html>
