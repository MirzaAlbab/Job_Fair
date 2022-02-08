@extends('layout.front')
@section('title', 'About')

@section('container')
  <!-- ======= Big Clients Section ======= -->
  <section id="clients" class="clients bg-white mt-5">

    <div class="container" data-aos="fade-up">

      <div class="clients-slider2 swiper">
        <div class="swiper-wrapper align-items-center" >
          <div class="swiper-slide"><a href="#"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/dpkka.png" class="img-fluid" alt=""></div>
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
      <div class="row gx-0">
        <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <h3 class="text-center">AOCF</h3>
            
      </div>
      <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-center">Airlangga Online Career Fair 2022</h2>
      </div>
      
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row gx-0">

        <div class="col-lg-12 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content ">
            <h2 class="text-center">Airlangga Online Career Fair 2022</h2>
            <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid " alt="">
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
@endsection