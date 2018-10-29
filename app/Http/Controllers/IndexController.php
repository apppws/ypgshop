<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    //显示后台页面
    public function index(){
        // var_dump($_SERVER['PATH_INFO']);
        $id = session('id');
        if($id=1){
            $pri = DB::select('select * from shop_privilege');
        }else{
            $pri = DB::select('select p.* from shop_admin_role ar
                            LEFT JOIN shop_roles r on ar.role_id = r.id
                            LEFT JOIN shop_role_privilege rp on rp.role_id = r.id
                            LEFT JOIN shop_privilege p on p.id = rp.privilege_id where ar.admin_id = ?', [$id]);
        }
        // dd($pri);
        $ins = [];
        foreach($pri as $v){
            // 先定义一个空的子集
            $v->childen=[];
            // 如果parent_id = 0  那就在循环一遍
            if($v->parent_id==0){
                foreach($pri as $v1){
                    // 判断这个值的id == 这个值的父类id
                    if($v->id== $v1->parent_id){
                        // 就得到子集id
                        $v->childen[] = $v1;
                    }
                }
                $ins[] = $v;
            }
        }
        // dd($ins);
        return view('index',['ins'=>$ins]);
    }
     //显示后台页面
     public function home(){
        return view('home');
    }
}
