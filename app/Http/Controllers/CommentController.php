<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Goods;
use App\Models\CommentPic;
use Image;
use Storage;
class CommentController extends Controller
{
    // 会员管理的列表页面
    public function list(Request $req){
        $data = Comment::paginate(10);
        if($req->keyword){
            $data->where('content','like',"%$req->keyword%");
        }
        if($req->from){
            $data->where('created_at','like',"%$req->created_at%");
        }
        // dd($data);
        return view('comment/list',[
            'data'=>$data,
            'req'=>$req
        ]);
    }
    // 显示页面
    public function add(Request $req,$id){
        $data = Goods::where('id',$id);
        // dd($data);
        return view('comment/add',[
                'id'=>$id,
                'data' => $data,
            ]);
    }
    // 添加列表
    public function doadd(Request $req,$goodsid){
        $comment = new Comment;
        $data = $req->all();
        // dd($data);
       //  dd($req->hasFile('fileList'));
    //    dd($req->logo);
        if($req->hasFile('logo') && $req->file('logo')->isValid())
        {
            $date = date('Ymd');
            $dir = 'comment/'.$date;
            $pic = $req->logo->store($dir);
            // dd($pic);
            // 生成缩略图
            $img = Image::make('./upload/'.$pic);
               // dd($img);
            // 大缩略图
            $bigPic = $img->resize(750, 750);
            $bigPic = str_replace($date.'/', $date.'/big_', $pic);
            $img->save('./upload/'.$bigPic);
           // dd($bigPic);
            // 中缩略图
            $midPic = $img->resize(400, 400);
            $midPic = str_replace($date.'/', $date.'/mid_', $pic);
            $img->save('./upload/'.$midPic);

            // 小缩略图
            $img->resize(100, 100);
            $smPic = str_replace($date.'/', $date.'/sm_', $pic);
            $img->save('./upload/'.$smPic);
        }
        // $data = $req->all();
        $comment->fill([
            'star'=>$req->star,
            'content'=>$req->content,
            'logo'=>$pic,
            'is_show'=>$req->is_show,
            'sm_pic' => $smPic,
            'mid_pic' => $midPic,
            'big_pic' => $bigPic,
            'goods_id'=>$goodsid,
            'user_id'=>1
        ]);
        $comment->save();
        // 跳转
        return redirect()->route('comment');
    }
    // 显示修改的页面
    public function edit($id){
        $comment = new Comment;
        // $goodsid = Goods::where('id',$id);
        // dd($goodsid);
        $data = $comment::find($id);
        // return $data;
        // dd($data);
        return view('comment/edit',[
            'data'=>$data,
        ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id,$goodsid){
        // dd($goodsid);
        // 先根据ID取出要修改的数据
        $comment = Comment::find($id);
        if($req->hasFile('logo') && $req->file('logo')->isValid())
        {
            // 删除原来的图片
            if($req->logo){
                Storage::delete($comment->logo);
                Storage::delete($comment->bigPic);
                Storage::delete($comment->midPic);
                Storage::delete($comment->smPic);
            }
            $date = date('Ymd');
            $dir = 'comment/'.$date;
            $pic = $req->logo->store($dir);
            // dd($pic);
            // 生成缩略图
            $img = Image::make('./upload/'.$pic);
               // dd($img);
            // 大缩略图
            $bigPic = $img->resize(750, 750);
            $bigPic = str_replace($date.'/', $date.'/big_', $pic);
            $img->save('./upload/'.$bigPic);
           // dd($bigPic);
            // 中缩略图
            $midPic = $img->resize(400, 400);
            $midPic = str_replace($date.'/', $date.'/mid_', $pic);
            $img->save('./upload/'.$midPic);

            // 小缩略图
            $img->resize(100, 100);
            $smPic = str_replace($date.'/', $date.'/sm_', $pic);
            $img->save('./upload/'.$smPic);
        }
        $comment->fill([
            'star'=>$req->star,
            'content'=>$req->content,
            'logo'=>$pic,
            'is_show'=>$req->is_show,
            'sm_pic' => $smPic,
            'mid_pic' => $midPic,
            'big_pic' => $bigPic,
            'goods_id'=>$goodsid,
            'user_id'=>1
        ]);

        $comment->save();
        // 跳转
        return redirect()->route('comment');
    }
    // 删除
    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comment');
    }
}
