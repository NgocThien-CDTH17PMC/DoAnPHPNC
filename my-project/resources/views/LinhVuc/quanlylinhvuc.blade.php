@extends('masterpages')

@section('css')

<!-- Sweet Alert-->
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

@endsection

@section('js')

<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

<!-- Add Success Alert -->
@if(session('success')) 
<script type="text/javascript">
	Swal.fire({
		title: "Success!",
		text: "{{session('success')}}",
		type: "success"
	})
</script>
@endif

<!-- Update Success Alert -->
@if(session('update'))
<script type="text/javascript">
	Swal.fire({
		title: "Success!",
		text: "{{session('update')}}",
		type: "success"
	})
</script>
@endif

<!-- Delete Success Alert -->
@if(session('delete'))
<script type="text/javascript">
	Swal.fire({
		title: "Success!",
		text: "{{session('delete')}}",
		type: "success"
	})
</script>
@endif

<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script type="text/javascript">
	$("#linh-vuc-datatable").DataTable({
		language: {
			paginate: {
				previous: "<i class='mdi mdi-chevron-left'>",
				next: "<i class='mdi mdi-chevron-right'>"
			}
		},
		drawCallback: function() {
			$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
		}
	});
</script>

@endsection

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Quản lý lĩnh vực</h4>
		</div>
	</div>
</div> 
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Danh sách lĩnh vực</h4>
				<a href="{{route('linh-vuc.them-moi-linh-vuc')}}" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 10px">Thêm mới</a>
				<a href="{{route('linh-vuc.ds-thung-rac-linh-vuc')}}" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 10px">Thùng Rác</a>
				<table id="linh-vuc-datatable" class="table nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên Lĩnh Vực</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach($dsLinhVuc as $linhvuc)
						<tr>
							<td>{{$linhvuc->id}}</td>
							<td>{{$linhvuc->ten_linh_vuc}}</td>
							<td>
								<form action="{{ route('linh-vuc.xoa-linh-vuc', $linhvuc->id) }}" method="POST">
									@method('DELETE')
									@csrf
									<a href="{{ route('linh-vuc.cap-nhat-linh-vuc', $linhvuc->id) }}" class="btn btn-info waves-effect waves-light">
										<i class="mdi mdi-pencil"></i>
									</a>
									<button type="submit" class="btn btn-danger waves-effect waves-light btn-info" id="sa-warning">
										<i class="mdi mdi-close"></i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>
@endsection