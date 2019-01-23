@extends('layout.dashboard')
@section('title')
    SIGBill | Admin | Kelola Data Info Lokasi Billboard
@endsection
@section('style')
    <link href="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.css')!!}" rel="stylesheet" />
@endsection
@section('content')
    <!--  wrapper -->
    <div id="wrapper">
        <!--  page-wrapper -->
        <div id="page-wrapper">
			
				
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                    	<a type="button" href="{{route('info.create')}}" class="btn btn-info pull-right">Tambah Data Baru</a>
                    	<h1>Kelola Data Info Lokasi Billboard</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
										<th>ID</th>
										<th>Nama</th>
										<th>Alamat</th>
										<th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Status</th>
                                        <th>Tipe</th>
										<th>Media</th>
                                        <th>Keterangan</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										@foreach($info as $key => $info)
										<tr>
											<td>{{$info->id}}</td>
											<td>{{$info->nama}}</td>
											<td>{{$info->jalan}}</td>
											<td>{{$info->kordinat_x}}</td>
                                            <td>{{$info->kordinat_y}}</td>
                                            <td>{{$info->id_status}}</td>
											<td>{{$info->id_jenis}}</td>
                                            <td>{{$info->id_media}}</td>
                                            <td>{{$info->keterangan}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('info.show', $info->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('info.edit', $info->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('info.delete', $info->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
											</td>
										</tr>
										@endforeach
									</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
@endsection
@section('script')
    <script src="{!!asset('assets/plugins/dataTables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/jquery.dataTables.js')!!}"></script>
    <script src="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.js')!!}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection