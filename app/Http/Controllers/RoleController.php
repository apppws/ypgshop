<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Privilege;
class RoleController extends Controller
{
     //显示列表页
     public function list(Role $role){
        $data = $role->get();
        // dd($data);
        return view('role/list',['data'=>$data]);
    }

    // 显示添加
    public function add(Role $role,Privilege $privilege){
        $priData = $privilege->tree();
        // dd($data);
        return view('role/add',[
            'priData'=>$priData
        ]);
    }
    // 处理权限添加列表
    public function doadd(Request $req){
        $role = new Role;
        $role->role_name=$req->role_name;
    	$role->save();
        $role->privileges()->detach();
        // dd($req->pri_id);
        if($req->pri_id)
        {
            // 向这个连接表中 添加
    	   $role->privileges()->attach($req->pri_id);
        }
        // 跳转
        return redirect()->route('role');
    }
    //修改页面
    public function edit(Request $req,$id){
        $role = Role::find($id);
        $privilege = new Privilege;
        $priData = $privilege->tree();
        // 取出这个表中这个权限id  为了判断选中状态
        $roleprivilege = $role->privileges()->get(['privilege_id']);;
        // dd($roleprivilege);
        $priId = [];
        foreach($roleprivilege as $v){
            $priId[]= $v->privilege_id;
        }
        // dd($priId);
        return view('role/edit',[
            'data' => $role,
            'priData' => $priData,
            'priId'=>$priId
            ]);

    }
    // 处理修改的页面
    public function doedit(Request $req,$id){
        $role = Role::find($id);
        $role->role_name=$req->role_name;
        $role->save();
        $role->privileges()->detach();
        if($req->pri_id)
        {
           $role->privileges()->attach($req->pri_id);
        }
        // 跳转
        return redirect()->route('role');
    }
    // 删除
    public function delete($id)
    {
        $role = Role::find($id);
        $role->privileges()->detach();
    	$role->delete();
    	return redirect()->route('role');
    }
}
