@extends('masterpages')

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Cập nhật thông tin câu hỏi</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3 header-title">Sửa</h4>
				<form action="{{ route('cau-hoi.xu-ly-cap-nhat-cau-hoi', $CauHoi->id) }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="noi-dung-cau-hoi">Nội dung</label>
						<input type="text" class="form-control" id="noi-dung-cau-hoi" name="noi_dung_cau_hoi" value="{{ $CauHoi->noi_dung }}">
					</div>
					<div class="form-group">
						<label for="linh-vuc">Lĩnh Vực</label>
						<select id="linh-vuc" name="linh_vuc" class="form-control">
							<option>Chọn lĩnh vực</option>
							@foreach($dsLinhVuc as $LinhVuc)
							<option value="{{ $LinhVuc->id }}">{{ $LinhVuc->ten_linh_vuc }}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<label for="phuong-an-a">Phương án A</label>
						<input type="text" class="form-control" id="phuong-an-a" name="phuong_an_a" value="{{ $CauHoi->phuong_an_a }}">
					</div>
					<div class="form-group">
						<label for="phuong-an-b">Phương án B</label>
						<input type="text" class="form-control" id="phuong-an-b" name="phuong_an_b" value="{{ $CauHoi->phuong_an_b }}">
					</div>
					<div class="form-group">
						<label for="phuong-an-c">Phương án C</label>
						<input type="text" class="form-control" id="phuong-an-c" name="phuong_an_c" value="{{ $CauHoi->phuong_an_c }}">
					</div>
					<div class="form-group">
						<label for="phuong-an-d">Phương án D</label>
						<input type="text" class="form-control" id="phuong-an-d" name="phuong_an_d" value="{{ $CauHoi->phuong_an_d }}">
					</div>
					<div class="form-group">
						<label for="dap-an">Đáp án</label>
						<input type="text" class="form-control" id="dap-an" name="dap_an" value="{{ $CauHoi->dap_an }}">
					</div>
					<button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
				</form>

			</div> <!-- end card-body-->
		</div> <!-- end card-->
	</div>
	<!-- end col -->
@endsection