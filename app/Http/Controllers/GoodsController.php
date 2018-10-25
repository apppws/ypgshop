<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Category;
use App\Models\Attr;
use App\Models\GoodsAttr;
class GoodsController extends Controller
{
    //显示商品页面
    public function list(Request $req){
        $data = Goods::orderBy('id','desc');

        if($req->keyword){
            $data->where('goods_name','like',"%$req->keyword%");
        }
        if($req->from){
            $data->where('created_at','like',"%$req->created_at%");
        }
        $data = $data->paginate(10);
        // dd($data);
        return view('goods/list',[
            'data'=>$data,
            'req'=>$req
        ]);
    }

    //显示增加页面
    public function add(){
        // 取出一级分类
        $topCat = Category::where('parent1_id',0)->get();
        // dd($topCat);
        return view('goods/add',[
            'topCat'=>$topCat
        ]);
    }

    // 处理增加页面
    public function doadd(Request $req){
        $data = $req->all();
        $goods = new Goods;
        $goods->fill($data);
        // 保存
        $goods->save();
        // 跳转
        return redirect()->route('goods');
    }

    // 修改页面
    public function edit(Request $req,$id){
         // 取出一级分类
         $goods = Goods::where('id',$id)->first();
        //  dd($goods);
        // 取出一级父分类  条件是 parent1_id == 0 取出来
        $topCat = Category::where('parent1_id',0)->get();
        // 取出二级父分类  条件是 parent1_id大于0 全部取出来
        $secCat1 = Category::where('parent1_id',$goods->cat_id1)->where('parent2_id',0)->get();
        // 取出三级分类
        $secCat2 = Category::where('parent2_id',$goods->cat_id2)->get();
        // dd($secCat2);
        return view('goods/edit',[
            'data'=>$goods,
            'topCat'=>$topCat,
            'secCat1'=>$secCat1,
            'secCat2'=>$secCat2
        ]);
    }
    // 处理修改页面
    public function doedit(Request $req,$id){
        $goods = Goods::find($id);
        // var_dump($goods);die;
        $goods->fill($req->all());
        $goods->save();
        return redirect()->route('goods');
    }
    // 删除
    public function delete(Request $req,$id){
        $goods = Goods::find($id);
        $goods->delete();
        return redirect()->route('goods');
    }
}
