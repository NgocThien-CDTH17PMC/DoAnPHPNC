@extends('masterpages')

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@section('js')
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
	$("#cau-hoi-datatable").DataTable({
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
			<h4 class="page-title">Quản lý câu hỏi</h4>
		</div>
	</div>
</div> 
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Danh sách câu hỏi</h4>
				<a href="{{ route('cau-hoi.them-moi-cau-hoi') }}" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 10px">Thêm mới</a>
				<table id="cau-hoi-datatable" class="table nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nội Dung</th>
							<th>Lĩnh Vực</th>
							<th>Phương Án A</th>
							<th>Phương Án B</th>
							<th>Phương Án B</th>
							<th>Phương Án B</th>
							<th>Đáp Án</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach($dsCauHoi as $CauHoi)
						<tr>
							<td>{{$CauHoi->id}}</td>
							<td>{{$CauHoi->noi_dung}}</td>
							<td>{{$CauHoi->linhVuc->ten_linh_vuc}}</td>
							<td>{{$CauHoi->phuong_an_a}}</td>
							<td>{{$CauHoi->phuong_an_b}}</td>
							<td>{{$CauHoi->phuong_an_c}}</td>
							<td>{{$CauHoi->phuong_an_d}}</td>
							<td>{{$CauHoi->dap_an}}</td>
							<td>
								<form action="{{ route('cau-hoi.xoa-cau-hoi', $CauHoi->id) }}" method="POST">
									@csrf
									<a href="{{ route('cau-hoi.cap-nhat-cau-hoi' , $CauHoi->id) }}" class="btn btn-info waves-effect waves-light">
										<i class="mdi mdi-pencil"></i>
									</a>
									<button type="submit" class="btn btn-danger waves-effect waves-light btn-info">
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