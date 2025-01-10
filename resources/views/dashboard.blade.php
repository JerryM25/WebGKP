<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Glory Karya Perkasa</title>
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

</head>
<body>
    {{-- Header --}}
    <header class="main-header header-style-two alternate">
        <div class="outer-box d-flex align-items-center flex-wrap">
            <div class="logo"><img src="assets/images/logo-removebg.png" alt="" title="" width="80" height="80"></div>
            <div class="main-header_buttons">
                <a href="/logout" class="template-btn btn-style-two">
                    <span class="btn-wrap">
                        <span class="text-one">Log Out</span>
                        <span class="text-two">Log Out</span>
                    </span>
                </a>
            </div>
        </div>
    </header>
    {{-- End Header --}}
{{-- Tambah Barang --}}
<div class="price-block_one-button text-center">
    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid">
        <a class="template-btn price-one_button" href="/tambah">Tambah Barang</a><br>
        <div class="row">
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="/request">Request Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="/terima">Terima Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="/permintaan">Permintaan Barang</a>
            </div>
            <div class="col-md-3">
                <a class="template-btn price-one_button" href="/jual">Jual Barang</a>
            </div>
        </div>
    </div>
    <br>
</div>
{{-- End Tambah Barang --}}
{{-- Barang --}}
<div class="container-fluid">
<div class="row">
    <div class="col-md-2">
        <div class="d-flex align-items-start">
            <div class="sec-title title-anim centered">
                <div class="sec-title_title">Categories</div>
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="form-check text-white">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Default checkbox
                    </label>
                  </div>
                  <div class="form-check text-white">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      Checked checkbox
                    </label>
                  </div>
            </div>
        </div>
          </div>
    </div>
    <div class="col-md-10">
        <div class="sec-title title-anim centered">
            <div class="sec-title_title">Our Product</div>
            <div class="tab active-tab" id="prod-monthly">
                <div class="content">
                    <div class="row clearfix">
<!-- Team Two -->
            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-1.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-2.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-3.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-4.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-5.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

            <!-- Team Block One -->
            <div class="team-block_one col-lg-4 col-md-6 col-sm-12">
                <div class="team-block_one-inner">
                    <div class="team-block_one-image">
                        <a href="/detaildashboard"><img src="assets/images/resource/team-6.jpg" alt="" /></a>
                    </div>
                    <div class="team-block_one-content">
                        <h4 class="team-block_one-title"><a href="/detaildashboard">Nama Barang</a></h4>
                        <div class="team-block_one-designation">Kategori</div>
                    </div>
                </div>
            </div>

<!-- End Team Two -->
                    </div>
        </div>
    </div>
</div>
</div>
{{-- End Barang --}}

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>

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

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/blade.php5shiv/3.7.3/blade.php5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</body>
</html>
