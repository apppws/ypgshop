<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Goods;
class Floor extends Model
{
    protected $table = "floor";
    public $timestamps = false;
    protected $fillable = ['flo_name','sort_num','ad_img','ad_img_link','cat_id1','cat_id2','cat_id3','subtitle1','subtitle2','subtitle3','subtitle4','subtitle5','goods_id1','goods_id2','goods_id3','goods_id4','goods_id5'];

    // 显示楼层
    public function floor(){
        // 1 先取出所有数据
        $data = self::orderBy('sort_num','asc')->get();
        // 循环
        foreach($data as $v){
            // 分类
            $v->CatData = Category::whereIn('id',explode(',',$v->cat_id3))->get();
            // dd($v->CatData);
            // 取出第一个推荐商品
            $v->goods1 = Goods::whereIn('id',explode(',',$v->goods_id1))
                        ->where('is_on_sale','y')
                        ->select('id','goods_name','shprice','maprice')
                        ->get();
            // dd($v->goods1);
            $v->goods2 = Goods::whereIn('id',explode(',',$v->goods_id2))
                        ->where('is_on_sale','y')
                        ->select('id','goods_name','shprice','maprice')
                        ->get();

            $v->goods3 = Goods::whereIn('id',explode(',',$v->goods_id3))
                        ->where('is_on_sale','y')
                        ->select('id','goods_name','shprice','maprice')
                        ->get();
            $v->goods4 = Goods::whereIn('id',explode(',',$v->goods_id4))
                        ->where('is_on_sale','y')
                        ->select('id','goods_name','shprice','maprice')
                        ->get();
            $v->goods5 = Goods::whereIn('id',explode(',',$v->goods_id5))
                        ->where('is_on_sale','y')
                        ->select('id','goods_name','shprice','maprice')
                        ->get();
        }
        // dd($data);
        return $data;
    }
}
