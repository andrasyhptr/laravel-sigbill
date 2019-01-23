@extends('layout.dashboard')
@section('title')
    SIGBill | Admin | Kelola Data Jenis
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
                    	<a type="button" href="{{route('jenis.create')}}" class="btn btn-info pull-right">Tambah Data Jenis</a>
                    	<h1>Kelola Data Jenis</h1>
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
										<th>Nama Jenis</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										@foreach($jenis as $key => $jenis)
										<tr>
											<td>{{$jenis->id}}</td>
											<td>{{$jenis->tipe}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('jenis.show', $jenis->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('jenis.edit', $jenis->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('jenis.delete', $jenis->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
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
    <script src="{!!asset('assets/plugins/dataTables/dataTables.bootstrap.js')!!}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
@endsection