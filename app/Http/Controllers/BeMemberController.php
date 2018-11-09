<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Member;
class BeMemberController extends Controller
{
    //显示个人页面
    public function bemember(){
        // 取出购物车数据
        $cart = new Cart;
        $cartdata = $cart->data();
        // 会员信息
        $users = Member::where('id',session('userid'))->first();
        // dd($users);
        return view('bemember/member_info',[
            'cartdata'=>$cartdata,
            'users'=>$users
        ]);
    }

    // 处理个人页面
    public function dobemember(Request $req,$id){
        $member = Member::find($id);
        $member->fill($req->all());
        $success = $member->save();
        if($success){
            // 如果成功了
            session([
                'username'=>$member->username
                ]);
        }

        return back();
    }

}
