<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Category;
use App\Models\GoodsStock;
class BeGoodsController extends Controller
{
    //显示购物车页面
    public function index($id){
        $goods = Goods::find($id);
         //分类菜单
         $catData = new Category;
         $c = $catData->catindex();
        // 商品三级分类
         $cat1 = $goods->cat1();
         $cat2 = $goods->cat2();
         $cat3 = $goods->cat3();
        // 图片
        $pic = $goods->pics();
        // dd($goods->specs);
        // return $goods->specs;
        return view('begoods/index',[
            'goods'=>$goods,
            'catData'=>$c,
            'cat1'=>$cat1,
            'cat2'=>$cat2,
            'cat3'=>$cat3,
            'pic'=>$pic,
        ]);
    }

    // 获取sku
    public function sku($goods_id,$skustr){
        $sku = GoodsStock::where('goods_attr_list',$skustr)
                        ->where('goods_id',$goods_id)
                        ->select('sku_id','stock','price')
                        ->first();
        // dd($sku);
        return response()->json($sku);
    }
}
