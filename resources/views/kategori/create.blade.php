@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Tambah Data Media
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Kembali</a>
          <h1>Tambah Data Media</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="row">
        @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Media</label>
              <input type="text" name="media" placeholder="Nama Media" class="form-control">
            </div>
          </div>
        <input type="submit" value="Simpan" id="save" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection