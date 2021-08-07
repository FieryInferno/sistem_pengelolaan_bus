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
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>Nama PO</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($member as $m)
                      <tr>
                        <td><img src="{{ asset('foto_member' . $m->foto) }}" alt=""></td>
                        <td>{{ $m->nama }}</td>
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