@include('home.public.head')



    <div class="banner">
    <div class="wrapper clearfix">
      <div class="celeInfo-left">
        <div class="avatar-shadow">
        @foreach($film as $v)
          <img class="avatar" src="{{$v['pic']}}" alt="">
            <div class="movie-ver"></div>
        </div>
      </div>
      <div class="celeInfo-right clearfix">
            <div class="movie-brief-container" >
      <h3 class="name">{{$v['filmname']}}</h3> 
      <div class="ename ellipsis"></div>
      <ul>
        <li class="ellipsis">{{$v['keyword']}}</li>
        <li class="ellipsis">
        {{$v['time']}}
        </li>
        <li class="ellipsis"> {{$v['show_time']}}</li>
      </ul>
    </div>
    <div class="action-buyBtn">
      
        <a class="btn buy" href="{{url('home/cate')}}" target="_blank" data-act="more-detail-click" data-bid="b_ozuzh4j4">查看更多电影详情</a>
    </div>

    <div class="movie-stats-container">

        <div class="movie-index">
          
          <div class="movie-index-content score normal-score">
             
              <div class="index-right">
               
                 
              </div>
          </div>
        </div>

        

        <div class="movie-index">
          <p class="movie-index-title">累计票房</p>
          <div class="movie-index-content box">
              <span class="stonefont">{{$v['box_office']}}</span><span class="unit"></span>
          </div>
        </div>
    </div>
@endforeach
      </div>
    </div>
</div>

<script type="text/javascript">
 
  
</script>
    <div class="container" id="app" class="page-cinemas/list" >
  <div class="tags-panel">
    <ul class="tags-lines">

        <li class="tags-line tags-line-border" data-type="brand">
          <div class="tags-title">品牌:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:236}" data-id="-1" href="" data-bid="b_n6nqkt97">全部</a>
            </li>
            @foreach($cinema as $v) 
            @if($v['pid'] == 1) 
            <li class=""> 
              <a data-act="tag-click" data-val="" data-id="24251" href="{{url('goumai1/')}}/{{session('id')}}/{{$v['id']}}" data-bid="b_n6nqkt97">{{$v['name']}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </li>
        
        <li class="tags-line tags-line-border" data-type="brand">
          <div class="tags-title">区域:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:236}" data-id="-1" href="" data-bid="b_n6nqkt97">全部</a>
            </li>
            @if(!empty($addr))
          @foreach($addr as $v)
            <li class=""> 
              <a data-act="tag-click" data-val="" data-id="24251" href="{{url('goumai2/')}}/{{session('id')}}/{{session('aid')}}/{{$v['id']}}" data-bid="b_n6nqkt97">{{$v['name']}}</a>
            </li>
            @endforeach
        @endif
          </ul>
        </li>
       
        
        
  </div>

  <div class="cinemas-list">
    <h2 class="cinemas-list-header">影院列表</h2>
    
      <div class="cinema-cell">
       @if(!empty($addrs))
          @foreach($addrs as $v)
        <div class="cinema-info">
          <a href="" class="cinema-name" data-act="cinema-name-click" data-bid="b_wek7vrx9" data-val="{city_id: 236, cinema_id: 8201}">{{$v['name']}}</a>
          <p class="cinema-address"></p>
        </div>
        
        
        <div class="buy-btn">
          <a href="{{url('jjyy/')}}/{{session('id')}}/{{session('aid')}}/{{$v['id']}}" data-act="buy-btn-click" data-val="{city_id: 236, cinema_id: 8201}" data-bid="b_wek7vrx9">选座购票</a>
        </div>
        
        <div class="price">
            <span class="rmb red">￥</span>
            <span class="price-num red"><span class="stonefont">2</span></span>
            <span>起</span>
        </div>
      </div>
      @endforeach
        @endif 
  </div>

  <div class="cinema-pager">
    
  </div>

 
    </div>
@include('home.public.footer')
