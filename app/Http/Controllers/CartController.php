<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderGoods;
use App\Models\GoodsStock;
use DB;
class CartController extends Controller
{
    //加入购物车
    public function addcatr($skuid,$gocount){
        $cart = new Cart;
        $cart->add($skuid,$gocount);
        return redirect()->route('cart');
    }

    // 显示购物车列表页面
    public function index(){
        // 取出数据
        $cart = new Cart;
        $cartdata = $cart->data();
        // dd($cartdata);
        return view('cart/cart',[
            'cartData'=>$cartdata
        ]);
    }

    // 显示结算页面
    public function checkout(Request $req){
        // dd($req->all());
        // 判断是否登录
        if(session('userid')){
            // 取出购物车的数据
            $cart = new Cart;
            $cartdata = $cart->data();
            // dd($cartdata);
            // 显示地址
            $address = Address::get();
            // dd($address);
            // dd($req->get('sku_id'));
            return view('cart/checkout',[
                'cartData'=>$cartdata,
                'address'=>$address,
                'skuids' => $req->get('sku_id'),
            ]);
        }
        else{
            // 如果没登录 就跳转到登录页面
            return redirect()->route('belogin');
        }

    }

    // 生成订单
    public function order_pay(Request $req){
        $order = new Order;
        $paymethods = $req->get('pay_method');
        // 判断是否登录
        $id = session('userid');
        if(!$id){
            return redirect('/');
        }
        // 收货人信息
        $address = Address::where('user_id',$id)->orderby('id','desc')->get();
        // dd($address);
        if(!$address){
            return redirect('/cart');
        }
        // 取出购物车的数据
        $cart = new Cart;
        $cartdata = $cart->data();
        if(!$cartdata){
            return redirect('/cart');
        }
        $skuids = explode('|', $req->get('skuids'));
        // dd($skuids);
        // 总价
        $countPirce= 0;
        // 是否勾选了商品
        $xuangoods = false;

        // 循环检测购物车中商品信息
        foreach($cartdata as $v)
        {
            // 过滤未勾选的商品
            if(!in_array($v->sku_id, $skuids))
                continue;
            // 检查库存量
            if($v->goods_count > $v->stock)
                return redirect('/cart');
            // 勾选了商品
            $xuangoods = true;
            // 邮费
            $youfei = 0;
            // 累加总价（有规格价格使用规格价格，否则使用本店价）
            $countPirce += $v->goods_count * ($v->price>0?$v->price:$v->shprice)+$youfei;
            // dd($countPirce);
        }

        // 如果没有勾选商品
        if(!$xuangoods)
            return redirect('/cart');


        /**
         * 下订单
         */
       // 开启事务
       DB::beginTransaction();

       // 订单号
       $orID = $this->StrOrderOne();
    //    dd($orID);
       $orderId = Order::insertGetId([
                    'orders_id' => $orID,
                    'user_id' => $id,
                    'name' => $address[0]->name,
                    'phone' => $address[0]->phone,
                    'province' => $address[0]->province,
                    'city' => $address[0]->city,
                    'area' => $address[0]->area,
                    'address' => $address[0]->address,
                    'pay_method' => $paymethods,
                ]);
        // dd($orderId);
        if($orderId)
        {
            // 购物车中ID
            $cart_sku_id = [];
            // 循环保存购物车中商品
            foreach($cartdata as $v)
            {
                // 过滤未勾选的商品
                if(!in_array($v->sku_id, $skuids))
                    continue;
                // 添加订单商品
                $dindan = OrderGoods::insert([
                                'order_id' => $orderId,
                                'goods_price' => $v->price>0?$v->price:$v->shprice,
                                'goods_count' => $v->goods_count,
                                'goods_attr_list' => $v->goods_attr_list,
                                'goods_id' => $v->goods_id,
                                'goods_name' => $v->goods_name,
                                'goods_pic' => $v->sm_pic,
                                'sku_id' => $v->sku_id,
                                'cat_id1' => $v->cat_id1,
                                'cat_id2' => $v->cat_id2,
                                'cat_id3' => $v->cat_id3,
                            ]);
                // 如果出错就回滚事务
                if(!$dindan)
                {
                    DB::rollback();
                    return redirect('/cart');
                }

                $cartsku[] = $v->sku_id;
                // 减库存量
                $dindan = GoodsStock::where('sku_id',$v->sku_id)->decrement('stock',$v->goods_count);
                // 如果出错就回滚事务
                if(!$dindan)
                {
                    DB::rollback();
                    return redirect()->route('cart');
                }
            }
            // 如果都成功就提交整个事务
            DB::commit();
            // 从购物车中删除已下单商品
            Cart::whereIn('sku_id',$cartsku)->delete();
        }
        else
        {
            DB::rollback();
            return redirect()->route('cart');
        }
        // dd($req->get('pay_method') );
        // 跳转去支付
        if($paymethods == '支付宝' ){
             return redirect('/pay/'.$orID.'/'.$countPirce);
        }elseif($paymethods == '微信'){
            return redirect('/payByWechat/'.$orID.'/'.$countPirce);
        }

     }


    //  生成唯一的订单号
    public function StrOrderOne(){
        /* 选择一个随机的方案 */
        mt_srand((double) microtime() * 1000000);

        return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    }

}
