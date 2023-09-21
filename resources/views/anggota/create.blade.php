@extends('master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode">Kode Anggota</label>
                    <input type="text" class="form-control" id="kode_anggota" name="kode_anggota" placeholder="">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="">
                        <label>Jenis Kelamin</label>
                        <select type="text" id="jk_anggota" name="jk_anggota" class="form-control">
                          <option></option>
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                    <label for="jurusan_anggota">Jurusan anggota</label>
                    <input type="text" class="form-control" id="jurusan_anggota" name="jurusan_anggota" placeholder="">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="number" class="form-control" id="no_telp_anggota" name="no_telp_anggota" placeholder="">
                    <div class="form-group">
                    <label for="alamat_anggota">Alamat</label>
                    <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="10" class="form-control" placeholder=""></textarea>
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
@endsection