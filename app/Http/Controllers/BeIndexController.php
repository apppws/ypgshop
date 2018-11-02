<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AdPos;
class BeIndexController extends Controller
{
    // 显示前台首页
    public function  index(){
        // 分类菜单
        $category = new Category;
        $cat = $category->catindex();
        // dd($cat);
        // 广告模块
        $ad = new AdPos;
        // $adpo = $ad->showad(3);
        // dd($adpo);
        return view('index/index',[
            'cat'=>$cat,
            'adpo'=>$ad
        ]);
    }
}
