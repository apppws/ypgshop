<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\AdPos;
use App\Models\Blog;
use App\Models\Floor;
use App\Models\Cart;
use Illuminate\Support\Facades\Storage;
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
        // 日志资讯
        $blog = new Blog;
        $blogs = $blog->getblog();
        // 楼层显示
        $floor = new Floor;
        $floors = $floor->floor();
        // dd($floors);
        // 取出购物车数据
        $cart = new Cart;
        $cartdata = $cart->data();
        // dd($cartdata);
        return view('index/index',[
            'cat'=>$cat,
            'adpo'=>$ad,
            'blogs'=>$blogs,
            'floor'=>$floors,
            'cartdata'=>$cartdata
        ]);
    }
    //显示文章内容
    public function blcontent(){
        return view('templates/bloglist');
    }

    // 生成代码
    public function make($id)
    {
        // 1. 接收参数拼接一个 那个html的页面名字
        $tableName = 'blog-'.$id;
        // dd($tableName);
        $blog = new Blog;
        $blogs = $blog->getblog();  //取出所有数据  然后放到模拟模板中
        // dd($blogs);
        // 2. 生成日志视图文件
        // 生成视图目录
        @mkdir('/views/'.$tableName, 0777);
        ob_start();
        view('templates/bloglist')->__toString();
        // dd($c);
        $str = ob_get_clean();
        // dd($str);
        file_put_contents($tableName.'.blade.php', $str);
    }
}
