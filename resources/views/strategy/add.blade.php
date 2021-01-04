@extends('layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'admin', 'key' => 'Thêm chiến lược'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('signals.store') }}" method="post" class="form" id="form-1">
                            @csrf
                            <div class="card card-custom gutter-b example example-compact">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên chiến lược
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Tên chiến lược"
                                               name="name">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Mô tả"
                                               name="signal_pattern">
                                    </div>
                                    
                                    <div class="form-group row align-items-center">
                                        <label class="col-lg-2 col-form-label text-right">Lựa chọn tín hiệu</label>
                                        <div class="col-lg-6">
                                            <div class="checkbox-inline">
                                            
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>email
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>email
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>email
                                                </label>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Tạo chiến lược</button>

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

@endsection
