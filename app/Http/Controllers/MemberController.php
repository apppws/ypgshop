<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    // 会员管理的列表页面
    public function index(Request $req){
        $data = Member::orderBy('id','desc');
        if($req->keyword){
            $data->where('username','like',"%$req->keyword%");
        }
        if($req->from){
            $data->where('created_at','==',$req->from);
        }
        $data = $data->paginate(10);
        return view('member/list',[
            'data'=>$data,
            'req' => $req,
        ]);
    }
    // 显示页面
    public function add(){
        return view('member/add');
    }
    // 添加列表
    public function doadd(MemberRequest $req){
        // 接收所有数据
        $data = $req->all();
        // var_dump($data);
        // die;
        $member = new Member;
        $member->fill($data);
        // 密码进行处理
        $member->password = Hash::make($member->password);
        // 保存
        $member->save();
        // 跳转
        return redirect()->route('member_index');
    }
    // 显示修改的页面
    public function edit($id){
        $member = new Member;
        $data = $member::find($id);
        // return $data;
        return view('member/edit',[
            'data'=>$data
        ]);
    }
    // 处理修改的页面
    public function doedit(MemberRequest $req,$id){
        // 先根据ID取出要修改的数据
        $member = Member::find($id);
        $member->fill($req->all());
        if($req->password){
            $member->password = Hash::make($req->password);
        }
        $member->save();
        // 跳转
        return redirect()->route('member_index');
    }
    // 删除
    public function delete($id){
        $member = Member::find($id);
        $member->delete();
        return redirect()->route('member_index');
    }

}
