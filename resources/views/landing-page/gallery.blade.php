@extends('layout.front')
@section('title', 'Gallery')

@section('container')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{ route('user-landing') }}">Home</a></li>
      <li>Gallery</li>
    </ol>
    <h2>Gallery</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up">

    <div class="row gy-4 gallery-container" data-aos="fade-up" data-aos-delay="200">
      @foreach ($gallery as $gallery)
      <div class="col-lg-4 col-md-6 gallery-item filter-app">
        <div class="gallery-wrap">
          <img src="{{ $gallery->img }}" class="img-fluid" alt="">
          <div class="gallery-info">
            <div class="gallery-links">
              <a href="{{ $gallery->img }}" data-gallery="portfolioGallery" class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      

    </div>

  </div>

</section><!-- End Portfolio Section -->

    
@endsection