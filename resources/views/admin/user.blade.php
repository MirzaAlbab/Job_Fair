@extends('layout.admin')

@section('title')
    <title>User | DPKKA - Universitas Airlangga</title>
@endsection

@section('user', '')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              
              {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}
              <a href="{{ route('user-new') }}" class="btn btn-primary mb-3" role="button" aria-pressed="true"><i class="bi bi-plus-lg"></i> New User</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td class="align-middle">Company 5</td>
                    <td class="align-middle">17/02/2022</td>
                    <td class="align-middle">17/02/2023</td>
                    <td class="align-middle"><span class="badge rounded-pill bg-primary">Active</span></td>
                    <td class="align-middle">                       
                      <a href="{{ route('user-new') }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true" title="View"><i class="bi bi-eye"></i></a>
                      <a href="{{ route('user-new') }}" class="btn btn-warning btn-sm" role="button" aria-pressed="true" title="Edit"><i class="bi bi-pencil-square"></i></a>
                      <!-- Delete Modal -->
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteFormModal">
                        <i class="bi bi-trash"></i>
                      </button>
                      <div class="modal fade" id="deleteFormModal" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title">Delete Career Fair</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                              Are you sure you want to delete this Career Fair?
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <a href="{{ route('user') }}" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                              </div>
                          </div>
                          </div>
                      </div><!-- End Delete Modal-->
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection