@extends('masterpages')

@section('main-content')
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<h4 class="page-title">Cập nhât thông tin gói credit</h4>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h4 class="mb-3 header-title">Sửa</h4>
				<form action="{{ route('goi-credit.xu-ly-cap-nhat-goi-credit', $GoiCredit->id) }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="ten-goi">Tên gói</label>
						<input type="text" class="form-control" id="ten-goi" name="ten_goi" value="{{ $GoiCredit->ten_goi}}">
					</div>
					<div class="form-group">
						<label for="credit">Số credit</label>
						<input type="text" class="form-control" id="credit" name="credit" value="{{ $GoiCredit->credit}}">
					</div>
					<div class="form-group">
						<label for="so-tien">Số tiền</label>
						<input type="text" class="form-control" id="so-tien" name="so_tien" value="{{ $GoiCredit->so_tien}}">
					</div>
					<button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
				</form>

			</div> <!-- end card-body-->
		</div> <!-- end card-->
	</div>
	<!-- end col -->
@endsection