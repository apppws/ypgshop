<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
class AdController extends Controller
{
    //显示列表页面
    public function list(){
        return view('ad/list');
    }
    // 显示添加页面
    public function add(){
        return view('ad/add');
    }

    public function doadd(Reuqest $req){
        $data = $req->all();
        dd($data);
    }

}
