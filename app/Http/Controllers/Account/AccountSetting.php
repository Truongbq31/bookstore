<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountSetting extends Controller
{

    public function profileSetting(){
        return view('content.account.profile');
    }
    public function changePassword(Request $request){
        if($request->isMethod("POST")){
            $newPassword = $request->password == $request->confirm_password ? Hash::make($request->password) : false;
            if($newPassword){
                User::where('id', Auth::user()->id)->update([
                    'password' => $newPassword
                ]);
                Session::flash('success', 'Đổi mật khẩu thành công!');
                return redirect()->route('profileSetting');
            }
        }
        return view('content.account.profile');
    }
    //
}
