@extends('layout.front')
@section('title', 'About')

@section('container')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="/landingpage">Home</a></li>
        <li>About</li>
      </ol>
      <h2>About</h2>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Big Clients Section ======= -->
  <section id="clients" class="clients bg-white">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p>Sponsors</p>
      </header>
      <div class="clients-slider2 swiper">
        <div class="swiper-wrapper align-items-center" >
          <div class="swiper-slide d-flex align-items-center justify-content-center"><a href="#"><img src="assets/img/dummy.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>
  <!-- End Big Clients Section -->

    <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p>Airlangga Online Career Fair</p>
      </header>

      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row gx-0">
        <div class="col-lg-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content ">
            <p>
              Airlangga Online Career Fair (AOCF) 2022 merupakan salah satu wahana strategis bagi kepentingan perusahaan/corporation dan jobseeker. Pada tahun 2022 ini, Airlangga Online Career Fair (AOCF) diadakan secara online/virtual melalui web DPKKA mengingat kondisi saat ini yang masih dalam pandemic COVID-19. Dalam hal ini, Corporation memiliki kemudahan untuk mencari talent yang sesuai dengan kualifikasi yang dibutuhkan untuk mempercepat growth dan pengembangan bisnis utamanya.
            </p>
            <p>
              Sedangkan bagi jobseeker, dalam event AOCF ini dapat dijadikan peluang dalam melamar pekerjaan ditengah kondisi pandemic COVID-19 terhadap jenis perusahaan dan bidang yang menjadi passion personalnya.
            </p>
            <p>
              Selain itu, AOCF 2022 terbuka untuk umum. Tidak hanya lulusan dari Universitas Airlangga, tetapi juga berbagai lulusan dari perguruan tinggi lain baik negeri maupun swasta. Dengan demikian, kegiatan ini sangat strategis untuk dijadikan agenda utama dalam berpartisipasi secara aktif.
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
  
    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <p>Partisipan AOCF</p>
      </header>
  
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center mb-5">
          
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  
  </section>
  <!-- End Clients Section -->
@endsection