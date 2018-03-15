<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\News;
use DB;
use App\Model\Article;
use App\Model\Film;
use App\Model\Cinema;
class IndexController extends Controller
{
    //首页路由方法

    public function index()
    {
        return view('home.index');
    }

    public function news()
    {
         $art = Article::all();
         $news = News::all();
        
        return view('home.news',compact('art','news'));
    }
     public function hot(Request $request)
    {
        $art = DB::table('Article')->paginate(3); 
        //dd($art);
        return view('home.hot',compact('art','request')); 
    }

     public function xiangqing(Request $request,$id)
    {
        // return $id;
        $art = DB::table('article')->where('art_id',$id)->get();
        $film = Article::find($id)->artfilm;
        return view('home.xiangqing',compact('art','film')); 
    }
    
    
}
