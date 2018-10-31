<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Cache;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Illuminate\Support\Facades\Redis;
use Hash;
class RegisterController extends Controller
{
    //显示注册页面
    public function register(){
        return view('register/reg');
    }

    // 发送短信
    public function sendmobilecode(Request $req) {

        // 生成6位随机数
        $code = rand(100000,999999);
        // 缓存时的名字
        $name = 'code-'.$req->phone;  // code-1367777888
        // 把随机数缓存起来（1分钟）
        Cache::put($name, $code, 1);

        // 向消息队列中发消息
        Redis::lpush('sms_list',$req->phone.'-'.$code);
        // 发短信
        $config = [
            'accessKeyId'    => 'LTAIRFzYI935tz2L',
            'accessKeySecret' => 'iaNH3QUvwpqP2Fry0bECPmqPHvyNZW',
        ];
        $client  = new Client($config);
        $sendSms = new SendSms;
        $sendSms->setPhoneNumbers($req->phone);
        $sendSms->setSignName('彭文双sns项目');
        $sendSms->setTemplateCode('SMS_135043697');
        $sendSms->setTemplateParam(['code' => $code]);

        // 发送
       print_r($client->execute($sendSms));

    }

    // 处理注册页面
    public function doregister(Request $req){
        // $data = $req->all();
        // dd($data);
        // 拼出缓存的名字
        $name = 'code-'.$req->phone;
        // 再根据名字取出验证码
        $code = Cache::get($name);
        if(!$code || $code != $req->code)
        {
            return back()->withErrors(['code'=>'验证码错误！']);
        }

        // 密码加密
        $password = Hash::make($req->password);
        // 创建一个Member对象
        $user = new Member;
        // 把表单中的手机号设置到 模型
        $user->phone = $req->phone;
        $user->username = $req->username;
        // 把加密 之后的密码设置到模型
        $user->password = $password;

        // 保存到表中
        $user->save();

        // 跳转到 登录页
        return redirect()->route('login');
    }
}
