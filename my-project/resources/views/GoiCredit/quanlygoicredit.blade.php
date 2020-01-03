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
    $("#goi-credit-datatable").DataTable({
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
            <h4 class="page-title">Quản lý gói credit</h4>
        </div>
    </div>
</div> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách các gói credit</h4>
                <a href="{{route('goi-credit.them-moi-goi-credit')}}" class="btn btn-primary waves-effect waves-light" style="margin-bottom: 10px">Thêm mới</a>
                <table id="goi-credit-datatable" class="table nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên Gói</th>
                            <th>Credit</th>
                            <th>Số Tiền</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dsGoiCredit as $GoiCredit)
                        <tr>
                            <td>{{ $GoiCredit->id }}</td>
                            <td>{{ $GoiCredit->ten_goi }}</td>
                            <td>{{ $GoiCredit->credit }}</td>
                            <td>{{ $GoiCredit->so_tien }}</td>
                            <td>
                                <form action="{{ route('goi-credit.xoa-goi-credit', $GoiCredit->id) }}" method="POST">
                                    @csrf
                                    <a href="{{ route('goi-credit.cap-nhat-goi-credit' , $GoiCredit->id) }}" class="btn btn-info waves-effect waves-light">
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