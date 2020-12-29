@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
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
                    <div class="col-lg-6">
                        <form action="{{ route('strategies.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tạo chiến lượt</label>
                                <input type="text" class="form-control col-md-4" placeholder="Nhập tên chiến lượt"
                                       name="name_stratery">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Chọn tín hiệu</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="signal">
                                    <option v-for="getData in getDatas" v-bind:value="getData.id"><% getData.names %></option>

                                    {{--<option v-for="getData in getDatas">{{ $name->name }}</option>--}}

                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <!-- /.content -->
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

@endsection
