<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //显示登录页面
    public function login(){

        return view('login');
    }
    // 处理登陆页面
    public function dologin(){
        // 接收值
        $username = $_POST['username'];
        $password = $_POST['password'];
        // 判断 后台用户名和密码是否是  admin  admin
        if($username=='admin' && $password=='admin'){
            // 成功跳转到后台页面
            return redirect()->route('adindex');
        }else{
           return back()->withErrors('用户名或者密码错误');
        }
    }
}
