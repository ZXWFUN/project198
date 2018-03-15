@include('home.public.head')

  <div class="banner">
  @foreach($filmsinfo as $v)
    <div class="wrapper clearfix">
      <div class="celeInfo-left">
        <div class="avatar-shadow" >
          <img class="avatar" src="{{ $v['pic'] }}" style="height:290px" alt="">
            <div class="movie-ver"></div>
        </div>
      </div>
      <div class="celeInfo-right clearfix">
            <div class="movie-brief-container" >
      <h3 class="name">{{ $v['filmname'] }}</h3>
      <ul>
        <li class="ellipsis">{{ $v['keyword'] }}</li>
        <li class="ellipsis">
        
        </li>
        <li class="ellipsis">{{ $v['time'] }}</li>
        <li class="ellipsis">{{ $v['show_time'] }}</li>
      </ul>
    </div>
    <div class="action-buyBtn">
      <div class="action clearfix" data-val="{movieid:1201161}">
        <a class="wish " data-wish="false" data-score="" data-bid="b_gbxqtw6x">
          <div>
            <i class="icon wish-icon"></i>
              <span class="wish-msg" data-act="wish-click">想看</span>
          </div>
        </a>
        <a class="score-btn " data-bid="b_rxxpcgwd">
          <div>
            <i class="icon score-btn-icon"></i>
            <span class="score-btn-msg" data-act="comment-open-click">
                评分
            </span>
          </div> 
      </div>
      <a class="btn buy" href="{{url('goumai1')}}/{{$v['pid']}}/0" target="_blank">立即购票</a>
    </div>

    <div class="movie-stats-container">

        <div class="movie-index">
          <p class="movie-index-title">用户评分</p>
          <div class="movie-index-content score normal-score">
              <span class="index-left info-num ">
                <span class="stonefont">{{ $v['number'] }}</span>
              </span>
              <div class="index-right">
                <!-- <div class='star-wrapper'> -->
                  <!-- <div class="star-on" style="width:89%;"></div> -->
                <!-- </div> -->
                 <span class='score-num'><span class="stonefont"></span></span>
              </div>
          </div>
        </div>

        

        <div class="movie-index">
          <p class="movie-index-title">累计票房</p>
          <div class="movie-index-content box">
              <span class="stonefont">{{ $v['box_office'] }}</span><span class="unit"></span>
          </div>
        </div>
    </div>

      </div>
    </div>
</div>


    <div class="container" id="app" class="page-movie/detail" >
<div class="main-content-container clearfix">
        <div class="tab-desc tab-content active" data-val="{tabtype:'desc'}">

  <div class="module">
    <div class="mod-title">
      <h3>剧情简介</h3>
    </div>
    <div class="mod-content" style="width:600px">
                    <span class="dra">{{ $v['introduce'] }}</span>

    </div>
  </div>


  <div class="module">
    <div class="mod-title">
      <h3>演职人员</h3>
    </div>
    <div class="mod-content">
  <div class="celebrity-type">
    {{ $v['people'] }}
  </div>
 @endforeach
 </div>
</div>

  <div class="footer">
    <p class="friendly-links">
      友情链接 :
      <a href="http://www.meituan.com" data-query="utm_source=wwwmaoyan" target="_blank">美团网</a>
      <span></span>
      <a href="http://i.meituan.com/client" data-query="utm_source=wwwmaoyan" target="_blank">美团下载</a>
    </p>
    <p>
      &copy;2016 猫眼电影 maoyan.com
      <a href="https://tsm.miit.gov.cn/pages/EnterpriseSearchList_Portal.aspx?type=0&keyword=京ICP证160733号&pageNo=1" target="_blank">京ICP证160733号</a>
      <a href="http://www.miibeian.gov.cn" target="_blank">京ICP备16022489号-1</a>
      京公网安备 11010502030881号
      <a href="/about/licence" target="_blank">网络文化经营许可证</a>
      <a href="http://www.meituan.com/about/rules" target="_blank">电子公告服务规则</a>
    </p>
    <p>北京猫眼文化传媒有限公司</p>
  </div>
  <!--[if IE 8]><script src="js/es5-shim.bbad933f.js"></script><![endif]-->
  <!--[if IE 8]><script src="js/es5-sham.d6ea26f4.js"></script><![endif]-->
  <script src="{{ asset('home/js/common.1faad3f9.js') }}"></script>
  <script src="{{ asset('home/js/news-hotnews.858de7f4.js') }}"></script>
</body>

</html>
