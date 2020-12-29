@extends('layouts.admin')

@section('title')
    <title>Chiến lược</title>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'admin', 'key' => 'Chiến lược'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-0">
                        <a href="{{ route('strategies.create') }}" class=".btn btn-success float-right m-2 bt-strategy">Thêm chiến lược</a>

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
                        <tr v-for="getstrategy in getstrategies">
                            <th scope="row"><% getstrategy.id %></th>
                            <td><% getstrategy.names %></td>
                            <td><% getstrategy.created_at %></td>

                            <td>
                                <a v-bind:href="editUrl(getstrategy.id)" class="btn btn-default">sửa</a>
                                <a v-bind:href="deleteUrl(getstrategy.id)" class="btn btn-danger">Xóa</a>
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

@push('scripts')
    <script>
        var STRATEGY_EDIT_URL =  '{{ route('strategies.edit', ':id') }}'
        var STRATEGY_DELETE_URL =  '{{ route('strategies.delete', ':id') }}'
        var STRATEGY_UPDATE_URL =  '{{ route('strategies.update', ':id') }}'
    </script>
@endpush
