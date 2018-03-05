<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\News;
use DB;
use App\Model\Article;
class ArticleController extends Controller
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

    //post方式访问update方法
    public function update1(Request $request,$id)
    {
    
        //将用户的相关属性修为用户提交的值
        $input = $request->except('_token');
        //根据id,获取要修改的用户
        $res = Article::where('art_id',$id)->update(['art_title'=>$input['art_title'],'art_thumb'=>$input['file_upload'],'art_content'=>$input['art_content']]);

        if($res){
           return redirect('article');
        }else{
            $data = [
                'status'=>1,
                'msg'=>'修改失败'
            ];
        }

        return $res;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $art = article::with('artfun')->paginate(5);
        // $aid = 1;
        return view('admin.article.list',compact('art','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $news = DB::table('news')->get();
        
        return view('admin.article.add',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接收表单数据
        $input = $request->except('_token','file_upload');
        // dd($input);
         $res = Article::create($input);

        if($res){
            return redirect('article');
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
        // return $id;

        //$id = DB::table('article')->value('art_id');
        $aid = Article::findOrFail($id);
        $news = DB::table('news')->get();
        return view('admin.article.edit',compact('aid','news'));
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
        //找到要删除的记录，并删除
       // $id = DB::table('article')->value('art_id');
        $res =  article::find($id)->delete();
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
