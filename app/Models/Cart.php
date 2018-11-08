<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\GoodsStock;
use Cookie;
use DB;
class Cart extends Model
{
    protected $table='cart';
    protected $fillable = ['user_id','sku_id','goods_count'];
    public $timestamps = false;

     // 把COOKIE中的购物车数据移动到数据库中
     public static function hebin()
     {
         // 只有登录了才可以执行这个操作
         if($id = session('userid'))
         {
             $cart = Cookie::get('cart');
            //  dd($cart);
             if($cart)
             {
                 $data = [];
                // 取出反序列化的值
                 $cart = unserialize($cart);
                //  循环的到  在给字段赋值
                 foreach($cart as $k => $v)
                 {
                     $data[] = [
                         'user_id' => $id,
                         'sku_id' => $k,
                         'goods_count' => $v,
                     ];
                 }
                //  插入到cart 这个表中
                 self::insert($data);
                 // 删除COOKIE中购物车数据
                 Cookie::queue('cart', 'value', -1);
             }
         }
     }

    public function add($skuid,$gocount){
        // dd($skuid);
        $cartsku = self::get();
        // dd($cartsku);
        $casku = [];
        $cascount = [];
        foreach($cartsku as $v){
           $casku[] = $v->sku_id;
           $cascount[] = $v->goods_count;
        }
        // dd($cascount);
        // 判断是否登录
        if($user_id = session('userid')){
            // 判断sku(商品规格)  是否是第一次 如果是第一次就插入数据库 如果不是就把商品数量++
            if($casku==$skuid){
                $this->goods_count = $cascount+$gocount;
            }else{
                $this->sku_id = $skuid;
                $this->goods_count = $gocount;
            }
            $this->user_id = $user_id;
                // dd($skuid,$gocount,$user_id);
                // 保存
            $this->save();
        }else{
            // 如果没有登录
            // 1 数据暂时放到cookie中
            $cart = Cookie::get('cart');
            $cart[$skuid] = $gocount;
            // dd($gocount);
    		// 保存一个月
    		Cookie::queue('cart', serialize($cart), 43200);
        }
    }

    // 取出数据
    public function data(){
        // 判断是否登录
        if($user_id=session('userid')){
            // 登陆了就返回 数据
            $db = DB::table('cart')
                    ->select('*')
                    ->leftJoin('goods_stock','cart.sku_id','=','goods_stock.sku_id')
                    ->leftJoin('goods','goods_stock.goods_id','=','goods.id')
                    ->leftJoin('goods_pic','goods_pic.goods_id','=','goods.id')
                    ->where('user_id',$user_id)
                    ->get();
            return $db;
        }else{
            // 如果没有登录
            // 1 数据暂时放到cookie中
            $cart = Cookie::get('cart');
            // dd($cart);
            // 2 判断 cookie 是否有cart这个数据
            if($cart){
                // 取出反序列化
                $cart = unserialize($cart);
                $skuids = array_keys($cart); //返回数组所有键名的一个新数组
                // dd($skuids);
                $gsData = DB::table('cart')
                            ->select('*')
                            ->leftJoin('goods_stock','cart.sku_id','=','goods_stock.sku_id')
                            ->leftJoin('goods','goods_stock.goods_id','=','goods.id')
                            ->leftJoin('goods_pic','goods_pic.goods_id','=','goods.id')
                            ->where('goods_stock.sku_id',$skuids)
                            ->get();
                // dd($gsData);
                $gsData->goods_count = $cart;
                // dd($gsData);
    			return $gsData;
    		}
    		else
    			return [];
        }
    }
}
