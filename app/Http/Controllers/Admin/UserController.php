<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //接收请求中的参数
//        $username = $request->input('username')?$request->input('username'):'';
//
//        $user = User::where('user_name','like','%'.$username.'%')->paginate(2);
////        dd($user);
//        //获取用户列表数据
////        $user = User::orderBy('user_id','asc')->paginate(10);
//        //向模板绑定数据的三种方法
////        1. 【】
//        return view('admin.user.list',['user'=>$user,'username'=>$username]);



//        多条件分页查询
        $user = User::orderBy('user_id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $username = $request->input('keywords1');
                $email = $request->input('keywords2');

                //如果用户名不为空
                if(!empty($username)) {
                    $query->where('user_name','like','%'.$username.'%');
                }
                //如果邮箱不为空
                if(!empty($email)) {
                    $query->where('user_email','like','%'.$email.'%');
                }
            })
            ->paginate($request->input('num', 5));
        return view('admin.user.list',['user'=>$user, 'request'=> $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回用户添加页面
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        1. 接收表单提交的数据
        $input = $request->all();
//          return $input;
//        2. 添加到数据库
        $user = new User;
        $user->user_name = $input['user_name'];
        $user->user_pass = $input['pass'];
        $user->email = $input['email'];
        //将数据添加到user表
        $res = $user->save();



//        3. 判断添加是否成功，给客户端返回提示信息
        if($res){
            $data = [
                'status'=>0,
                'msg'=>'添加成功'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'添加失败'
            ];
        }

        return $data;
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
        //根据id获取要修改的用户
        $user = User::findOrFail($id);
        return view('admin.user.edit')->with('user',$user);
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
        $user = User::find($id);
        //将用户的相关属性修改为用户提交的值
        $input = $request->all();

        $res = $user->update(['user_name'=>$input['username'],'email'=>$input['email']]);

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        找到要删除的记录，并删除
        $res =  User::find($id)->delete();
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

    /**
     * 修改用户启用状态
     */
    public function changeState(Request $request)
    {
        $input = $request->all();
//        return $input;
        //根据id获取要修改状态的用户
        $user = User::find($input['user_id']);
//        dd($user);

        $st = ($user->status==0)? 1:0;
        //更改状态
        $res = DB::table('user')
            ->where('user_id', $input['user_id'])
            ->update(['status' => $st]);
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
     * 批量删除用户
     */
    public function del(Request $request)
    {
        $input = $request->input('ids');
//        return $input;
        $res = User::destroy($input);

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
