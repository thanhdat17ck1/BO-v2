<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    public function register(){
        return view('signout');


    }
    public function postRegister(Request $request){
// Kiểm tra dữ liệu vào
$allRequest  = $request->all();
$validator = $this->validator($allRequest);

if ($validator->fails()) {
    // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
    return redirect('signout')->withErrors($validator)->withInput();
} else {
    // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
    if( $this->create($allRequest)) {
        // Insert thành công sẽ hiển thị thông báo
        Session::flash('success', 'Đăng ký thành công!');
        return redirect('signout');
    } else {
        // Insert thất bại sẽ hiển thị thông báo lỗi
        Session::flash('error', 'Đăng ký không thành công!');
        return redirect('signout');
    }
}


    }
    protected function validator(array $data)
{
    return Validator::make($data,
		[
			'fullname' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:10',
		],
		[
			'fullname.required' => 'Họ và tên là trường bắt buộc',
			'fullname.max' => 'Họ và tên không quá 255 ký tự',
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'email.max' => 'Email không quá 255 ký tự',
			'email.unique' => 'Email đã tồn tại',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'phone.max' => 'Số điện thoại không quá 20 ký tự ',
            'phone.required' => 'Số điện thoại là trường bắt buộc',
		]
	);
}
protected function create(array $data)
{
	return User::create([
		'fullname' => $data['fullname'],
        'email' => $data['email'],
        'password' => bcrypt($data['password']),
        'phone' => $data['phone'],
	]);
}



}
