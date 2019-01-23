@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Jenis {{$jenis->tipe}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('jenis.index')}}">Kembali</a>
          <h1>Jenis {{$jenis->tipe}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="row">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Jenis</label>
              <p>{{$jenis->tipe}}</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection