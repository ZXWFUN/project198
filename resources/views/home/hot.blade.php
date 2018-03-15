@include('home.public.head')

  <div class="subnav">
  <ul class="navbar">
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:1}"
          href="news"
      >热点首页</a>
    </li>
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:2}"
          data-state-val="{subnavId:2}"
          class="active" href="javascript:void(0);"
      >新闻资讯</a>
    </li>
   
  </ul>
</div>


    <div class="container" id="app" class="page-news/hotNews" >
      <div class="detail-container">

      <div class="news-container">
      @foreach($art as $v)
              <div class="news-box clearfix">
    <a class="news-img" href="xiangqing/{{$v['art_id']}}" target="_blank" data-act="news-click" data-val="{ newsid:35184 }">
      <img src="{{$v['art_thumb']}}" alt="">
    </a>

  <div class="news-content ">
    <h4 class="news-header one-line">
      <a href="xiangqing/{{$v['art_id']}}" target="_blank" data-act="news-click" data-val="{ newsid:35184 }">{{$v['art_title']}}</a>
    </h4>
    <div class="latestNews-text"style="overflow: hidden;
    text-overflow: ellipsis;">{!!$v['art_content']!!}</div>
    <div class="info-container">
      <span class="news-source">{{$v['art_editor']}}</span>
      <span class="news-date">{{$v['art_time']}}</span>
          <!--<span class="tag">
            <a href="/films/341138" title="黑豹" target="_blank" data-act="news-click" data-val="{ newsid:35184 }">
              黑豹
            </a>
          </span>--> 
      <span class="images-view-count view-count">{{$v['art_view']}}</span>
    </div>
  </div>
</div>

              
      </div>
@endforeach
 <div class="hot-pager">
<ul class="list-pager">

 {!! $art->appends($request->all())->render() !!}
  </ul>
</div>
    </div>
  </div>

    </div>
@include('home.public.footer')
