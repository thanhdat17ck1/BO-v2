@extends('layouts.signal')

@section('title')
    <title>Trang chủ</title>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'admin', 'key' => 'Tín hiệu'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('signals.update', ['id'=> $signal->id]) }}" method="post">
                            @csrf
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên tín hiệu
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Tên tín hiệu" name="name" value="{{ $signal->name }}">
                                        <label>Mẫu tín hiệu
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Mẫu tín hiệu"
                                               name="signal_pattern" value="{{ $signal->signal_pattern }}">

                                        <label for="exampleSelect1">Lựa chọn khi thắng<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleSelect1" name="option_win" value="{{ $signal->option_win }}">
                                            <option value="đánh tiếp">đánh tiếp</option>
                                            <option value="quay lại từ đầu">quay lại từ đầu</option>
                                        </select>
                                        <label for="exampleSelect1">Lựa chọn khi thua<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleSelect1" name="option_loss" value="{{ $signal->option_loss }}">
                                            <option value="đánh tiếp">đánh tiếp</option>
                                            <option value="quay lại từ đầu">quay lại từ đầu</option>
                                        </select>
                                        <label>Số lượt đánh
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Số lượt đánh"
                                               name="number_of_turns">

                                        <a href="#" id="btn-tao">Tạo</a>
                                        <div id="them" class="col-md-5">

                                        </div>                                       
                                        <button type="submit" class="btn btn-primary">Tạo tín hiệu</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>         
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <script>
        $(document).ready(function () {
            $("#btn-tao").on('click', function (e) {
                $("#them").empty();
                e.preventDefault();
                $sl = $('input[name="number_of_turns"]').val();
                for (var i = 1; i <= $sl; i++) {
                    $("#them").append(
                        '<div class="abc">' +
                        '<label for="exampleSelect1">Lượt ' + i + '<span class="text-danger">*</span></label>' +
                        '<label for="exampleSelect1">Lựa chọn<span class="text-danger">*</span></label>' +
                        '<select class="form-control" id="exampleSelect1" name="selection[]">' +
                        '<option value="Tăng">Tăng</option>' +
                        '<option value="Giảm">Giảm</option>' +
                        '</select>' +
                        '<label>Số tiền đặt cược<span class="text-danger">*</span></label>' +
                        '<input type="text" class="form-control" placeholder="Số tiền đặt cược" name="bet_amount[]">' +
                        '</div>'
                    )
                }
            })
        });
    </script>
@endsection
