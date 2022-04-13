@extends('layout.front')
@section('title', 'Airlangga Career Fair')

@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container-fluid px-0 py-0">
      <div class="row">
        <img src="{{ $aocf->img }}" alt="">
      </div>
  </div>
</section>
<!-- End Hero -->


<!-- ======= Big Clients Section ======= -->
<section id="clients" class="clients bg-white">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <p>Sponsors</p>
    </header>
    <div class="clients-slider2 swiper">
      <div class="swiper-wrapper align-items-center" >
        @foreach ($partners as $sponsor)
        <div class="swiper-slide d-flex align-items-center justify-content-center"><a href="#"><img src="{{ $sponsor->img }}" class="img-fluid" alt=""></a></div>
        {{-- <div class="swiper-slide d-flex align-items-center justify-content-center"><img src="assets/img/dummy.png" class="img-fluid" alt=""></div>
         --}}
        @endforeach
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<!-- End Big Clients Section -->

<!-- ======= Main Section ======= -->
<main id="main">
<!-- ======= Values Section ======= -->
  <section id="values" class="values">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>What's On AOCF</p>
        </header>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('user-partners') }}">
              <div class="box">
                <img src="assets/img/values-1.png" class="img-fluid" alt="">
                <h3>Company Profile</h3>
                <p>Presentasi perusahaan-perusahaan keren terkait informasi peluang dan prospek karier yang tersedia.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <a href="{{ route('user-events') }}">
              <div class="box">
                <img src="assets/img/values-2.png" class="img-fluid" alt="">
                <h3>Career Workshop</h3>
                <p>Sharing session bareng narasumber profesional seputar dunia karir.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <a href="">
              <div class="box">
                <img src="assets/img/values-3.png" class="img-fluid" alt="">
                <h3>Job Vacancies</h3>
                <p>Dapatkan informasi tentang lowongan pekerjaan, magang, pelatihan, dan lain sebagainya</p>
              </div>
            </a>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->


  <!-- ======= Counts Section ======= -->
  
  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>Jadwal AOCF</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6">
          @foreach ($rundown as $rd)
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      {{ $rd->time }}
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{!! $rd->event !!}</div>
                    
                  </div>
                </div>
                
              </div>
              <!-- End Accordion without outline borders -->

           
          @endforeach
        </div>

      </div> 
      <!-- / row -->
      <header class="section-header mt-5">
        <p>Registrasi AOCF</p>
      </header>

      <div class="row">
        <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-1"></i>
                <h3>Mendaftar pada menu "Daftar Sekarang" di website DPKKA atau klik <a href="#">Daftar</a> </h3>
                
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-2"></i>
                <h3>Mengisi form registrasi dengan memilih tipe keanggotaan sebagai “Mahasiswa / Alumni” atau “Umum”</h3>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-3"></i>
                <h3>Jika NIM Anda belum terdaftar silahkan mengisi form <a href="//bit.ly/RegistrasiNIMAlumni">berikut</a></h3>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-4"></i>
                <h3>Setelah melakukan registrasi, lengkapi data diri Anda yang nantinya digunakan sebagai CV Anda</h3>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-5"></i>
                <h3>Anda akan mendapatkan pesan melalui email yang sudah didaftarkan (cek spam bila tidak ada di kontak masuk)</h3>
              </div>
            </div>

            <div class="col-md-4" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="ri-number-6"></i>
                <h3>Selamat, registrasi Anda telah berhasil</h3>
              </div>
            </div>

          </div>
        </div>

      </div> 
      <!-- / row -->

    </div>

  </section>
  <!-- End Features Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ $countpartner }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Perusahaan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Webinar</p>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </section>
  <!-- End Counts Section -->
  
  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
  
    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <p>Partisipan AOCF</p>
      </header>
  
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center mb-5">
          @foreach ($participant as $partici)
          <div class="swiper-slide"><img src="{{ $partici->img }}" class="img-fluid" alt=""></div>
        
         @endforeach
          
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  
  </section>
  <!-- End Clients Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Gallery</h2>
        <p>Galeri AOCF</p>
      </header>

      <div class="row gy-4 gallery-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($gallery as $g)
        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <div class="gallery-wrap">
            <img src="{{ $g->img }}" class="img-fluid" alt="">
            <div class="gallery-info">
              <div class="gallery-links">
                <a href="{{ $g->img }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi-zoom-in position-absolute" style="font-size: 1rem;"></i></a>
                <a href="{{ route('user-gallery') }}" title="More Details"><i class="bi bi-link position-absolute"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    </div>

  </section><!-- End Gallery Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
         {{-- @php
             dd(($faqs->split($faqs->count()/2)));
         @endphp --}}
          <!-- F.A.Q List 1-->
          @foreach ($faqs as $faq)
              
         
          
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  {{ $faq->question }}
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                 {!! $faq->answer !!}
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>

        <div class="col-lg-6">
          
          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">
            
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  {{ $faq->question }}
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                 {!! $faq->answer !!}
                </div>
              </div>
            </div>

            
           
          </div>
        </div>
       
        
     

      </div>
      
    </div>
    
  </section>
  <!-- End F.A.Q Section -->
  
  
</main>
<!-- End #main -->
    
@endsection