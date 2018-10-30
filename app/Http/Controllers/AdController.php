<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\AdPos;
use Storage;
class AdController extends Controller
{
    //显示列表页面
    public function list(){
        $data = Ad::paginate(5);
        return view('ad/list',[
            'data'=>$data
        ]);
    }
    // 显示添加页面
    public function add(){
        // 广告位置
        $adpos = AdPos::get();
        // dd($adpos);
        return view('ad/add',[
            'adpos'=>$adpos
        ]);
    }
    // 处理添加
    public function doadd(Request $req){
        // dd($ad->ad_type);
        if($req->ad_type=='轮播图'){
            // dd($req->move_img);
    		if($req->move_img)
    		{
                // 循环 得到值
    			foreach($req->move_img as $k => $i)
	    		{
                    $n ='/upload/'. $i->store('adimg/'.date('Ymd'));
                    $ad = new Ad;
                    $ad->adname =$req->adname;
                    $ad->is_on =$req->is_on;
                    $ad->ad_type =$req->ad_type;
                    $ad->po_id =$req->po_id;
                    $ad->img =$n;
                    $ad->url =$req->move_url[$k];
                    $ad->code =$req->move_name[$k];
                    // dd($ad);
                    $ad->save();
                    return redirect()->route('ad');
	    		}
            }
        }elseif($req->ad_type=='图片'){
            $ad = new Ad;
            $ad->adname =$req->adname;
            $ad->is_on =$req->is_on;
            $ad->ad_type =$req->ad_type;
            $ad->po_id =$req->po_id;
            $ad->url = $req->url;
            $ad->code = $req->code;
    		if($req->hasFile('img') && $req->file('img')->isValid())
    		{
    			if($ad->img)
			    {
			    	Storage::delete($ad->img);
			    }
		    	$ad->img = '/upload/'.$req->img->store('adimg/'.date('Ymd'));
            }
            $ad->save();
            return redirect()->route('ad');
        }elseif($req->ad_type=='文字'){
			$ad = new Ad;
            $ad->fill($req->all());
            $ad->save();
            return redirect()->route('ad');
        }

    }
    // 显示修改
    public function edit($id){
        $ad = Ad::find($id);
        // dd($ad);
        $adpos = AdPos::get();
        // dd($adpos);
        return view('ad/edit',[
            'ad'=>$ad,
            'adpos'=>$adpos
        ]);
    }

    // 处理修改的表单
    public function doedit(Request $req,$id){
        $ad = Ad::find($id);
        $ad->fill($req->all());
        if($req->hasFile('img') && $req->file('img')->isValid()){
             // 删除原来的图片
             if($req->img){
                Storage::delete($ad->img);
            }
            $ad->img ='/upload/'.$req->img->store('adimg/'.date('Ymd'));
        }
        $ad->save();
        return redirect()->route('ad');
    }

    // 删除
    public function delete(Request $req,$id){
        $ad = Ad::find($id);
        if($req->img){
            Storage::delete($ad->img);
        }
        $ad->delete();
        return redirect()->route('ad');
    }

}
