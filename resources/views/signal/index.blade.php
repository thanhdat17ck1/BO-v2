@extends('layouts.signal')

@section('title')
    <title>Tín hiệu</title>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'admin', 'key' => 'Tín hiệu'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-0">
                        <a href="{{ route('signals.create') }}" class=".btn btn-success float-right m-2 bt-strategy">Thêm tín hiệu</a>

                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên chiến lược</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="getSignal in getSignals">
                            <th scope="row"><% getSignal.id %></th>
                            <td><% getSignal.name %></td>
                            <td><% getSignal.created_at %></td>
                            <td>
                                <button class="btn btn-default">Sửa</button>
                                <button class="btn btn-danger">Xóa</button>
                            </td>
                        </tr>

                    </table>
                    {{--                    <div class="col-lg-6">--}}
                    {{--                        <form>--}}
                    {{--                            <div class="form-group">--}}
                    {{--                                <label for="exampleInputEmail1">Tạo chiến lượt</label>--}}
                    {{--                                <input type="text" class="form-control col-md-4" placeholder="Nhập tên chiến lượt"--}}
                    {{--                                       name="name_strategy">--}}
                    {{--                            </div>--}}
                    {{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}
                    {{--                        </form>--}}
                    {{--                        <!-- /.content -->--}}
                    {{--                    </div>--}}
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

@endsection
