<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Hash;
use App\Models\Cart;
class BeLoginController extends Controller
{
    //显示登录
    public function belogin(){
        return view('/belogin/login');
    }

    // 处理
    public function dobelogin(Request $req){
        $user = Member::where('username',$req->username)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                session([
                    'userid'=>$user->id,
                    'username'=>$user->username
                ]);
                // 合并购物车
                $cart = Cart::hebin();
                // dd($cart);
                return redirect('/');
            }
            return back()->withInput()->withErrors('密码错误！');
        }else{
            return back()->withInput()->withErrors('用户名不存在');
        }


    }
    // 退出
    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect()->route('/');
    }
}
