@extends('layout.dashboard')
@section('title')
SIGBill | Admin | Tambah Data Jenis
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('jenis.index')}}">Kembali</a>
          <h1>Tambah Data Jenis</h1>
        </div>
      </div>
    </div>
    <div class="row">
              @include('include.admin.status')

          <form class="form-horizontal" role="form" method="POST" action="{{route('.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div class="form-group">
              <label class="col-md-4 control-label">Nama Jenis</label>
              <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
            </div>
          </form>
    </div>
  </div>
</div>
@endsection