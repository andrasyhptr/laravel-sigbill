@extends('layout.maindashboard')
@section('title')
    SIGBill | Lokasi Billboard
@endsection
@section('style')
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@endsection
@section('content')
<div class="col-lg-12">
    <p>
        <center>
        <div class="h3"><strong>LOKASI BILLBOARD</strong>
        </center>
    </p>
    <p></p>>
</div>

<div class="col-lg-9">
	{!!$map['html']!!}
</div>
@endsection
@section('script')
@endsection