<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeIndexController extends Controller
{
    // 显示前台首页
    public function  index(){
        return view('index/index');
    }
}
