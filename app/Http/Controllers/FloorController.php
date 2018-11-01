<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor;
use App\Models\Category;
use Storage;
class FloorController extends Controller
{
    // 显示楼层列表
    public function list(Request $req){
        $data = Floor::orderBy('id','desc')->paginate(5);
        if($req->keyword){
            $data->where('flo_name','like',"%$req->keyword%");
        }
        return view('floor/floor',[
            'data'=>$data,
            'req' => $req,
        ]);
    }

    // 添加
    public function add(){
        // 取出一级的分类
        $topCat = Category::where('parent1_id',0)->get();
        return view('floor/add',[
            'topCat'=>$topCat
        ]);
    }
    // 处理添加
    public function doadd(Request $req){
       $floor = new Floor;
       $floor->fill($req->all());
        // ad_img
        if($req->hasFile('ad_img') && $req->file('ad_img')->isValid()){
            $floor->ad_img ='/upload/'.$req->ad_img->store('floor/'.date('Ymd'));
        }
        // dd($floor);
        $floor->save();
        return redirect()->route('floor');
    }

    // 修改页面
    public function edit($id){
        $floor = Floor::where('id',$id)->first();
        // return $data;
        // dd($data);
        // 取出一级的分类
        $topCat = Category::where('parent1_id',0)->get();
         // 取出二级父分类  条件是 parent1_id大于0 全部取出来
         $secCat1 = Category::where('parent1_id',$floor->cat_id1)->where('parent2_id',0)->get();
         // 取出三级分类
         $secCat2 = Category::where('parent2_id',$floor->cat_id2)->get();
        return view('floor/edit',[
            'data'=>$floor,
            'topCat'=>$topCat,
            'secCat1'=>$secCat1,
            'secCat2'=>$secCat2,
        ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        $floor = Floor::find($id);
        $floor->fill($req->all());
        // ad_img
        if($req->hasFile('ad_img') && $req->file('ad_img')->isValid()){
            // 删除原来的图片
            if($req->ad_img){
                Storage::delete($floor->ad_img);
            }
            $floor->ad_img ='/upload/'.$req->ad_img->store('floor/'.date('Ymd'));
        }
        // 保存
        $floor->save();
        return redirect()->route('floor');
    }

    // 删除
    public function delete($id){
        $floor = Floor::find($id);
        $floor->delete();
        return redirect()->route('floor');
    }
}
