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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ route('signals.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tạo tín hiệu</label>
                                <input type="text" class="form-control col-md-4" placeholder="Nhập tên tín hiệu"
                                       name="name_signal">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Chọn chiến lược</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="signal">
                                        <option v-for="getSignal in getSignals" v-bind:value="getData.id"><% getSignal.name %></option>

{{--                                        <option v-for="getData in getDatas">{{ $name->name }}</option>--}}

                                    </select>
                                </div>
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
