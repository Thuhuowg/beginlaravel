<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:20'
        ], [
            'username.required' => 'Username không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu không quá 20 ký tự'
        ]);
       echo 'Xu ly tiep';
    }
}
