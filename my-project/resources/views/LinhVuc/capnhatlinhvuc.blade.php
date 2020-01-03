@extends('masterpages')

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Cập nhật thông tin lĩnh vực</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3 header-title">Sửa</h4>
				<form action="{{route('linh-vuc.xu-ly-cap-nhat-linh-vuc', $LinhVuc->id)}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="ten-linh-vuc">Tên lĩnh vực</label>
						<input type="text" class="form-control" id="ten-linh-vuc" name="ten_linh_vuc" value="{{ $LinhVuc->ten_linh_vuc }}">
					</div>
					<button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
				</form>
			</div> <!-- end card-body-->
		</div> <!-- end card-->
	</div>
	<!-- end col -->
@endsection