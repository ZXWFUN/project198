<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
<head>
  <title></title>
  
  <link rel="dns-prefetch" href="//p0.meituan.net"  />
  <link rel="dns-prefetch" href="//p1.meituan.net"  />
  <link rel="dns-prefetch" href="//ms0.meituan.net" />
  <link rel="dns-prefetch" href="//ms1.meituan.net" />
  <link rel="dns-prefetch" href="//analytics.meituan.com" />
  <link rel="dns-prefetch" href="//report.meituan.com" />
  <link rel="dns-prefetch" href="//frep.meituan.com" />

  
  <meta charset="utf-8">
  <meta name="keywords" content="壮志高飞">
  <meta name="description" content="国内观众优选的在线购票平台，用户流行的观影决策平台。">
  <meta http-equiv="cleartype" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="renderer" content="webkit" />

  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="email=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <script>
  cid = "c_74z36h5";
  ci = 73;
val = {"id":35149};    window.system = {"newsId":"35149","shareImg":"http://p1.meituan.net/movie/0ad57492e8c91f5a1374666396e0490a704443.jpg@750w_1l"};

  window.openPlatform = '';

  </script>

  <link rel="stylesheet" href="{{ asset('home/css/common.4b838ec3.css') }}" />
  <link rel="stylesheet" href="{{ asset('home/css/news-detail.8be10f92.css') }}" />
  <script src="{{ asset('home/js/stat.583e6097.js') }}"></script>

  <script>if(window.devicePixelRatio >= 2) { document.write('<link rel="stylesheet" href="{{ asset('home/css/image-2x.8ba7074d.css') }}"/>') }</script>
  <style>
    @font-face {
      font-family: stonefont;
      src: url('//vfile.meituan.net/colorstone/2c7727cea8be2c027648d9276d0609ac3168.eot');
      src: url('//vfile.meituan.net/colorstone/2c7727cea8be2c027648d9276d0609ac3168.eot?#iefix') format('embedded-opentype'),
           url('//vfile.meituan.net/colorstone/f7366e94a3f5b1586215050945b59b192084.woff') format('woff');
    }

    .stonefont {
      font-family: stonefont;
    }
  </style>
</head>
<body>


<div class="header">
  <div class="header-inner">
        <a href="/" class="logo" data-act="icon-click"></a>
        <div class="city-container" data-val="{currentcityid:73 }">
            <div class="city-selected">
                <div class="city-name">
                  郑州
                  <span class="caret"></span>
                </div>
            </div>
            <div class="city-list" data-val="{ localcityid: 73 }">
                <div class="city-list-header">定位城市：<a class="js-geo-city">郑州</a></div>
                
            </div>
        </div>


        <div class="nav">
            <ul class="navbar">
                <li><a href="/" data-act="home-click"  >首页</a></li>
                <li><a href="/films" data-act="movies-click" >电影</a></li>
                <li><a href="/cinemas" data-act="cinemas-click" >影院</a></li> 
                
                <li><a href="/board" data-act="board-click" >榜单</a></li>
                <li><a href="/news" data-act="hotNews-click" >热点</a></li>
            </ul>
        </div>

        <div class="user-info">
            <div class="user-avatar J-login">
              <img src="picture/7dd82a16316ab32c8359debdb04396ef2897.png">
              <span class="caret"></span>
              <ul class="user-menu">
                <li><a href="javascript:void 0">登录</a></li>
              </ul>
            </div>
        </div>

        <form action="/query" target="_blank" class="search-form" data-actform="search-click">
            <input name="kw" class="search" type="search" maxlength="32" placeholder="找影视剧、影人、影院" autocomplete="off">
            <input class="submit" type="submit" value="">
        </form>

        <div class="app-download">
          <a href="/app" target="_blank">
            <span class="iphone-icon"></span>
            <span class="apptext">APP下载</span>
            <span class="caret"></span>
            <div class="download-icon">
                <p class="down-title">扫码下载APP</p>
                <p class='down-content'>选座更优惠</p>
            </div>
          </a>
        </div>
  </div>
</div>
<div class="header-placeholder"></div>


    <div class="container" id="app" class="page-news/detail" >
<div class="news-page">
  
  <div class="news-related">
  <div class="module">
    <div class="mod-title">
      <h3>相关电影</h3>
    </div>
    <div class="mod-content">
        <div class="related-movies">
<dl class="movie-list">
  <dd>
    <div class="movie-item">
      <a href="/films/1207944" target="_blank" data-act="movie-click" data-val="{movieid:1207944}">
      <div class="movie-poster">
        <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
        <img data-src="{!! $film['pic'] !!}" />
      </div>
      </a>
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="">
      <a href="/films/1207944" target="_blank" data-act="movies-click" data-val="{movieId:1207944}">{!! $film['filmname'] !!}</a>
    </div>

  
</dl>

</div>


    </div>
  </div>

  </div>
  <div class="news-main">
    @foreach($art as $v)
    <div class="news-title">
      <h1>{{$v['art_title']}}</h1>
      <div class="news-subtitle">
        {{$v['art_editor']}}&nbsp;&nbsp;
        {{$v['art_time']}}&nbsp;&nbsp;
        <span class="news-icon-views"></span>
        {{$v['art_view']}}
      </div>
    </div>
    <div class="news-content">
    <p style="">{!!$v['art_content']!!}</p>
    </div>
    
    <div class="news-action" data-val="{ newsid: 35149 }">
     
      <div class="news-action-block share-banner">
        <span class="share-banner-icon"></span>&nbsp;&nbsp;分 享
      </div>
    </div>
    @endforeach
    
  <div class="module">
    <div class="mod-title">
      <h3>最新评论</h3>
    </div>
    <div class="mod-content">
            <dl class="comments-list">
<dd class="comment-item">
  <div class="comment-avatar">
    <img src="picture/58d3cb55f20171b337d1da4b33d2e2531171.png" alt=""
      style="background-image: url(images/244b39eaaddccf571133b075bd9e9cc613938.jpg@50w_50h_1e_1c)"/>
    <div class="level level-v4"></div>
  </div>
  <div class="comment-main">
    <div class="comment-info">
      <div class="comment-action" data-val="{ id: 1058601 }">
          <a href="javascript:" class="comment-report" data-commentid="1058601"
            data-act="report-news-comment">举报</a>
          <span class="like-comment" data-commentid="1058601"
          data-act="like-news-comment">
            <span class="like-icon"></span>
            &nbsp;
            <span class="like-comment-count" data-count="0">
              赞
            </span>
          </span>
      </div>
      <div class="comment-nickname">
        psbins
      </div>
      <div class="comment-time">
        10分钟前&nbsp;西安
      </div>
    </div>
    <div class="comment-content">
      看海报确定有人看?好吧有人看
    </div>
  </div>
</dd>
<dd class="comment-item">
  <div class="comment-avatar">
    <img src="picture/58d3cb55f20171b337d1da4b33d2e2531171.png" alt=""
      style="background-image: url(images/7dd82a16316ab32c8359debdb04396ef2897.png@50w_50h_1e_1c)"/>
    <div class="level level-v4"></div>
  </div>
  <div class="comment-main">
    <div class="comment-info">
      <div class="comment-action" data-val="{ id: 1058591 }">
          <a href="javascript:" class="comment-report" data-commentid="1058591"
            data-act="report-news-comment">举报</a>
          <span class="like-comment" data-commentid="1058591"
          data-act="like-news-comment">
            <span class="like-icon"></span>
            &nbsp;
            <span class="like-comment-count" data-count="2">
              2
            </span>
          </span>
      </div>
      <div class="comment-nickname">
        影者最为高
      </div>
      <div class="comment-time">
        18分钟前&nbsp;张家港
      </div>
    </div>
    <div class="comment-content">
      撤侨类的题材总这么糟蹋就烂了
    </div>
  </div>
</dd>
      </dl>
      <div class="loading-banner" data-more="false"
      data-act="more-news-comments" data-val="{ newsid: 35149 }">
      </div>

    </div>
  </div>
  </div>
</div>

<script id="share-info" type="text/html">
<div class="share-board">
  <div class="share-qrcode">
    <div class="share-qrcode-desc">QQ / 微信扫码</div>
    <div class="share-qrcode-img"></div>
  </div>
  <div class="share-list">
  <a target="_blank" class="share-icon share-icon-douban" data-act="news-share-douban" data-val="{ newsid:35149}"
  href="https://www.douban.com/share/service/?href=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&name=%E3%80%8A%E5%A3%AE%E5%BF%97%E9%AB%98%E9%A3%9E%E3%80%8B%E6%9B%9D%E6%92%A4%E4%BE%A8%E7%89%B9%E8%BE%91%EF%BC%8C%E9%99%88%E4%B9%94%E6%81%A9%E9%83%91%E6%81%BA%E6%90%BA%E6%89%8B%E8%90%A5%E6%95%91%E5%90%8C%E8%83%9E%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1" title="分享到豆瓣">豆瓣</a>
  <a target="_blank" class="share-icon share-icon-qzone" data-act="news-share-qqzone" data-val="{ newsid:35149}"
  href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&summary=%E3%80%8A%E5%A3%AE%E5%BF%97%E9%AB%98%E9%A3%9E%E3%80%8B%E6%9B%9D%E6%92%A4%E4%BE%A8%E7%89%B9%E8%BE%91%EF%BC%8C%E9%99%88%E4%B9%94%E6%81%A9%E9%83%91%E6%81%BA%E6%90%BA%E6%89%8B%E8%90%A5%E6%95%91%E5%90%8C%E8%83%9E%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&pics=http%3A%2F%2Fp1.meituan.net%2Fmovie%2F0ad57492e8c91f5a1374666396e0490a704443.jpg%40750w_1l" title="分享到QQ空间">QQ空间</a>
  <a target="_blank" class="share-icon share-icon-renren" data-act="news-share-renren" data-val="{ newsid:35149}"
  href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&srcUrl=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&description=%E3%80%8A%E5%A3%AE%E5%BF%97%E9%AB%98%E9%A3%9E%E3%80%8B%E6%9B%9D%E6%92%A4%E4%BE%A8%E7%89%B9%E8%BE%91%EF%BC%8C%E9%99%88%E4%B9%94%E6%81%A9%E9%83%91%E6%81%BA%E6%90%BA%E6%89%8B%E8%90%A5%E6%95%91%E5%90%8C%E8%83%9E%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&pic=http%3A%2F%2Fp1.meituan.net%2Fmovie%2F0ad57492e8c91f5a1374666396e0490a704443.jpg%40750w_1l" title="分享到人人网">人人网</a>
  <a target="_blank" class="share-icon share-icon-weibo" data-act="news-share-weibo" data-val="{ newsid:35149}"
  href="http://v.t.sina.com.cn/share/share.php?appkey=375875218&url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&title=%E3%80%8A%E5%A3%AE%E5%BF%97%E9%AB%98%E9%A3%9E%E3%80%8B%E6%9B%9D%E6%92%A4%E4%BE%A8%E7%89%B9%E8%BE%91%EF%BC%8C%E9%99%88%E4%B9%94%E6%81%A9%E9%83%91%E6%81%BA%E6%90%BA%E6%89%8B%E8%90%A5%E6%95%91%E5%90%8C%E8%83%9E%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&pic=http%3A%2F%2Fp1.meituan.net%2Fmovie%2F0ad57492e8c91f5a1374666396e0490a704443.jpg%40750w_1l" title="分享到新浪微博">新浪微博</a>
  <a target="_blank" class="share-icon share-icon-tweibo" data-act="news-share-tweibo" data-val="{ newsid:35149}"
  href="http://v.t.qq.com/share/share.php?appkey=51d04b4824744e71bd1e55baceb42562&url=http%3A%2F%2Fmaoyan.com%2Ffilms%2Fnews%2F35149&title=%E3%80%8A%E5%A3%AE%E5%BF%97%E9%AB%98%E9%A3%9E%E3%80%8B%E6%9B%9D%E6%92%A4%E4%BE%A8%E7%89%B9%E8%BE%91%EF%BC%8C%E9%99%88%E4%B9%94%E6%81%A9%E9%83%91%E6%81%BA%E6%90%BA%E6%89%8B%E8%90%A5%E6%95%91%E5%90%8C%E8%83%9E%20-%20%E7%8C%AB%E7%9C%BC%E7%94%B5%E5%BD%B1&pic=http%3A%2F%2Fp1.meituan.net%2Fmovie%2F0ad57492e8c91f5a1374666396e0490a704443.jpg%40750w_1l" title="分享到腾讯微博">腾讯微博</a>
  </div>
</div>

</script>

<script id="page-data" type="application/json">
{"authed":false,"newsId":"35149","timestamp":1520566959151}
</script>

    </div>
@include('home.public.footer')