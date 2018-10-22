<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //显示后台页面
    public function index(){
        return view('index');
    }
     //显示后台页面
     public function home(){
        return view('home');
    }
}
