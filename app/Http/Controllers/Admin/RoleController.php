<?php

namespace App\Http\Controllers\Admin;
use App\Model\Permission;
use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /*
    * 授权页面
    */
    public function auth($id)
    {
        //根据id获取要授权的角色
        $role = Role::find($id);

        //获取所有的权限
        $perms = Permission::get();

        //获取此角色已经获得的权限

        $own_perms = $role->permission;
        $own_per = [];
        foreach ($own_perms as $v){
            $own_per[] = $v->id;
        }
//        dd($own_per);

        //返回授权页面
        return view('admin.role.auth',compact('role','perms','own_per'));
    }


    /**
     * 授权处理逻辑
     * 将数据添加到role_permission表中
     */
    public function doAuth(Request $request)
    {
        //1.接收提交的数据
        $input = $request->except('_token');
//        dd($input);
        //        2.保存到数据表中  array_diff(arr1,arr2)
//        删除原有的授权
        \DB::table('role_permission')->where('role_id',$input['role_id'])->delete();
//       重新添加新授权
        if(!empty($input['perm_id'])){
            foreach ($input['perm_id'] as $v){
                \DB::table('role_permission')->insert(['role_id'=>$input['role_id'],'permission_id'=>$v]);
            }
        }

        return redirect('admin/role');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取所有的角色数据
        $roles = Role::get();
        return view('admin.role.list',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);
        $res = Role::create($input);
        if($res){
            return redirect('admin/role');
        }else{
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('admin.role.edit',['role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //根据id,获取要修改的用户
        $role= Role::find($id);
        //将用户的相关属性修改为用户提交的值
        $input = $request->all();
        $res = $role->update(['role_name'=>$input['role_name']]);

        if($res){
            $data = [
                'status'=>0,
                'msg'=>'修改成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'修改失败'
            ];
        }

        return $data;
    }

    /**
     * 删除角色
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 找到要删除的记录，并删除
        $res =  Role::find($id)->delete();
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }

        return $data;
    }

}
