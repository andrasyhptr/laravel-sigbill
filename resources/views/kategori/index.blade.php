@extends('layout.dashboard')
@section('title')
    SIGBill | Admin | Kelola Data Media
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
                    	<a type="button" href="{{route('kategori.create')}}" class="btn btn-info pull-right">Tambah Data Media</a>
                    	<h1>Kelola Data Media</h1>
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
										<th>Nama Media</th>
										<th>Aksi</th>
									</thead>
									<tbody>
										@foreach($kategori as $key => $kategori)
										<tr>
											<td>{{$kategori->id}}</td>
											<td>{{$kategori->media}}</td>
											<td>
												<a class="btn btn-success btn-edit" href='{{route('kategori.show', $kategori->id)}}'><i class="glyphicon glyphicon-eye-open"></i></a>
                                                <a class="btn btn-success btn-edit" href='{{route('kategori.edit', $kategori->id)}}'><i class="glyphicon glyphicon-edit"></i></a>
												<a class="btn btn-danger btn-delete" href='{{route('kategori.delete', $kategori->id)}}'><i class="glyphicon glyphicon-remove"></i></a>
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