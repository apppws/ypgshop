<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class BeIndexController extends Controller
{
    // 显示前台首页
    public function  index(){
        // 分类菜单
        $category = new Category;
        $cat = $category->catindex();
        // dd($cat);
        return view('index/index',[
            'cat'=>$cat
        ]);
    }
}
