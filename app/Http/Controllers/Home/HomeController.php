<?php


namespace App\Http\Controllers\Home;


use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Film;
use App\Model\Cate;
use App\Model\Cinema;
use App\Model\Fy;
use App\Model\Dingdan;
use App\Model\Filmsinfo;
use DB; 


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // 轮播图
        $pic = DB::table('lunbo')->get();
        // dd($pic);
        // 正在热映影片
        $films = DB::table('films')->where('status','=', 1)->take(8)->get();
        // dd($films);


        // 热播
        $filmshot = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->where('number','>=','9.0')
                    ->get();
        //评分排行
        $filmsnum = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->orderby('number','desc')
                    ->take(6)
                    ->get(); 
        // dd($filmsnum); 
        //票房前五
        $box = DB::table('films')->orderby('box_office','desc')->take(5)->get(); 
        // 首页
        return view('home.index',['films'=>$films,'filmshot'=>$filmshot,'filmsnum'=>$filmsnum,'pic'=>$pic,'box'=>$box]);
    }


    public function show($id)
    {
        // return $id;
        // 影片详情
        $filmsinfo = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->where('films.id','=',$id)
                    ->get();
        // dd($filmsinfo);
        return view('home.show',['filmsinfo'=>$filmsinfo]);
    }
    /**
     * 电影分类
     */
   /**
     * 电影分类
     */
    public function cate(Request $request)
    {


        //获取电影分类里的所有父类
        $cates = Cate::where('pid',0)->get();
        // dd($cate);
        foreach($cates as $k => $v){


            //遍历表父级下的二级分类
         $a[] = Cate::where('pid',$v->id)->get();
        }
        // dd($a);
        // $cates = $cate->film;
        // dd($cates);
        // 电影
        $filmscate = DB::table('filmsinfo')
                    ->join('films','filmsinfo.pid','=','films.id')
                    ->where('status','=', 1)
                    ->get();
        // dd($filmscate);
        return view('home.films',compact('cates','a','filmscate'));
    }




    /**
     * 分类显示电影
     */
    public function films(Request $request,$id)
    {
        // if(!empty($request->all())){
             $cates = Cate::where('pid',0)->get();
            // dd($cate);
            foreach($cates as $k => $v){
                //遍历表父级下的二级分类
             $a[] = Cate::where('pid',$v->id)->get();
            }    




            // dd($id);
            $cate = Cate::find($id);
            // dd($cate);
            
            // $filmscates = DB::table('films')
            //             ->join('filmsinfo','films.id','=','filmsinfo.pid')
            //             ->get();
            $filmscate = $cate->film;
            foreach($filmscate as $v){
                
            }
            // dd($filmscate);
            return view('home.films',compact('filmscate','cates','a'));
        // }
       
    }





    /**
     * 榜单
     */
    public function list()
    {
        // 显示榜单页面


        $films = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->orderby('number','desc')
                    ->take(8)
                    ->get();
        // dd($films);            
        return view('home.list',compact('films'));
    }


    /**
     * 搜索
     */
    public function search(Request $request)
    {
        // 显示搜索页面
        $filmname = $request->input('name')?$request->input('name'):'';
        $list = Film::where('filmname','like','%'.$filmname.'%')
                ->join('filmsinfo','films.id','=','filmsinfo.pid')
                ->paginate(2);


        // dd($list);
        return view('home.search',compact('list','request'));


    }

    public function goumai1($id,$aid)
    {
        // return $aid;
        if(!$aid == 0){
            $addr = Cinema::where('pid',$aid)->get();
            session(['aid' => $aid]);
        }
        // return $addr;
        $film = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->where('films.id','=',$id)
                    ->get();
        session(['id' => $id]);
        // dd($film);
        $cinema = DB::table('cinema')->get();
        
        // dd($cinema);
        return view('home.goumai1',compact('film','cinema','addr')); 
    }

    public function goumai2($id,$aid,$ids)
    {
        // return $aid;
      
            $addr = Cinema::where('pid',$aid)->get();
            $addrs = Cinema::where('pid',$ids)->get();
            // return $addrs;
        
        // return $addr;
        $film = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->where('films.id','=',$id)
                    ->get();
       
        // dd($film);
        $cinema = DB::table('cinema')->get();
        
        // dd($cinema);
        return view('home.goumai1',compact('film','cinema','addr','addrs')); 
    }

    public function jjyy($id,$aid,$ids)
    {
        // dd($id);
        $addr = Cinema::where('pid',$aid)->get();
        $addrs = Cinema::where('id',$ids)->get();
            // dd($addr);
        
        // return $addr;
        $film = DB::table('films')
                    ->join('filmsinfo','films.id','=','filmsinfo.pid')
                    ->where('films.id','=',$id)
                    ->get();
        // dd($film);
        $cinema = DB::table('cinema')
                    ->join('fy','cinema.id','=','fy.cid')
                    ->where('cinema.id','=',$ids)
                    ->get();

        foreach($cinema as $k=>$v){
            $cinema[$k]['qid'] = $film[0]['pid'];
        // dd($v);
            
        }      
        // dd($cinema);
         return view('home.jjyy',compact('film','cinema','addr','addrs','filmsinfo')); 
    }

    public function seat(Request $request)
    {    
        // return $request;
        // yid里面带有1电影id和影院id
        $yid = $request->input('yid');
    
        $cinema = DB::table('cinema')
                    ->join('fy','cinema.id','=','fy.cid')
                    ->where('cinema.id','=',$yid[1])
                    ->get();
                    // dd($cinema);
        $films = DB::table('films')
                    ->where('id','=',$yid[0])
                    ->get();
                    // dd($films);
        return view('home.seat',compact('request','cinema','films','yid')); 
    }

    public function mai(Request $request)
    {

        $dingdan = $request->except('_token');
        // dd($dingdan);
        $zuo = $dingdan['zuowei'];
        // dd($zuo);
        $zuowei = serialize($zuo);
        
        // dd($zuowei);
        // $z = '';
        
        // foreach($zuowei as $v){
        //     return $v"."."."$z;
        // }
        
        
        $ying0 = DB::table('films')
                ->where('id',$dingdan['yingcang0'])
                ->lists('filmname');
                //
                $ying0 = serialize($ying0);
                //  dd($ying0);
        //    $DATA =  $ying['filmname'];
        //         dd($DATA);
        $ying1 = DB::table('cinema')
                ->where('id',$dingdan['yingcang1'])
                ->lists('name');
                $ying1 = serialize($ying1);
                // dd($ying1);
        // DB::table('dingdan')::save($dingdan->get());
        DB::table('dingdan')->insert([
            'dd_zuo' => $zuowei,
            'dd_piao' => $dingdan['piao'],
            'dd_pian' => $ying0,
            'dd_yuan' => $ying1,
            'dd_money'=> $dingdan['jia']
        ]);
        // DB::table()
        // $dingdan->save()
    }
    
    public function yy()
    {
         $cinema = DB::table('cinema')->get();
        return view('home.yy',compact('cinema'));
    }
}
