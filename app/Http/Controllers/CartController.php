<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // 显示购物车列表页面
    public function index(){
        return view('cart/cart');
    }
}
