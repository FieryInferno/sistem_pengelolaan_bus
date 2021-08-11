@extends('template')
@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Member</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Member</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Member</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/member/tambah" class="btn btn-primary">Tambah</a>
                @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama Member</th>
                        <th>Nama PO</th>
                        <th>#</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($member as $m)
                        <tr>
                          <td>{{ $m->nama_member }}</td>
                          <td>{{ $m->nama_po }}</td>
                          <td>
                            <a href="/member/edit/{{ $m->id }}" class="btn btn-success">Edit</a>
                            <a href="/member/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>                
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection