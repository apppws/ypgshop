<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Spec;
use App\Models\Attr;

class SpecController extends Controller
{
    //显示列表页
    public function list(Request $req){
        $data = Spec::orderBy('id','desc');
        if($req->keyword){
            $data->where('spec_name','like',"%$req->keyword%");
        }
        $data = $data->paginate(5);
        $attrCat = Attr::get();
        return view('spec/spec',[
            'data'=>$data,
            'req'=>$req,
            'attrCat'=>$attrCat
        ]);
    }
    // 添加
    public function add(){
        // 取出一级的分类
        $attrCat = Attr::get();
        // dd($attrCat);
        return view('spec/add',[
            'attrCat'=>$attrCat
        ]);
    }
    // 处理添加
    public function doadd(Request $req){
       $spec = new Spec;
       $spec->fill($req->all());
        $spec->save();
        return redirect()->route('spec');
    }

    // 修改页面
    public function edit($id){
        $spec = new Spec;
        $data = $spec::find($id);
        $attrCat = Attr::get();
         // dd($secCat2);
         return view('spec/edit',[
             'data'=>$data,
             'attrCat'=>$attrCat,
         ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        $spec = Spec::find($id);
        // dd($req->all());
        $spec->fill($req->all());
        // 保存
        $spec->save();
        return redirect()->route('spec');
    }

    // 删除
    public function delete($id){
        $spec = Spec::find($id);
        $spec->delete();
        return redirect()->route('spec');
    }
}
