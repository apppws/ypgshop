<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdPos;
class AdPosController extends Controller
{
    // 显示广告位置列表页面
    public function list(){
        $adpos = AdPos::paginate(5);
        // dd($adpos);
        return view('adPos/list',[
            'adpos'=>$adpos,
        ]);
    }
    // 处理添加的页面
    public function doadd(Request $req){
        $data = $req->all();
        $adpos =  new AdPos;
        $adpos->fill($data);
        $adpos->save();
        return redirect()->route('adpos');
    }
    // 修改
    public function edit(Request $req,$id){
        $adpos = AdPos::find($id);
        return view('adPos/edit',[
            'adpos'=>$adpos,
        ]);
    }
    // 处理修改的表单
    public function doedit(Request $req,$id){
        $adpos = AdPos::find($id);
        $adpos->fill($req->all());
        // 保存
        $adpos->save();
        return redirect()->route('adpos');
    }

    // 删除
    public function delete(Request $req,$id){
        $adpos = AdPos::find($id);
        $adpos->delete();
        return redirect()->route('adpos');
    }
}
