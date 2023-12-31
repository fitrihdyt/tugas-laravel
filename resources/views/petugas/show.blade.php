@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>petugas Petugas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_petugas">Nama</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{ $petugass[0]->nama_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jabatan_petugas">jabatan</label>
                  <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{ $petugass[0]->jabatan_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="no_telp_petugas">No Telepon</label>
                  <input type="number" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{ $petugass[0]->no_telp_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat_petugas">Alamat</label>
                  <textarea name="alamat_petugas" id="alamat_petugas" cols="30" rows="10" class="form-control" disabled>{{ $petugass[0]->alamat_petugas }}</textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                
              </div>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection