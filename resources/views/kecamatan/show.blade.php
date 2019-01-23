@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Status {{$kecamatan->status}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kecamatan.index')}}">Kembali</a>
          <h1>Status {{$kecamatan->status}} </h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Status</label>
              <p>{{$kecamatan->status}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection