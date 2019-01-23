@extends('layout.dashboard')
@section('title')
  SIGBill | Admin | Ubah Data Media {{$kategori->media}}
@endsection
@section('content')
<div id="wrapper">
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <a class="btn btn-info pull-right" href="{{route('kategori.index')}}">Kembali</a>
          <h1>Ubah Data Media {{$kategori->media}}</h1>
        </div>
      </div>
    </div>
    <div class="row">
      {!!Form::model($kategori, ['method' => 'PUT', 'route' => ['kategori.update', $kategori->id],'enctype' => 'multipart/form-data'])!!}
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
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$kategori->id}}">
          <div class="col-xs-18 col-md-12">
            <div class="form-group">
              <label>Nama Media</label>
              <input type="text" name="media" value="{{$kategori->media}}" placeholder="Nama Media" class="form-control">
            </div>
          </div>
        </div>
        <input type="submit" value="Ubah" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
@endsection