<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privilege;
class PrivilegeController extends Controller
{
    //显示列表页
    public function list(Privilege $privilege){
        $data = $privilege->tree();
        // dd($data);
        return view('privilege/list',['data'=>$data]);
    }

    // 显示添加
    public function add(Privilege $privilege){
        $data = $privilege->tree();
        // dd($data);
        return view('privilege/add',[
            'data'=>$data
        ]);
    }
    // 处理权限添加列表
    public function doadd(Request $req){
        $data = $req->all();
        // var_dump($data);
        // die;
        $privilege = new Privilege;
        $privilege->fill($data);
        // 保存
        $privilege->save();
        // 跳转
        return redirect()->route('privilege');
    }
    //修改页面
    public function edit(Request $req,$id){
        $data = Privilege::find($id);
        $parent = $data->tree();
        // dd($parent);
        $childen = $data->childen($data->id);
        // dd($childen);
        return view('privilege/edit',[
            'data'=>$data,
            'childen'=>$childen,
            'parent'=>$parent
            ]);
    }

    public function doedit(Request $req,$id){
        $data = Privilege::find($id);
        $data->fill($req->all());
        $privilege->save();
        // 跳转
        return redirect()->route('privilege');

    }
    // 删除
    public function delete($id)
    {
        $privilege = Privilege::find($id);
    	$children = $privilege->childen($privilege->id);
    	$children[]=$privilege->id;
    	$privilege->destroy($children);
        return redirect()->route('privilege');
    }
}
