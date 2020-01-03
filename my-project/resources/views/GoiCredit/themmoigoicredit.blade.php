@extends('masterpages')

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Thêm mới</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3 header-title">Thêm mới</h4>
				<form action="{{ route('goi-credit.xu-ly-them-moi-goi-credit') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="ten-goi">Tên gói</label>
						<input type="text" class="form-control" id="ten-goi" placeholder="Nhập tên của gói credit mới" name="ten_goi">
					</div>
					<div class="form-group">
						<label for="credit">Số credit</label>
						<input type="text" class="form-control" id="credit" placeholder="Nhập số lượng credit" name="credit">
					</div>
					<div class="form-group">
						<label for="so-tien">Số tiền</label>
						<input type="text" class="form-control" id="so-tien" placeholder="Nhập số tiền của gói" name="so_tien">
					</div>
					<button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
				</form>

			</div> <!-- end card-body-->
		</div> <!-- end card-->
	</div>
	<!-- end col -->
@endsection