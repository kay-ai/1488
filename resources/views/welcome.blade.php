<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>1488</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

  <!--  Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        label{
            font-weight: 600;
            font-size: 14px;
        }
    </style>
</head>

<body class="fine-scrollbar">

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Presidential</span></a></li>
        <li><a href="#senate" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Senetorial</span></a></li>
        <li><a href="#reps" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>House of Reps</span></a></li>
        {{-- <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> --}}
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4">Presidential Candidates</h1>
      <div class="row my-5" style="margin-right: 80px;">
        <div class="col-md-12">
            <div class="card shadow party-card">
                <div class="item">
                    <a href="">
                        <img src="/assets/img/apc-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/adc-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/apga-logo.jpg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/nnpp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/pdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/prp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/sdp-logo.jpeg" class="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="/assets/img/ypp-logo.jpeg" class="logo">
                    </a>
                </div>

            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Senate Section ======= -->
    <section id="senate" class="section d-flex about flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4">Senatorial Candidates</h1>
            <div class="row my-5" style="margin-right: 80px;">
                <div class="card shadow px-4">
                    <h5 class="card-title"><i class="bi bi-filter"></i> Filter Senatorial list</h5>
                    <small class="mb-4">Search for a Senatorial Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <div class="row pb-4">
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="name">Candidate Name:</label>
                            <select id="senate_name" placeholder="hello" class="form-control" style="font-size: 12px;" name="name" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="state">State:</label>
                            <select id="senate_state" class="form-control" style="font-size: 12px;" name="state" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="party">Political Party:</label>
                            <select id="senate_party" class="form-control" style="font-size: 12px;" name="party" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="constituency">Constituency:</label>
                            <select id="senate_constituency" class="form-control" style="font-size: 12px;" name="constituency" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Search <i class="bi bi-filter"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Senate Section -->

    <!-- ======= reps Section ======= -->
    <section id="reps" class="section d-flex about flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4">House of Reps Candidates</h1>
            <div class="row my-5" style="margin-right: 80px;">
                <div class="card shadow mb-5 px-4">
                    <h5 class="card-title"><i class="bi bi-filter"></i> Filter Senatorial list</h5>
                    <small class="mb-4">Search for a Senatorial Candidate, Filter by any of the following parameters; Candidate's Name, State, Political Party, or Contituency.</small>
                    <div class="row pb-4">
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="name">Candidate Name:</label>
                            <select id="hor_name" placeholder="hello" class="form-control" style="font-size: 12px;" name="name" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="state">State:</label>
                            <select id="hor_state" class="form-control" style="font-size: 12px;" name="state" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="party">Political Party:</label>
                            <select id="hor_party" class="form-control" style="font-size: 12px;" name="party" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="form-group col-md-3 mb-4">
                            <label class="control-label" for="constituency">Constituency:</label>
                            <select id="hor_constituency" class="form-control" style="font-size: 12px;" name="constituency" multiple="multiple" data-tags="true" required>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Search <i class="bi bi-filter"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End reps Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>1488 Naija 2023</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>1488</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->

        Designed by <a href="/">B-Tech Solutions Limited</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="/assets/js/owl.carousel.js"></script>
  <script src="/assets/js/jquery.mousewheel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="/assets/js/script.js"></script>

  <script>
    var owl = $('.party-carousel');
        owl.owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                1300:{
                    items:5
                }
            }
        })
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY>0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });
  </script>
  <!--Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
