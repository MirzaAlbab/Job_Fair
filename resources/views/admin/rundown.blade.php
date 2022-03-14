@extends('layout.admin')

@section('title')
    <title>Rundown | DPKKA - Universitas Airlangga</title>
@endsection

@section('rundown', '')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Rundown</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Rundown</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
              <a href="{{ route('rundown-new') }}" class="btn btn-primary mb-3" role="button" aria-pressed="true"><i class="bi bi-plus-lg"></i> New Rundown</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Time</th>
                    <th scope="col">Event</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rundowns as $rd)
                      
                  <tr>
                    <th scope="row">1</th>
                    <td class="align-middle">Non consectetur a erat nam at lectus urna duis?</td>
                    <td class="align-middle"><span class="badge rounded-pill bg-primary">Active</span></td>
                    <td class="align-middle">                       
                      <a href="{{ route('rundown-view',$rd->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true" title="View"><i class="bi bi-eye"></i></a>
                      <a href="{{ route('rundown-update',$rd->id) }}" class="btn btn-warning btn-sm" role="button" aria-pressed="true" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      <!-- Delete Modal -->
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteFormModal">
                        <i class="bi bi-trash"></i>
                      </button>
                      <div class="modal fade" id="deleteFormModal" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title">Delete Rundown</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              Are you sure you want to delete this Rundown?
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <a href="{{ route('rundown') }}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                              </div>
                          </div>
                          </div>
                      </div><!-- End Delete Modal-->
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              {{ $rundowns->links() }}
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection