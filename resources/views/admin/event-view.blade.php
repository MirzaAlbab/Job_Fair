@extends('layout.admin')

@section('title')
    <title>View Event | DPKKA - Universitas Airlangga</title>
@endsection

@section('event', '')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Event</h1>
      <nav>
        <ol class="breadcrumb">
          {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" data-bs-toggle="modal" data-bs-target="#cancelFormModal">Home</a></li> --}}
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
          <li class="breadcrumb-item active">View Event</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
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
          <h5 class="card-title">Lorem Ipsum</h5>
          <img src="{{ asset('assets/img/DPKKA-image.png') }}" class="img-fluid" alt="...">
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
          <div class="text-center">
            <a href="{{ route('event') }}" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
          </div>
        </div>
      </div>
    </section>

  </main>
    
@endsection