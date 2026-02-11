<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form News - Glory Karya Perkasa</title>
    <!-- Stylesheets -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/meanmenu.min.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

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
                <a href="{{ route('dashboardNews') }}" class="template-btn btn-style-one">
                    <span class="btn-wrap">
                        <span class="text-one">Cancel</span>
                        <span class="text-two">Cancel</span>
                    </span>
                </a>
            </div>

            <div class="auto-container">
                <div class="inner-container">
                    <h3 class="text-center">Tambah Berita</h3>
                    <!-- Register Form -->
                    <div class="register-form">
                        <form method="post" action="{{ route('tambahBerita') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Foto 1 (wajib)</label>
                                <input type="file" id="foto1" name="foto1" accept=".jpg,.jpeg,.png" onchange="validateFoto1(event)">
                                <br>
                                <img id="preview1" src="" alt="Preview Gambar1" style="max-width: 200px; display: none; margin-top: 10px;">
                                <p id="file-warning1" style="color: red; display: none;">Ukuran file terlalu besar! Maksimal 5MB.</p>
                                {{-- <input type="file" id="foto" name="foto" placeholder="" required=""> --}}
                            </div>

                            <div class="form-group">
                                <label>Foto 2</label>
                                <input type="file" id="foto2" name="foto2" accept=".jpg,.jpeg,.png" onchange="validateFoto2(event)">
                                <br>
                                <img id="preview2" src="" alt="Preview Gambar2" style="max-width: 200px; display: none; margin-top: 10px;">
                                <p id="file-warning2" style="color: red; display: none;">Ukuran file terlalu besar! Maksimal 5MB.</p>
                                {{-- <input type="file" id="foto" name="foto" placeholder="" required=""> --}}
                            </div>

                            <div class="form-group">
                                <label>Foto 3</label>
                                <input type="file" id="foto3" name="foto3" accept=".jpg,.jpeg,.png" onchange="validateFoto3(event)">
                                <br>
                                <img id="preview3" src="" alt="Preview Gambar3" style="max-width: 200px; display: none; margin-top: 10px;">
                                <p id="file-warning3" style="color: red; display: none;">Ukuran file terlalu besar! Maksimal 5MB.</p>
                                {{-- <input type="file" id="foto" name="foto" placeholder="" required=""> --}}
                            </div>

                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" id="judul" name="judul" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Isi Berita</label>
                                <input type="text" id="berita" name="berita" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                {{-- <label>Kategori</label>
                                <input type="text" id="kategori" name="kategori" placeholder="" required=""> --}}
                                <label for="penulis">Penulis</label>
                                <select class="dropdown" id="penulis" name="penulis">
                                    <option value="Ali">Ali</option>
                                    <option value="Gunadi">Gunadi</option>
                                    <option value="Isa">Isa</option>
                                    <option value="Jabbar">Jabbar</option>
                                    <option value="Jerry">Jerry</option>
                                    <option value="Brilly">Brilly</option>
                                    <option value="Tisna">Tisna</option>
                                    <option value="Andri">Andri</option>
                                    <option value="Oka">Oka</option>
                                    <option value="Khusni">Khusni</option>
                                    <option value="Anna">Anna</option>
                                    <option value="Eka">Eka</option>
                                    <option value="Salis">Salis</option>
                                    <option value="Dani">Dani</option>
                                    <option value="Angel">Angel</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <!-- Button Box -->
                                <button type="submit" class="submit-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Tambah</span>
                                        <span class="text-two">Tambah</span>
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

    <script>
        function validateFoto1(event) {
            var input = event.target;
            var preview = document.getElementById('preview1');
            var warning = document.getElementById('file-warning1');

            if (input.files && input.files[0]) {
                var file = input.files[0];

                // Cek ukuran file (maksimal 5MB)
                if (file.size > 5 * 1024 * 1024) { // 5MB dalam bytes
                    warning.style.display = "block"; // Tampilkan peringatan
                    preview.style.display = "none";  // Sembunyikan preview
                    input.value = ""; // Reset input file
                    return;
                } else {
                    warning.style.display = "none"; // Sembunyikan peringatan
                }

                // Tampilkan preview gambar jika ukuran file valid
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script>
        function validateFoto2(event) {
            var input = event.target;
            var preview = document.getElementById('preview2');
            var warning = document.getElementById('file-warning2');

            if (input.files && input.files[0]) {
                var file = input.files[0];

                // Cek ukuran file (maksimal 5MB)
                if (file.size > 5 * 1024 * 1024) { // 5MB dalam bytes
                    warning.style.display = "block"; // Tampilkan peringatan
                    preview.style.display = "none";  // Sembunyikan preview
                    input.value = ""; // Reset input file
                    return;
                } else {
                    warning.style.display = "none"; // Sembunyikan peringatan
                }

                // Tampilkan preview gambar jika ukuran file valid
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script>
        function validateFoto3(event) {
            var input = event.target;
            var preview = document.getElementById('preview3');
            var warning = document.getElementById('file-warning3');

            if (input.files && input.files[0]) {
                var file = input.files[0];

                // Cek ukuran file (maksimal 5MB)
                if (file.size > 5 * 1024 * 1024) { // 5MB dalam bytes
                    warning.style.display = "block"; // Tampilkan peringatan
                    preview.style.display = "none";  // Sembunyikan preview
                    input.value = ""; // Reset input file
                    return;
                } else {
                    warning.style.display = "none"; // Sembunyikan peringatan
                }

                // Tampilkan preview gambar jika ukuran file valid
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(file);
            }
        }
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

    <!-- Dropzone JS Lib -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <!-- JQuery     Lib -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>
