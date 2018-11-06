<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller
{
    //加入购物车
    public function addcatr($skuid,$gocount){
        $cart = new Cart;
        $cart->add($skuid,$gocount);
        return redirect()->route('cart');
    }

    // 显示购物车列表页面
    public function index(){
        // 取出数据
        $cart = new Cart;
        $cartdata = $cart->data();
        // dd($cartdata);
        return view('cart/cart',[
            'cartData'=>$cartdata
        ]);
    }
}
