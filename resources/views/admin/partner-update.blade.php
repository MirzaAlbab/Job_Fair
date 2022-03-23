@extends('layout.admin')

@section('title')
    <title>Update Partner | DPKKA - Universitas Airlangga</title>
@endsection

@section('partner', '')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Partner</h1>
      <nav>
        <ol class="breadcrumb">
          {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" data-bs-toggle="modal" data-bs-target="#cancelFormModal">Home</a></li> --}}
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item"><a href="{{ route('partner') }}" data-bs-toggle="modal" data-bs-target="#cancelFormModal">Partner</a></li>
          <li class="breadcrumb-item active">Update Partner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Partner</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
    
          <!-- General Form Elements -->
          <form action="{{ route('partner-update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Partner Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="{{ $partner->company }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputDescription" class="col-sm-2 col-form-label">Partner Profile</label>
              <div class="col-sm-10">
                <div>
                    <textarea class="form-control" id="editor" name="deskripsi">{!! $partner->description !!}</textarea>
                </div>  
              </div>
            </div>
            
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">AOCF Period</label>
              <div class="col-sm-10">
                {{-- <select class="form-select search-select" aria-label="Default select example" name="periode">
                  <option value=""></option>
                  <option value="1">AOCF 1</option>
                  <option value="2">AOCF 2</option>
                  <option value="3">AOCF 3</option>
                  <option value="4">AOCF 4</option>
                  <option value="5">AOCF 5</option>
                </select> --}}
                <select class="form-select search-select" aria-label="Default select example" name="periode">
                  <option value=""></option>
                  @foreach ($careers as $car)
                    @if ($car->id == $partner->career_id)
                      <option value="{{ $car->id }}" selected="selected">{{ $car->title }}</option>
                    @else
                      <option value="{{ $car->id }}">{{ $car->title }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
            
            <div class="row mb-3">
              <label for="inputImage" class="col-sm-2 col-form-label">Upload Partner Logo</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="logo">
                @if ($partner->img)
                  <img src="{{ $partner->img }}" alt="{{ $partner->img }}" width="300px">
                @endif
              </div>
            </div>
            

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Partner Type</label>
              <div class="col-sm-10">
                <select class="form-select search-select" aria-label="Default select example" aria-placeholder="Open this select menu" name="jenis">
                  <option value=""></option>
                  <option value="1">Sponsor</option>
                  <option value="2">Participant</option>
                </select>
              </div>
            </div>

            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">Status</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="active" @if ($partner->status == 'active') checked @endif>
                  <label class="form-check-label" for="gridRadios1">
                    Active
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="inactive" @if ($partner->status == 'inactive') checked @endif>
                  <label class="form-check-label" for="gridRadios2">
                    Inactive
                  </label>
                </div>

              </div>
            </fieldset>
    
            <div class="row mb-3">
                <div class="col-sm-2">
                    <!-- Vertically centered Modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancelFormModal">
                        Cancel
                    </button>
                    <div class="modal fade" id="cancelFormModal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Discard Changes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Are you sure you want to discard all your changes?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="{{ route('partner') }}" class="btn btn-danger" role="button" aria-pressed="true">Discard</a>
                            </div>
                        </div>
                        </div>
                    </div><!-- End Vertically centered Modal-->
                </div>
                <div class="col-sm-10 text-end">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </div>
    
          </form><!-- End General Form Elements -->
    
        </div>
      </div>
    </section>

  </main>
    
@endsection