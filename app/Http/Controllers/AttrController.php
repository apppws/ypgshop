<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Attr;

class AttrController extends Controller
{
    //显示列表页
    public function list(Request $req){
        $data = Attr::orderBy('id','desc');
        if($req->keyword){
            $data->where('attr_name','like',"%$req->keyword%");
        }
        $data = $data->paginate(5);
        return view('attr/attr',[
            'data'=>$data,
            'req'=>$req
        ]);
    }
    // 添加
    public function add(){
        // 取出一级的分类
        $topCat = Category::where('parent1_id',0)->get();
        return view('attr/add',[
            'topCat'=>$topCat
        ]);
    }
    // 处理添加
    public function doadd(Request $req){
       $attr = new Attr;
       $attr->fill($req->all());
        $attr->save();
        return redirect()->route('attr');
    }

    // 修改页面
    public function edit($id){
        $attr = new Attr;
        $data = $attr::find($id);
         // 取出一级父分类  条件是 parent1_id == 0 取出来
         $topCat = Category::where('parent1_id',0)->get();
         // 取出二级父分类  条件是 parent1_id大于0 全部取出来
         $secCat1 = Category::where('parent1_id',$data->cat_id1)->where('parent2_id',0)->get();
         // 取出三级分类
         $secCat2 = Category::where('parent2_id',$data->cat_id2)->get();
         // dd($secCat2);
         return view('attr/edit',[
             'data'=>$data,
             'topCat'=>$topCat,
             'secCat1'=>$secCat1,
             'secCat2'=>$secCat2
         ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        $attr = Attr::find($id);
        $attr->fill($req->all());
        // 保存
        $attr->save();
        return redirect()->route('attr');
    }

    // 删除
    public function delete($id){
        $attr = Attr::find($id);
        $attr->delete();
        return redirect()->route('attr');
    }
}
