@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Anggota</h1>
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
                  <label for="nama_anggota">Nama</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{ $anggotas[0]->nama_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <input type="text" name="jk_anggota" id="jk_anggota" class="form-control" value="{{ $anggotas[0]->jk_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jurusan_anggota">Jurusan</label>
                  <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" value="{{ $anggotas[0]->jurusan_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="no_telp_anggota">No Telepon</label>
                  <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" value="{{ $anggotas[0]->no_telp_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="10" class="form-control" disabled>{{ $anggotas[0]->alamat_anggota }}</textarea>
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