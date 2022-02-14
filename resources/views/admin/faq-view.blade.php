@extends('layout.admin')

@section('title')
    <title>View FAQ | DPKKA - Universitas Airlangga</title>
@endsection

@section('faq', '')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>FAQ</h1>
      <nav>
        <ol class="breadcrumb">
          {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" data-bs-toggle="modal" data-bs-target="#cancelFormModal">Home</a></li> --}}
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item"><a href="{{ route('faq') }}">FAQ</a></li>
          <li class="breadcrumb-item active">View FAQ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lorem Ipsum</h5>
          <img src="{{ asset('assets/img/DPKKA-image.png') }}" class="img-fluid" alt="...">
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
          <div class="text-center">
            <a href="{{ route('faq') }}" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
          </div>
        </div>
      </div>
    </section>

  </main>
    
@endsection