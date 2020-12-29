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
                        <form action="{{ route('strategies.update', ['id' => $strategy->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên chiến lượt</label>
                                <input type="text" class="form-control col-md-4" placeholder="Nhập tên chiến lượt"
                                       name="name_stratery" v-bind:value="getstrategies[].names">
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

@push('scripts')
    <script>
        var STRATEGY_UPDATE_URL =  '{{ route('strategies.update', ':id') }}'
        var STRATEGY_GETID =  '{{ 'id' }}'
    </script>
@endpush
