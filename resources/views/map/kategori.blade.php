@extends('layout.maindashboard')
@section('title')
    SIGBill | Daftar Billboard
@endsection
@section('style')
<script type="text/javascript">var centreGot = false;</script>
    {!!$map['js']!!}
@endsection
@section('content')  
<div class="col-lg-12">
    <p>
        <center>
        <div class="h3"><strong>DAFTAR BILLBOARD</strong>
        </center>
    </p>
    <p></p>>
</div>

<div class='col-lg-12'>
	<div class="panel panel-default">
       	<div class="panel-body">
           	<div class="table-responsive">
               	<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<tbody>
						<thead>
							<th>No</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Status</th>
							<th>Jenis</th>
							<th>Media</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</thead>
						<?php $no = 1; ?>
						@foreach($infolist as $info)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$info->nama}}</td>
							<td>{{$info->jalan}}</td>
							<td>{{$info->kecamatan->status}}</td>
							<td>{{$info->jenis->tipe}}</td>
							<td>{{$info->kategori->media}}</td>
							<td>{{$info->keterangan}}</td>
							<td>
								<a class="btn btn-danger btn-primary" href='{{route('map.direction', $info->id)}}'>Lihat Lokasi</a>
							</td>
						</tr>
						@endforeach
					</tbody>
               	</table>
           	</div>
       	</div>
   	</div>
</div>

 	<p>
        <center>2019 @ SIGBill | Sistem Informasi Geografis Billboard</center>
    </p>
@endsection
@section('script')
@endsection