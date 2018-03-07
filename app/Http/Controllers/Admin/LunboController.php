<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Lunbo;
use DB;
use App\Model\User;
class LunboController extends Controller
{
     //文件上传处理
    public function upload(Request $request)
    {
        //获取上传文件
        $file = $request->file('file_upload');
        //dd($file);
        //判断上传文件的有效性
        if($file->isValid()){
            //生成新文件名
            $ext = $file->getClientOriginalExtension();    //文件拓展名
            $newfilename = date('YmdHis').rand(1000,9999).uniqid().'.'.$ext;
           // return $newfilename; 
            //移动文件到指定位置
            $res = $file->move(public_path().'/upload',$newfilename);
            // return $res;
            //将上传文件的位置返回给客户端
            return '/upload/'.$newfilename;
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $lun = DB::table('lunbo')->get();
        return view('admin.lunbo.list',compact('lun','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$u = DB::table('user')->get();
        return view('admin.lunbo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //接收表单数据
        $input = $request->except('_token','file_upload');
        // dd($input);
         $res = Lunbo::create($input);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $res =  lunbo::find($id)->forceDelete();
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
