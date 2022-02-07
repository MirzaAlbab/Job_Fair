<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  {{-- Font Awesome --}}
  <script src="https://kit.fontawesome.com/c65c7fe476.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="{{ asset('assets/css/front/lightbox.min.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/front/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top bg-light">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/landingpage" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/dpkka.png') }}" alt="">
        <span>AOCF</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/landingpage">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/articles">Articles</a></li>
          <li><a class="nav-link scrollto" href="/events">Events</a></li>
          <li><a class="getstarted scrollto" href="/register">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  @yield('container')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3">
            <img class="img-fluid logo d-flex align-items-center" src="{{ asset('assets/img/DPKKA_T.png') }}" alt="">
          </div>
          <div class="col-lg-5 col-md-12 footer-info text-center">
              <h5>Direktorat Pengembangan Karir, Inkubasi Kewirausahaan, dan Alumni (DPKKA)</h5>
              
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p> -->
            <div class="social-links mt-3">
              <a href="https://twitter.com/dpkka_unair" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/ppkk.unair/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/dpkka_unair/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/ppkkha" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.youtube.com/channel/UCCK1gd6ZMWf0C0N62h7JSFw" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>
          </div>

          <!-- <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Airlangga Convention Center, <br>
              Jalan Dr. Ir. Soekarno<br>
              Surabaya 60115 <br><br>
              <strong>Phone:</strong> (+62)85746813431<br>
              <strong>Fax:</strong> (031) 59 555 81<br>
              <strong>Email:</strong> admin@dpkka.unair.ac.id<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?= date('Y')?></span></strong>. Universitas Airlangga. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('assets/js/front/lightbox-plus-jquery.min.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/front/main.js') }}"></script>

</body>

</html>