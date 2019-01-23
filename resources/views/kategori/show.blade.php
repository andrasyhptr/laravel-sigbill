@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Media {{$kategori->media}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Kembali</a>
          <h1>Media {{$kategori->media}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Media</label>
              <p>{{$kategori->media}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection