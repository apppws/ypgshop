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

    public function add($skuid,$gocount){
        // dd($skuid);
        // 判断是否登录
        if($user_id = session('userid')){
            $this->sku_id = $skuid;
            $this->goods_count = $gocount;
            $this->user_id = $user_id;
            // dd($skuid,$gocount,$user_id);
            // 保存
            $this->save();
        }else{
            // 如果没有登录
            // 1 数据暂时放到cookie中
            $cart = Cookie::get('cart');
            // 判断是否里面有值  否则为空
            $cart = $cart ? unserialize($cart)  : [];
    		$cart[$skuid] = $gocount;
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
                $cart = unserialize($cart);
                // dd(explode(',',$cart));
                $skuids = array_keys(explode(',',$cart)); //返回数组所有键名的一个新数组
                // dd($skuids);
                $gsData = GoodsStock::whereIn('sku_id',$skuids)->get();
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
