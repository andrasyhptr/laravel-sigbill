@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Tambah Data Lokasi Billboard
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('info.index')}}">Kembali</a>
          <h1>Tambah Data Lokasi Billboard</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <form action="{{route('info.store')}}" method="post" enctype="multipart/form-data">
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
              <label>Nama</label>
              <input type="text" name="nama" id="nama" placeholder="Nama" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="jalan" id="jalan" placeholder="Alamat" class="form-control">
            </div>
          </div>
		  <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Latitude</label>
              <input type="text" name="kordinat_x" id="kordinat_x" placeholder="Latitude" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Longitude</label>
              <input type="text" name="kordinat_y" id="kordinat_y" placeholder="Longitude" class="form-control">
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
  			  <label for="sel1">Status</label>
  			  <select class="form-control" name="id">
  			  	@foreach($kecamatan as $kecamatan)
  			  	<option value="{{$kecamatan->id}}">{{$kecamatan->status}}</option>
  			  	@endforeach
  			  </select>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
          <label for="sel1">Jenis</label>
          <select class="form-control" name="id">
            @foreach($jenis as $jenis)
            <option value="{{$jenis->id}}">{{$jenis->tipe}}</option>
            @endforeach
          </select>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
  			  <label for="sel1">Media</label>
  			  <select class="form-control" name="id">
  			  	@foreach($kategori as $kategori)
  			  	<option value="{{$kategori->id}}">{{$kategori->media}}</option>
  			  	@endforeach
  			  </select>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" id="keterangan" placeholder="Keterangan" class="form-control">
            </div>
          </div>
        </div>
        <input type="submit" value="Simpan" id="save" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection