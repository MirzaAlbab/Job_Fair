@extends('layout.front')
@section('title', 'Airlangga Career Fair')

@section('container')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
  <div class="container-fluid px-0 py-0">
    <div class="row">
      <img src="{{ asset('assets/img/banner.png') }}" alt="">
      {{-- <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Airlangga Online Career Fair 2022</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Raih impian dan mulai bangun jenjang karirmu</h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="/register" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('assets/img/banner.png') }}" class="img-fluid" alt="">
      </div>
    </div> --}}
  </div>

</section>
<!-- End Hero -->


<!-- ======= Big Clients Section ======= -->
<section id="clients" class="clients bg-white">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h2>AOCF</h2>
      <p>Our Partners</p>
    </header>
    <div class="clients-slider2 swiper">
      <div class="swiper-wrapper align-items-center" >
        <div class="swiper-slide text-center"><a href="#"><img src="assets/img/dummy.png" class="img-fluid sponsors" alt=""></a></div>
        <div class="swiper-slide text-center"><img src="assets/img/dummy.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide text-center"><img src="assets/img/dummy.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide text-center"><img src="assets/img/dummy.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid sponsors" alt=""></div>
        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid sponsors" alt=""></div>
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
          <h2>AOCF</h2>
          <p>What's On AOCF</p>
        </header>
        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="/partners">
              <div class="box">
                <img src="assets/img/values-1.png" class="img-fluid" alt="">
                <h3>Company Profile</h3>
                <p>Presentasi perusahaan-perusahaan keren terkait informasi peluang dan prospek karier yang tersedia.</p>
              </div>
            </a>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <a href="/events">
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
                <h3>Campus Hiring</h3>
                <p>Dapatkan informasi tentang lowongan pekerjaan, magang, pelatihan, dan lain sebagainya</p>
              </div>
            </a>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->


  <!-- ======= Counts Section ======= -->
  
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Schedule</h2>
        <p>Jadwal AOCF 2022</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6">

          
              <h5 class="text-center">Jadwal AOCF</h5>

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Senin, 17 Agustus 2022
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">05.00 - 07.00 Perkenalan</div>
                    <div class="accordion-body">05.00 - 07.00 Perkenalan</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>
              <!-- End Accordion without outline borders -->

           

        </div>
            
              
                
        
                
              
           
        

          

      </div> <!-- / row -->

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6">
          <h3>Cara daftar member DPKKA</h3>

          

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">
              <ol>
                <li>
                  Mendaftar pada menu "Daftar Sekarang" di website DPKKA atau klik <a href="#">Daftar</a> 
                </li>
                <li>
                  Silahkan Anda mengisi form registrasi, dengan memilih tipe keanggotaan sebagai “Member Jobseeker Lifetime Alumni” atau “Member Jobseeker Lifetime Non Alumni”
                </li>
                <li>
                  Jika NIM Anda belum terdaftar silahkan mengisi form berikut <a href="#">bit.ly/RegistrasiNIMAlumni</a> 
                </li>
                <li>
                  Setelah melakukan registrasi, web akan menampilkan halaman data diri Anda. Lengkapi data diri Anda yang nantinya digunakan sebagai CV Anda
                </li>
                <li>
                  Anda akan mendapatkan pesan melalui email yang sudah didaftarkan (cek spam bila tidak ada di kontak masuk)
                </li>
                <li>
                  Selamat registrasi Anda telah berhasil.
                </li>
              </ol>
            </div><!-- End Tab 1 Content -->

            

          </div>

        </div>

        <div class="col-lg-6">
          <img src="assets/img/features-2.png" class="img-fluid" alt="">
        </div>

      </div><!-- End Feature Tabs -->

      <!-- Feature Icons -->
      <div class="row feature-icons" data-aos="fade-up">
        <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="ri-radar-line"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div><!-- End Feature Icons -->

    </div>

  </section><!-- End Features Section -->

  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
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
  <section id="clients" class="">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>AOCF</h2>
        <p>Partisipan AOCF 2022</p>
      </header>
      <div class="container">
        <div class="row d-flex flex-column text-center participant">
          <div class="col">
            <a href="#"><img src="assets/img/comson.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/comson.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/comson.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/comson.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></a>
            <a href="#"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div> 
    </div>
  </section>
  <!-- End Clients Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  Non consectetur a erat nam at lectus urna duis?
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">

          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
              </h2>
              <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  Varius vel pharetra vel turpis nunc eget lorem dolor?
                </button>
              </h2>
              <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- End F.A.Q Section -->

      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h2>Our Clients</h2>
            <p>Temporibus omnis officia</p>
          </header>
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top img-fluid" src="assets/img/blog/blog-1.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                  </div>
                </div>
              </div>

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
  
      </section><!-- End Clients Section -->

</main>
<!-- End #main -->
    
@endsection