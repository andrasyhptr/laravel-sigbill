@extends('layout.dashboard')
@section('title')
Informasi {{$info->nama}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('info.index')}}">Kembali</a>
          <h1>Info {{$info->nama}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama</label>
              <p>{{$info->nama}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Alamat</label>
              <p>{{$info->jalan}}</p>
            </div>
          </div>
		  <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Latitude</label>
              <p>{{$info->kordinat_x}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Longitude</label>
              <p>{{$info->kordinat_y}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
  			      <label>Status</label>
              <p>{{$info->kecamatan->status}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Jenis</label>
              <p>{{$info->jenis->tipe}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
  			      <label>Media</label>
              <p>{{$info->kategori->media}}</p>
            </div>
          </div>
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Keterangan</label>
              <p>{{$info->keterangan}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection