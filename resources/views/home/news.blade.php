@include('home.public.head')

  <div class="subnav">
    <ul class="navbar">
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:1}" data-state-val="{subnavId:1}" class="active" href="news">热点首页</a>
      </li>
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:2}" href="hot">新闻资讯</a>
      </li>
      
    </ul>
  </div>


  <div class="container" id="app" class="page-news/hotNews">
    <div class="hotIndex-container">
      <div class="index-news-container clearfix">
        <div class="popular-container">
        
          <h4 class="red">{{$news->last()['news_name']}}</h4>
          <ul>
           
            @foreach($art as $v)
            @if($v['news_id'] == 2)
            <li class="">
              <div>
                <div class="normal-link">
                  <i class="ranking red">{{$v['art_id']}}</i>
                  <p class="top10-news-content">
                    <a href="xiangqing/{{$v['art_id']}}" target="_blank" data-act="news-click" data-val="{newsid:33944}">{{$v['art_title']}}</a>
                  </p>
                </div>
              </div>
            </li>
            @endif
            @endforeach
          </ul>
        </div>

        <div class="latest-container">
          <h4 class="latest-header red">
            {{$news->first()['news_name']}}
            <a href="hot" class="all-latest" data-act="all-news-click">
              全部
              <span class="arrow red-arrow"></span>
            </a>
          </h4>


          <div class="latest-content clearfix">
          @foreach($art as $v)
          @if($v['news_id'] == 1)
            <div class="latest-news-box">
              <a href="xiangqing/{{$v['art_id']}}" target="_blank" data-act="news-click" data-val="{newsid:34032}">
                <img src="{{$v['art_thumb']}}" alt="">
              </a>
              <p class="latest-news-title">
                <a href="xiangqing/{{$v['art_id']}}" class="two-line" title="" target="_blank" data-act="news-click" data-val="{newsid:34032}">
                  {{$v['art_title']}}
                </a>
              </p>
              <div class="info-container">
                <span>{{$v['art_editor']}}</span>
                <span class="images-view-count view-count">{{$v['art_view']}}</span>
              </div>
            </div>
             @endif
            @endforeach
          </div>
        </div>
      </div> 
    </div>
  </div>
  
  @include('home.public.footer')