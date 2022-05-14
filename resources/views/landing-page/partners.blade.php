@extends('layout.front')
@section('title', 'Partners')
@section('container')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('user-landing') }}">Home</a></li>
        <li>Partners</li>
      </ol>
      <h2>Partners</h2>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Company Section ======= -->
  <section id="partner" class="partner">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8 entries">
          @foreach ($partners as $partner)
          
          
          <article class="entry">
            <div class=" text-center">
              <img src="{{ $partner->img }}" alt="" class=" entry-img img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="{{ route('user-singlepartner', $partner->id) }}">{{ $partner->company }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
               
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ $partner->updated_at->diffForHumans() }}</time></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                {!! $partner->description !!}
              </p>
              <div class="read-more">
                <a href="{{ route('user-singlepartner', $partner->id) }}">Read More</a>
              </div>
            </div>

          </article>
          @endforeach

          <!-- End company entry -->

          <div class="partner-pagination">
            <ul class="d-flex justify-content-center">
             
              {{ $partners->links() }}
            </ul>
          </div>

        </div><!-- End company entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
                <li><a href="#">Design <span>(22)</span></a></li>
                <li><a href="#">Creative <span>(8)</span></a></li>
                <li><a href="#">Educaion <span>(14)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->
            
            <h3 class="sidebar-title">Recent Partners</h3>
            @foreach ($partners as $partner)
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{ $partner->img }}" alt="">
                <h4><a href="{{ route('user-singlepartner', $partner->id) }}">{{ $partner->company }}</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div>
            @endforeach
            <!-- End sidebar company-->

          </div>
          <!-- End sidebar -->

        </div>
        <!-- End company sidebar -->

      </div>

    </div>
  </section>
  <!-- End Company Section -->

</main>
<!-- End #main -->
@endsection