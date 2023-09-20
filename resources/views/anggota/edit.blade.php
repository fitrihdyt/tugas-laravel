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
            <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_anggota">Nama</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{ $anggotas[0]->nama_anggota }}">
                </div>
                @error('nama_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <input type="text" name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                </div>
                @error('jk_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="jurusan_anggota">Jurusan</label>
                  <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jurusan_anggota }}">
                </div>
                @error('jurusan_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  <div class="form-group">
                  <label for="no_telp_anggota">No Telepon</label>
                  <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{ $anggotas[0]->no_telp_anggota }}">
                </div>
                @error('no_telp_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="10" class="form-control @error('alamat_anggota') is-invalid @enderror">{{ $anggotas[0]->alamat_anggota }}</textarea>
                </div>
                @error('alamat_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update</button>
              </div>
            </form>
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