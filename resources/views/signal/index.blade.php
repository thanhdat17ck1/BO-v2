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
                        <a href="{{ route('signals.create') }}" class=".btn btn-success float-right m-2 bt-strategy">Thêm
                            tín hiệu</a>

                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên tín hiệu</th>
                            <th scope="col">Mẫu tín hiệu</th>
                            <th scope="col">Danh sách lượt đánh</th>
                            <th scope="col">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($signals as $signal)
                            <tr>
                                <th scope="row">{{ $signal->id }}</th>
                                <td>{{ $signal->name }}</td>
                                <td>{{ $signal->signal_pattern }}</td>
                                <td>{{ json_encode(json_decode($signal->selection),JSON_UNESCAPED_UNICODE) }}</td>
                                <!-- <td>{{ json_decode($signal->selection[0] ) }}</td> -->
                                
                                <td>
                                    <a href="{{ route('signals.edit',['id' => $signal->id]) }}"
                                       class="btn btn-default">Edit</a>
                                    <a href="{{ route('signals.delete',['id' => $signal->id ]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-12">
                    {{ $signals->links() }}
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
