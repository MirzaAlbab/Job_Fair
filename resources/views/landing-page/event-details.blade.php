@extends('layout.front')
@section('title','Details')
@section('container')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('user-landing') }}">Home</a></li>
        <li><a href="{{ route('user-events') }}">Events</a></li>
        <li>Event Details</li>
      </ol>
      <h2>Event Details</h2>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Event Details Section ======= -->
  <section id="event-details" class="event-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="event-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="event-info">
            <h3>Event information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: Telkomsel</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div>
          <div class="event-description">
            <h2>Event description</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- Event Details Section -->

</main><!-- End #main -->
@endsection
