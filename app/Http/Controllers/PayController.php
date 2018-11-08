<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Endroid\QrCode\QrCode;  //二维码
class PayController extends Controller
{
    // 显示支付页面(支付宝)   // jwelpt9815@sandbox.com
    public function pay(Request $req,$orID,$countprice){
        $order = new Order;
        // return view('pay/pay');
        // 调用支付宝的网页支付
        return app('alipay')->web([
            'out_trade_no' => $orID, // 订单编号，需保证在商户端不重复
            'total_amount' => $countprice, // 订单金额，单位元，支持小数点后两位
            'subject'      => '支付 pws 商城 的订单：'.$orID, // 订单标题
        ]);
    }

    // 前端回调页面
    public function alipayReturn()
    {
        // 校验提交的参数是否合法
        $data = app('alipay')->verify();
        // dd($data);
    }

    // 服务器端回调
    public function alipayNotify()
    {
        $data = app('alipay')->verify();
        \Log::debug('Alipay notify', $data->all());
    }


    // 微信
    public function payByWechat(Request $req,$orID,$countprice) {
        return view('cart/successcode',[
            'orid'=>$orID,
            'countprice'=>$countprice
        ]);
    }

    public function payimg(Request $req,$orID,$countprice) {
        $order = new Order;
        // scan 方法为拉起微信扫码支付
        $wechatOrder =  app('wechat_pay')->scan([
            'out_trade_no' => $orID,  // 商户订单流水号，与支付宝 out_trade_no 一样
            'total_fee' => $countprice * 100, // 与支付宝不同，微信支付的金额单位是分。
            'body'      => '支付 pws 商城 的订单：'.$orID, // 订单描述
        ]);

        // 把要转换的字符串作为 QrCode 的构造函数参数
        $qrCode = new QrCode($wechatOrder->code_url);

        // 将生成的二维码图片数据以字符串形式输出，并带上相应的响应类型
       return response($qrCode->writeString(), 200, ['Content-Type' => $qrCode->getContentType()])->header('Content-Type', 'image/jpg');
    }

    // 微信服务端回调
    public function wechatNotify()
    {
        // 校验回调参数是否正确
        $data  = app('wechat_pay')->verify();
        // 找到对应的订单
        $order = Order::where('no', $data->order_id)->first();
        dd($order);
        // 订单不存在则告知微信支付
        if (!$order) {
            return 'fail';
        }
        // 订单已支付
        if ($order->paid_at) {
            // 告知微信支付此订单已处理
            return app('wechat_pay')->success();
        }

        // 将订单标记为已支付
        $order->update([
            'paid_at'        => Carbon::now(),
            'payment_method' => 'wechat',
            'payment_no'     => $data->transaction_id,
        ]);

        return app('wechat_pay')->success();
    }


}
