@extends('layout')

@section('content')
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
    <form action="{{ url('/signout') }}" method="post">
        {{ csrf_field() }}
        <div id="signout">
            <h3 class="text-center text-white pt-5"> ĐĂNG KÝ TÀI KHOẢN</h3>
            <div class="container">
                <div id="signout-row" class="row justify-content-center align-items-center">
                    <div id="signout-column" class="col-md-6">
                        <div id="signout-box" class="col-md-12">
                            <form id="signout-form" class="form" action="" method="post">
                                @csrf
                                <h3 class="text-center text-info">ĐĂNG KÍ TÀI KHOẢN </h3>
                                <div class="form-group">
                                    <label for="fullname" class="text-info">Fullname:</label><br>
                                    <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}"class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-info">Email:</label><br>
                                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="text-info">Phone:</label><br>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>


                                <div class="form-group">

                                    <input type="submit" name="Đăng kí" class="btn btn-info btn-md" value="Đăng kí">
                                </div>
                                <center><a href="{{ url('login') }}">Quay về đăng nhập</a></center>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
