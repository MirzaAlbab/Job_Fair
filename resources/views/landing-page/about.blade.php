@extends('layout.front')
@section('title', 'About')

@section('container')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('user-landing') }}">Home</a></li>
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
          @foreach ($partners as $sponsor)
          <div class="swiper-slide d-flex align-items-center justify-content-center"><a href="{{ route('user-singlepartner', $sponsor->id) }}" target="_blank"><img src="{{ $sponsor->img }}" class="img-fluid" alt=""></a></div>
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

    <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p>{{ $aocf->title }}</p>
      </header>

      <div class="row justify-content-center">
<<<<<<< HEAD
        <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="200">
=======
        <div class="col-lg-10 text-center" data-aos="zoom-out" data-aos-delay="200">
>>>>>>> 30362d04da74bc8cec15b2e3197bc3193a4cc50d
          <img src="{{ $aocf->img }}" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row gx-0">
        <div class="col-lg-12 align-items-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content ">
            {!! $aocf->description !!}
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
          @foreach ($participant as $partici)
          <div class="swiper-slide"><a href="{{ route('user-singlepartner', $partici->id) }}" target="_blank"><img src="{{ $partici->img }}" class="img-fluid" alt=""></a></div>
        
         @endforeach
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  
  </section>
  <!-- End Clients Section -->
@endsection