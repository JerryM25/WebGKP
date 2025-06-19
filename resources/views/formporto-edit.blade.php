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
                <a href="{{ route('dashboardPorto') }}" class="template-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">Cancel</span>
                        <span class="text-two">Cancel</span>
                    </span>
                </a>
            </div>

            <div class="auto-container">
                <div class="inner-container">
                    <h3 class="text-center">Update Portofolio</h3>
                    <!-- Register Form -->
                    <div class="register-form">
                        <form method="post" action="{{ route('porto.update', $porto->id_portofolio) }}" enctype="multipart/form-data">
                            @csrf
                            @METHOD('PUT')
                            <div class="form-group">
                                <label>Nama Portofolio</label>
                                <input type="text" id="nama_porto" name="nama_porto" value="{{ $porto->nama_porto }}" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" value="{{ $porto->tanggal }}" placeholder="" required="">
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
