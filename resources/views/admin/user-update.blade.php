@extends('layout.admin')

@section('title')
  <title>Update User | DPKKA - Universitas Airlangga</title>
@endsection

@section('user', '')

@section('main')
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item"><a href="{{ route('user') }}" data-bs-toggle="modal" data-bs-target="#cancelFormModal">User</a></li>
          <li class="breadcrumb-item active">Update User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update User</h5>
          <!-- General Form Elements -->
          <form action="{{ route('user-update', $user->id) }}" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}">
                @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>

            <fieldset class="row mb-3">
              <legend class="col-form-label col-sm-2 pt-0">Status</legend>
              <div class="col-sm-10">
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="active" @if ($user->status == 'active') checked @endif>
                  <label class="form-check-label" for="gridRadios1">
                    Active
                  </label>
                </div>
                <div class="form-check" >
                  <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="inactive" @if ($user->status == 'inactive') checked @endif>
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
                        <a href="{{ route('user') }}" class="btn btn-danger" role="button" aria-pressed="true">Discard</a>
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