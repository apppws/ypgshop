<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memberlevel;
use Illuminate\Support\Facades\Hash;

class MemberlevelController extends Controller
{
    // 显示等级的页面
    public function index(Request $req){
        $data = Memberlevel::orderBy('id','desc');
        if($req->keyword){
            $data->where('username','like',"%$req->keyword%");
        }
        if($req->from){
            $data->where('created_at','==',$req->from);
        }
        $data = $data->paginate(10);
         return view('member_level/list',[
             'data'=>$data,
             'req' =>$req
         ]);
    }
     // 显示页面
     public function add(){
        return view('member_level/add');
    }
    // 添加列表
    public function doadd(Request $req){
        // 接收所有数据
        $data = $req->all();
        $member = new Memberlevel;
        $member->fill($data);
        // 保存
        $member->save();
        // 跳转
        return redirect()->route('member_level');
    }
    // 显示修改的页面
    public function edit($id){
        $member = new Memberlevel;
        $data = $member::find($id);
        // return $data;
        return view('member_level/edit',[
            'data'=>$data
        ]);
    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        // 先根据ID取出要修改的数据
        $member = Memberlevel::find($id);
        $member->fill($req->all());
        $member->save();
        // 跳转
        return redirect()->route('member_level');
    }
    // 删除
    public function delete($id){
        $member = Memberlevel::find($id);
        $member->delete();
        return redirect()->route('member_level');
    }
}
