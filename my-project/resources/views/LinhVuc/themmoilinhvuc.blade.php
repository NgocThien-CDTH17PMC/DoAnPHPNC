@extends('masterpages')

@section('css')
<!-- Sweet Alert-->
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>

<!-- Error Alert -->
@if(session('error'))
<script type="text/javascript">
	Swal.fire({
		type: "error",
		title: "Oops...",
		text: "{{session('error')}}"
	})
</script>
@endif

@endsection

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Thêm mới lĩnh vực</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3 header-title">Thêm mới</h4>
				<form action="{{route('linh-vuc.xu-ly-them-moi-linh-vuc')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="ten-linh-vuc">Tên lĩnh vực</label>
						<input type="text" class="form-control" id="ten-linh-vuc" placeholder="Nhập tên lĩnh vực" name="ten_linh_vuc">
					</div>
					<button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
				</form>
			</div> <!-- end card-body-->
		</div> <!-- end card-->
	</div>
	<!-- end col -->
@endsection