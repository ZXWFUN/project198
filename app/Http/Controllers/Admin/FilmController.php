<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Film;
use App\Model\Cate;
use App\Model\Filmsinfo;
use DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /**
         * 显示列表
         */
        $filmname = $request->input('filmname')?$request->input('filmname'):'';
        $list = Film::where('filmname','like','%'.$filmname.'%')->paginate(3);
        // dd($user);

        // $list = DB::table('films')->paginate($request->input('num', 5));
        // dump($list);
        return view('admin.film.list',['list'=>$list,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * 显示添加页面
         */
 
        return view('admin.film.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        // return $input;
        $res = DB::insert('insert into films (filmname, pic) values (?, ?)', [$input['filmname'],$input['art_thumb']]);

        // 3. 判断添加是否成功，给客户端返回提示信息
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
        $film = DB::table('films')->where('id',$id)->first();
        // dd($film);
        // $data = DB::table('films')
        //         ->join('filmsinfo','films.id','=','filmsinfo.pid')
        //         ->first();
        // dump($data);
        $data = DB::table('filmsinfo')->where('pid',$id)->first();
        // dd($data);
       return view('admin.film.show',['data'=>$data,'film'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $film = Film::findOrFail($id);
        // dd($film);
        return view('admin.film.edit',['film'=>$film]);
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
        //根据id,获取要修改的影片
        $film = Film::find($id);
        //将用户的相关属性修改为用户提交的值
        $input = $request->all();

        $res = $film->update(['filmname'=>$input['filmname'],'pic'=>$input['art_thumb']]);

        // 3. 判断添加是否成功，给客户端返回提示信息
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
        //
         $res =  Film::find($id)->delete();
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
     * 修改状态
     */
    public function changeStatus(Request $request)
    {
        $input = $request->all();
        //根据id获取要修改状态的电影
        $film = Film::find($input['id']);
        // return $film;
        $st = ($film->status == 0)? 1:0;
        //更改状态
        $res = DB::table('films')
            ->where('id', $input['id'])
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

     /*
     * 文件上传处理
     */
    public function upload(Request $request)
    {
        //1.获取上传文件
        $file = $request->file('file_upload');
//        return $file;
//        2.判断上传文件的有效性
        if($file->isValid()){
//            获取文件后缀名
            $ext = $file->getClientOriginalExtension();    //文件拓展名

            //生成新文件名
            $newfilename = md5(date('YmdHis').rand(1000,9999).uniqid()).'.'.$ext;

            //1.上传到本地服务器
//            return $newfilename;
            $res = $file->move(public_path().'/upload', $newfilename);
            //将上传文件的位置返回给客户端
            return '/upload/'.$newfilename;

        }
    }

}
