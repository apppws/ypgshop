<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class AdminLoginController extends Controller
{
    //显示登录页面
    public function login(){

        return view('adminLogin/login');
    }
    // 处理登陆页面
    public function dologin(Request $req){
        //连接 admin管理员的表  取出一条
        $admin = DB::table('admin')->where('name',$req->username)->first();
        // dd($admin);
        // 如果取出这只值
        if($admin){
            // 并判断接收的密码
            if(Hash::check($req->password,$admin->password)){
                // 把用户名和id保存到session中
                session([
                    'id'=>$admin->id,
                    'username'=>$admin->name
                ]);
                // return "已经成功了哦";
                return redirect()->route('adindex');
            }else{
                return "密码不正确";
            }
        }else{
            return "用户名不正确";
        }
    }

    // 退出登录
    public function logout(){
        // 清空session
        session()->flush();
        // 跳转到登录页面
        return redirect()->route('login');
    }
}
