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
	{!!$map['html']!!}
	<div id="directionsDiv"></div>
</div>
<div class="col-lg-12">
 	<p>
        <center>2019 @ SIGBill | Sistem Informasi Geografis Billboard</center>
    </p> 
</div>
@endsection
@section('script')
@endsection