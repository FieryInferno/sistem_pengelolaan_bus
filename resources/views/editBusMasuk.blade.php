@extends('template')
@section('konten')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bus Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/bus_masuk">Bus Masuk</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title">Edit Bus Masuk</h3>
              </div>
              <form action="/bus_masuk/edit/{{ $id }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <!-- /.card-header -->
                <div class="card-body">
                  @if ($errors->any)
                    <div class="alert alert-danger">
                      Data yang dimasukan tidak sesuai
                    </div>
                  @endif
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Member</label>
                    <select name="member_id" id="member_id" class="form-control">
                      <option value="">Pilih Member</option>
                      @foreach ($member as $m)
                        <option value="{{ $m->id }}" <?= $m->id == $member_id ? 'selected' : '' ; ?>>{{ $m->nama_member }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Masuk</label>
                    <input type="date" class="form-control" placeholder="Tanggal Masuk" name="tanggal_masuk" value="{{ $tanggal_masuk }}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer"><!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Anda yakin akan menambah data?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
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