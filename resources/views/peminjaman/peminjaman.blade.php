@extends('index')

@section('content')
  <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Pengembalian</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/pengembalian/store" method="POST">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputText">Tanggal Pinjam</label>
                      <input type="number" class="form-control" name="tanggal_pinjam" placeholder="">
                      <label for="exampleInputText">Tanggal Kembali</label>
                      <input type="text" class="form-control" name="tanggal_kembali" placeholder="">
                    </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                </div>
</div>
@endsection