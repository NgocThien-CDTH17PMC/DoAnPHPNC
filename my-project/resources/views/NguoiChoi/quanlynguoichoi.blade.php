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
	$("#nguoi-choi-datatable").DataTable({
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
			<h4 class="page-title">Quản lý người chơi</h4>
		</div>
	</div>
</div> 
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Danh sách người chơi</h4>
				<table id="nguoi-choi-datatable" class="table nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên Đăng Nhập</th>
							<th>Mật Khẩu</th>
							<th>Email</th>
							<th>Hình Đại Diện</th>
							<th>Điểm Cao Nhất</th>
							<th>Số Credit</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach($dsNguoiChoi as $NguoiChoi)
						<tr>
							<td>{{ $NguoiChoi->id }}</td>
							<td>{{ $NguoiChoi->ten_dang_nhap }}</td>
							<td>{{ $NguoiChoi->mat_khau }}</td>
							<td>{{ $NguoiChoi->email }}</td>
							<td>{{ $NguoiChoi->hinh_dai_dien }}</td>
							<td>{{ $NguoiChoi->diem_cao_nhat }}</td>
							<td>{{ $NguoiChoi->credit }}</td>
							<td>
								<button type="button" class="btn btn-danger waves-effect waves-light">
									<i class="mdi mdi-close"></i>
								</button>
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