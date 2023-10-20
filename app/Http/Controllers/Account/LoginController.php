<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request->isMethod("POST")){
            if(Auth::attempt(["email"=>$request->email,"password"=>$request->password])){
                if(Auth::user()->role == 1){
                    Session::put('admin', 'admin');
                }
                Session::flash('success', 'Đăng nhập thành công!');
                return redirect()->route('index');
            }else{
                echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác!')</script>";
            }
            // dd(1);
        }
        return view('content.account.login');
    }
    //
}
