<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Storage;
class AdPos extends Model
{
    protected $table = 'ad_positions';
    protected $fillable =['po_width','po_height','po_name'];
    public $timestamps = false;

    // 连接ad
    public function abs(){
        return $this->hasMany('App\Models\Ad');
    }

    // 显示广告
    public function showad($id){
        $ad = DB::table('ad')
            ->select('ad_type','code','img','url','po_width','po_height','ad.id')
            ->leftJoin('ad_positions','ad.po_id','=','ad_positions.id')
            ->where('po_id',$id)
            ->where('is_on','y')
            ->first();
        // dd($ad);
        if(!$ad){ return '';}
        // 判断是什么类型
        if($ad->ad_type=='图片'){
            // 如果是图片直接返回一个 img标签
            return '<a target="_blank" href="'.$ad->url.'"  style="display:inline-block;width:'.$ad->po_width.'%;height:'.$ad->po_height.'%;overflow:hidden;"><i><img src="'.$ad->img.'"></i></a>';
        }elseif($ad->ad_type=='文字'){
            return $ad->code;
        }elseif($ad->ad_type=='轮播图'){
            $lb = DB::table('ad')
            ->select('ad_type','code','img','url','po_width','po_height')
            ->leftJoin('ad_positions','ad.po_id','=','ad_positions.id')
            ->where('ad_type','轮播图')
            ->limit(9)
            ->get();
            // dd($lb);
            $str = '';
            // 循环这个值
            foreach($lb as $k => $v){
                // dd($v);
                $str.='<li data-tpc="'.$k.'" flag="'.$k.'" data-bgcolor="#fe4d60" style="background: rgb(254, 77, 96) none repeat scroll 0% 0%; position: absolute; z-index: 0; display: none;">
                <a data-tag="13" data-nsf="" data-ajax="0" data-advid="15069" data-ref="15069_30915043_1"target="_blank" class="big_pic global_loading" data-tc="ad.0.0.15069-30915043.1"data-recordtracker="1" title="'.$v->code.'" href="'.$v->url.'">
                <img data-ajax="0" data-advid="15069" src="'.$v->img.'" alt="'.$v->code.'" id="lunbo_1" data-loaded="1"></a></li>';
            }
            return $str;
        }
    }
}
