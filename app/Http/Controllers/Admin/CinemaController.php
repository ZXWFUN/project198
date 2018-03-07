<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Cinema;

class CinemaController extends Controller
{
    public static function cates()
    {
        $cates = DB::table('cinema')->select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
        // 处理分类名称
        foreach($cates as $key => $value){
            // 统计字符串出现的次数
            $n = substr_count($value['path'],',');
            // 使用字符串 拼接分类名称
           $cates[$key]['name'] = str_repeat('|----',$n).$cates[$key]['name'];
        }
        return $cates;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cates = self::cates();
        return view('admin.cinema.list',['cates'=>$cates,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = self::cates();
        return view('admin.cinema.add',['cates'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        // dd($data);
        if($data['pid'] == 0){
            $data['path'] = 0;
        }else{
            $parent_data = DB::table('cinema')->where('id',$data['pid'])->first();
            // dd($parent_data);
            $data['path'] = $parent_data['path'].','.$data['pid'];
            // dd($data['path']);
        }
        $res = DB::table('cinema')->insert($data);
        // dump($res);
        if($res){
            return redirect('admin/cinema');
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
        // 显示影院内的电影
        // dd(Cinema::find($id));
        // $data = Cinema::find($id);
        // dd($data->films);
        //
         // 获取所有分类
        $cates = self::cates();
        // $cate = DB::table('cates')->where('id',$id)->first();
        // 查询当前修改的分类
        $data = DB::table('cinema')->where('id',$id)->first();
        // dd($cate);
        return view('admin.cinema.edit',['data'=>$data,'cates'=>$cates]);
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
        $child_data = DB::table('cinema')->where('pid',$id)->first();
        // dump($child_data);
        if(!empty($child_data)){
            return back();   
        }
        // 接收修改的数据
        $data = $request->except('_token','_method'); 
        // dd($data);
        if($data['pid'] == 0){
            $data['path'] = 0;
        }else{
            $parent_data = DB::table('cinema')->where('id',$data['pid'])->first();
            $data['path'] = $parent_data['path'].','.$parent_data['id'];
            // dump($data);
        }
        $res = DB::table('cinema')->where('id',$id)->update($data);
        if($res){
            $data=[
                'status'=>0,
                'msg'=>'修改成功'
            ];
        }else{
            $data=[
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
        //
         $child_data = DB::table('cinema')->where('pid',$id)->first();
        // dd($child_data);
        if(!empty($child_data)){
            return back();   
        }
        $res = DB::table('cinema')->where('id',$id)->delete($child_data);
        if($res){
            $data=[
                'status'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data=[
                'status'=>0,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }
}
