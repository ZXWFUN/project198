<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <title>猫眼电影 - 一网打尽好电影</title>

  <link rel="dns-prefetch" href="//p0.meituan.net" />
  <link rel="dns-prefetch" href="//p1.meituan.net" />
  <link rel="dns-prefetch" href="//ms0.meituan.net" />
  <link rel="dns-prefetch" href="//ms1.meituan.net" />
  <link rel="dns-prefetch" href="//analytics.meituan.com" />
  <link rel="dns-prefetch" href="//report.meituan.com" />
  <link rel="dns-prefetch" href="//frep.meituan.com" />


  <meta charset="utf-8">
  <meta name="keywords" content="电影,电视剧,票房,美剧,猫眼电影,电影排行榜,电影票,经典电影,在线观看">
  <meta name="description" content="国内观众优选的在线购票平台，用户流行的观影决策平台。">
  <meta http-equiv="cleartype" content="yes" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="renderer" content="webkit" />

  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="email=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script>
    cid = "c_6jadt9m";
    ci = 1;
    window.system = {};

    window.openPlatform = ''; 
  </script>
  <!--公共样式-->
@include('home.public.styles')
  <!--公共样式结束-->

  <!--样式占位符-->
@yield('style');
  <!--样式占位符结束-->

  <!--公共js文件-->
@include('home.public.script')
  <!--公共js文件结束-->
 
  <script>
    if (window.devicePixelRatio >= 2) {
      document.write('<link rel="stylesheet" href="css/image-2x.8ba7074d.css"/>')
    }
  </script>

  <meta name="msvalidate.01" content="F338006073F396CBBDA443AAB6A8BA47" />
  <meta name="360-site-verification" content="6f1d12912a62a74ce2f1b3c2e75f6c23" />
  <meta name="sogou_site_verification" content="uh9MkgvBm3" />
  <style>
    @font-face {
      font-family: stonefont;
      src: url('//vfile.meituan.net/colorstone/209ced57b05a957363585dd0cdf900cb3168.eot');
      src: url('//vfile.meituan.net/colorstone/209ced57b05a957363585dd0cdf900cb3168.eot?#iefix') format('embedded-opentype'),
      url('//vfile.meituan.net/colorstone/bb10f26c719be930ef44e724dac6f6712084.woff') format('woff');
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
      <div class="city-container" data-val="{currentcityid:1 }">
        <div class="city-selected">
          <div class="city-name">
            北京
            <span class="caret"></span>
          </div>
        </div>
        <div class="city-list" data-val="{ localcityid: 1 }">
          <div class="city-list-header">定位城市：
            <a class="js-geo-city">北京</a>
          </div>

        </div>
      </div>


      <div class="nav">
        <ul class="navbar">
          <li>
            <a href="/" data-act="home-click" class="active">首页</a>
          </li>
          <li>
            <a href="/films" data-act="movies-click">电影</a>
          </li>
          <li>
            <a href="/cinemas" data-act="cinemas-click">影院</a>
          </li>

          <li>
            <a href="/board" data-act="board-click">榜单</a>
          </li>
          <li>
            <a href="/news" data-act="hotNews-click">热点</a>
          </li>
        </ul>
      </div>

      <div class="user-info">
        <div class="user-avatar J-login">
          <img src="picture/7dd82a16316ab32c8359debdb04396ef2897.png">
          <span class="caret"></span>
          <ul class="user-menu">
            <li>
              <a href="javascript:void 0">登录</a>
            </li>
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

  <div class="banner">
    <div class="slider single-item slider-banner">
      <a target="_blank" data-act="bannerNews-click" href="/films/news/33380" data-bgUrl="{{ asset('home/picture/lun1.jpg') }}"></a>
      <a target="_blank" data-act="bannerNews-click" href="/films/news/33680" data-bgUrl="{{ asset('home/picture/lun2.jpg') }}"></a>
      <a target="_blank" data-act="bannerNews-click" href="/films/news/32529" data-bgUrl="{{ asset('home/picture/lun3.jpg') }}"></a>
    </div>

  </div>

  <div class="container" id="app" class="page-home/index">
    <div class="content">
      <div class="aside">
        <div class="ranking-box-wrapper">
          <div class="panel">
            <div class="panel-header">
              <span class="panel-title">
                <span class="textcolor_red">今日票房</span>
              </span>
            </div>
            <div class="panel-content">
              <ul class="ranking-wrapper ranking-box">
                <li class="ranking-item ranking-top ranking-index-1">
                  <a href="/films/1208122" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1208122}">
                    <div class="ranking-top-left">
                      <i class="ranking-top-icon"></i>
                      <img class="ranking-img  default-img" data-src="picture/62a6d66dd7684eac563b306893e36a9b108354.jpg@120w_80h_1e_1c" />
                    </div>
                    <div class="ranking-top-right">
                      <div class="ranking-top-right-main">
                        <span class="ranking-top-moive-name">神秘巨星</span>


                        <p class="ranking-top-wish">
                          <span class="stonefont">&#xe947;&#xe2a7;&#xf102;.&#xec75;&#xf777;</span>万
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="ranking-item ranking-index-2">
                  <a href="/films/338493" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:338493}">
                    <span class="normal-link">
                      <i class="ranking-index">2</i>
                      <span class="ranking-movie-name">南极之恋</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe947;&#xed36;&#xf241;.&#xed36;&#xe947;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-3">
                  <a href="/films/246714" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:246714}">
                    <span class="normal-link">
                      <i class="ranking-index">3</i>
                      <span class="ranking-movie-name">马戏之王</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xf241;&#xf102;.&#xf241;&#xe2a7;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-4">
                  <a href="/films/248639" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:248639}">
                    <span class="normal-link">
                      <i class="ranking-index">4</i>
                      <span class="ranking-movie-name">移动迷宫3：死亡解药</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xe947;&#xf241;.&#xe947;&#xed36;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-5">
                  <a href="/films/71946" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:71946}">
                    <span class="normal-link">
                      <i class="ranking-index">5</i>
                      <span class="ranking-movie-name">无问西东</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xe947;&#xed36;.&#xf7ef;&#xe2a7;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-6">
                  <a href="/films/1208748" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1208748}">
                    <span class="normal-link">
                      <i class="ranking-index">6</i>
                      <span class="ranking-movie-name">小马宝莉大电影</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;&#xf022;.&#xe63b;&#xf777;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-7">
                  <a href="/films/1204714" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1204714}">
                    <span class="normal-link">
                      <i class="ranking-index">7</i>
                      <span class="ranking-movie-name">忌日快乐</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe63b;&#xe63b;.&#xe2a7;&#xf241;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-8">
                  <a href="/films/672130" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:672130}">
                    <span class="normal-link">
                      <i class="ranking-index">8</i>
                      <span class="ranking-movie-name">奇迹男孩</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf102;&#xe947;.&#xf102;&#xe947;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-9">
                  <a href="/films/1203768" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1203768}">
                    <span class="normal-link">
                      <i class="ranking-index">9</i>
                      <span class="ranking-movie-name">浪矢解忧杂货店</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf022;&#xe947;.&#xf241;&#xf241;</span>万
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-10">
                  <a href="/films/1212787" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1212787}">
                    <span class="normal-link">
                      <i class="ranking-index">10</i>
                      <span class="ranking-movie-name">坏爸爸</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf022;&#xf777;.&#xf022;&#xec75;</span>万
                      </span>
                    </span>
                  </a>
                </li>

              </ul>


            </div>
          </div>
        </div>

        <div class="box-total-wrapper clearfix">
          <h3>今日大盘</h3>
          <div>
            <p>
              <span class="num">
                <span class="stonefont">&#xec75;&#xf241;&#xf022;&#xf241;.&#xe2a7;</span>
              </span>万
              <a class="more" target="_blank" data-act="moreDayTip-click" href="https://piaofang.maoyan.com/">查看更多
                <span class="panel-arrow panel-arrow-red"></span>
              </a>
            </p>
            <p class="meta-info">
              北京时间 10:19:19
              <span class="pull-right">猫眼专业版实时票房数据</span>
            </p>
          </div>
        </div>

        <div class="most-expect-wrapper">
          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="/board/6" class="textcolor_orange" data-act="all-mostExpect-click">
                  <span>查看完整榜单</span>
                </a>
                <span class="panel-arrow panel-arrow-orange"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_orange">最受期待</span>
              </span>
            </div>
            <div class="panel-content">
              <ul class="ranking-wrapper ranking-mostExpect">
                <li class="ranking-item ranking-top ranking-index-1">
                  <a href="/films/346272" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:346272}">
                    <div class="ranking-top-left">
                      <i class="ranking-top-icon"></i>
                      <img class="ranking-img  default-img" data-src="picture/ddbaa3f31cdbdfa6cd72721de63545021032555.jpg@140w_194h_1e_1c" />
                    </div>
                    <div class="ranking-top-right">
                      <div class="ranking-top-right-main">
                        <span class="ranking-top-moive-name">捉妖记2</span>

                        <p class="ranking-release-time">上映时间：2018-02-16</p>

                        <p class="ranking-top-wish">
                          <span class="stonefont">&#xf241;&#xf022;&#xf777;&#xf102;&#xe2a7;&#xe63b;</span>人想看
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="ranking-item ranking-index-2">
                  <a href="/films/344990" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:344990}">
                    <i class="ranking-index">2</i>
                    <span class="img-link">
                      <img class="ranking-img default-img" src="picture/d647ad54278e4d55f77006c72bad3af7487644.jpg@170w_118h_1e_1c"
                      />
                    </span>
                    <div class="name-link ranking-movie-name">唐人街探案2</div>

                    <span class="ranking-num-info">
                      <span class="stonefont">&#xf7ef;&#xe2a7;&#xe63b;&#xe2a7;&#xf022;&#xec75;</span>人想看</span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-3">
                  <a href="/films/338463" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:338463}">
                    <i class="ranking-index">3</i>
                    <span class="img-link">
                      <img class="ranking-img default-img" src="picture/b805e34c98efc3cafb1745d70e818f5f966523.jpg@170w_118h_1e_1c"
                      />
                    </span>
                    <div class="name-link ranking-movie-name">西游记女儿国</div>

                    <span class="ranking-num-info">
                      <span class="stonefont">&#xf7ef;&#xec75;&#xf241;&#xe2a7;&#xf7ef;&#xf7ef;</span>人想看</span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-4">
                  <a href="/films/1211482" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:1211482}">
                    <span class="normal-link">
                      <i class="ranking-index">4</i>
                      <span class="ranking-movie-name">熊出没·变形记</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe63b;&#xec75;&#xe2a7;&#xf7ef;&#xed36;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-5">
                  <a href="/films/1182552" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:1182552}">
                    <span class="normal-link">
                      <i class="ranking-index">5</i>
                      <span class="ranking-movie-name">红海行动</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xe947;&#xe63b;&#xe2a7;&#xe63b;&#xe2a7;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-6">
                  <a href="/films/341138" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:341138}">
                    <span class="normal-link">
                      <i class="ranking-index">6</i>
                      <span class="ranking-movie-name">黑豹</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf022;&#xf241;&#xe2a7;&#xf102;&#xf777;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-7">
                  <a href="/films/248170" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:248170}">
                    <span class="normal-link">
                      <i class="ranking-index">7</i>
                      <span class="ranking-movie-name">复仇者联盟3：无限战争</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xf7ef;&#xec75;&#xed36;&#xec75;&#xed36;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-8">
                  <a href="/films/1211538" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:1211538}">
                    <span class="normal-link">
                      <i class="ranking-index">8</i>
                      <span class="ranking-movie-name">祖宗十九代</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf022;&#xf102;&#xf7ef;&#xed36;&#xf102;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-9">
                  <a href="/films/78460" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:78460}">
                    <span class="normal-link">
                      <i class="ranking-index">9</i>
                      <span class="ranking-movie-name">环太平洋：雷霆再起</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xf241;&#xf777;&#xe63b;&#xe947;&#xed36;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-10">
                  <a href="/films/247083" target="_blank" data-act="mostExpect-movie-click" data-val="{movieid:247083}">
                    <span class="normal-link">
                      <i class="ranking-index">10</i>
                      <span class="ranking-movie-name">闺蜜2</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xec75;&#xe2a7;&#xe2a7;&#xf777;&#xe947;&#xf022;</span>人想看
                      </span>
                    </span>
                  </a>
                </li>

              </ul>


            </div>
          </div>
        </div>

        <div class="top100-wrapper">
          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="/board/4" class="textcolor_orange" data-act="all-TOP100-click">
                  <span>查看完整榜单</span>
                </a>
                <span class="panel-arrow panel-arrow-orange"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_orange">TOP 100</span>
              </span>
            </div>
            <div class="panel-content">
              <ul class="ranking-wrapper ranking-top100">
                <li class="ranking-item ranking-top ranking-index-1">
                  <a href="/films/1203" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1203}">
                    <div class="ranking-top-left">
                      <i class="ranking-top-icon"></i>
                      <img class="ranking-img  default-img" data-src="picture/2d52f6932ca2f47871ca27801c71e4cf98763.jpg@120w_80h_1e_1c" />
                    </div>
                    <div class="ranking-top-right">
                      <div class="ranking-top-right-main">
                        <span class="ranking-top-moive-name">霸王别姬</span>


                        <p class="ranking-top-wish">
                          <span class="stonefont">&#xe2a7;.&#xf022;</span>分
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="ranking-item ranking-index-2">
                  <a href="/films/1297" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1297}">
                    <span class="normal-link">
                      <i class="ranking-index">2</i>
                      <span class="ranking-movie-name">肖申克的救赎</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xf241;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-3">
                  <a href="/films/2641" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:2641}">
                    <span class="normal-link">
                      <i class="ranking-index">3</i>
                      <span class="ranking-movie-name">罗马假日</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xec75;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-4">
                  <a href="/films/4055" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:4055}">
                    <span class="normal-link">
                      <i class="ranking-index">4</i>
                      <span class="ranking-movie-name">这个杀手不太冷</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xf241;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-5">
                  <a href="/films/1247" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1247}">
                    <span class="normal-link">
                      <i class="ranking-index">5</i>
                      <span class="ranking-movie-name">教父</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xf7ef;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-6">
                  <a href="/films/267" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:267}">
                    <span class="normal-link">
                      <i class="ranking-index">6</i>
                      <span class="ranking-movie-name">泰坦尼克号</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xf241;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-7">
                  <a href="/films/123" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:123}">
                    <span class="normal-link">
                      <i class="ranking-index">7</i>
                      <span class="ranking-movie-name">龙猫</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xe947;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-8">
                  <a href="/films/837" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:837}">
                    <span class="normal-link">
                      <i class="ranking-index">8</i>
                      <span class="ranking-movie-name">唐伯虎点秋香</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xe947;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-9">
                  <a href="/films/1212" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1212}">
                    <span class="normal-link">
                      <i class="ranking-index">9</i>
                      <span class="ranking-movie-name">千与千寻</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xf7ef;</span>分
                      </span>
                    </span>
                  </a>
                </li>

                <li class="ranking-item ranking-index-10">
                  <a href="/films/2760" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:2760}">
                    <span class="normal-link">
                      <i class="ranking-index">10</i>
                      <span class="ranking-movie-name">魂断蓝桥</span>

                      <span class="ranking-num-info">
                        <span class="stonefont">&#xe2a7;.&#xe947;</span>分
                      </span>
                    </span>
                  </a>
                </li>

              </ul>


            </div>
          </div>
        </div>

      </div>
      <div class="main">
        <div class="movie-grid">
          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="/films?showType=1" class="textcolor_red" data-act="all-playingMovie-click">
                  <span>全部</span>
                </a>
                <span class="panel-arrow panel-arrow-red"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_red">正在热映（52部）</span>
              </span>
            </div>
            <div class="panel-content">
              <dl class="movie-list">
                <dd>
                  <div class="movie-item">
                    <a href="/films/1208122" target="_blank" data-act="playingMovie-click" data-val="{movieid:1208122}">
                      <div class="movie-poster">
                        <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                        <img data-src="picture/ba489e6ba90fe7b0110479c548797396585731.png@160w_220h_1e_1c" />
                        <div class="movie-overlay movie-overlay-bg">
                          <div class="movie-info">
                            <div class="movie-score">
                              <i class="integer">9.</i>
                              <i class="fraction">5</i>
                            </div>
                            <div class="movie-title movie-title-padding" title="神秘巨星">神秘巨星</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <div class="movie-detail movie-detail-strong movie-sale">
                      <a href="/cinemas?movieId=1208122" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:1208122}">购 票</a>
                    </div>
                    <div class="movie-ver"></div>
                  </div>

                  <dd>
                    <div class="movie-item">
                      <a href="/films/338493" target="_blank" data-act="playingMovie-click" data-val="{movieid:338493}">
                        <div class="movie-poster">
                          <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                          <img data-src="picture/97bde8120bac903ff62d2f4c3b943ff6887193.jpg@160w_220h_1e_1c" />
                          <div class="movie-overlay movie-overlay-bg">
                            <div class="movie-info">
                              <div class="movie-score">
                                <i class="integer">9.</i>
                                <i class="fraction">0</i>
                              </div>
                              <div class="movie-title movie-title-padding" title="南极之恋">南极之恋</div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="movie-detail movie-detail-strong movie-sale">
                        <a href="/cinemas?movieId=338493" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:338493}">购 票</a>
                      </div>
                      <div class="movie-ver">
                        <i class="m3d"></i>
                      </div>
                    </div>

                    <dd>
                      <div class="movie-item">
                        <a href="/films/346272" target="_blank" data-act="playingMovie-click" data-val="{movieid:346272}">
                          <div class="movie-poster">
                            <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                            <img data-src="picture/ddbaa3f31cdbdfa6cd72721de63545021032555.jpg@160w_220h_1e_1c" />
                            <div class="movie-overlay movie-overlay-bg">
                              <div class="movie-info">
                                <div class="movie-title" title="捉妖记2">捉妖记2</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="movie-detail movie-detail-strong movie-sale">
                          <a href="/cinemas?movieId=346272" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:346272}">购 票</a>
                        </div>
                        <div class="movie-ver">
                          <i class="imax2d"></i>
                        </div>
                      </div>

                      <dd>
                        <div class="movie-item">
                          <a href="/films/344990" target="_blank" data-act="playingMovie-click" data-val="{movieid:344990}">
                            <div class="movie-poster">
                              <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                              <img data-src="picture/efb0a5e3989f45c4f3e22108bcc27ed71037307.jpg@160w_220h_1e_1c" />
                              <div class="movie-overlay movie-overlay-bg">
                                <div class="movie-info">
                                  <div class="movie-title" title="唐人街探案2">唐人街探案2</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="movie-detail movie-detail-strong movie-sale">
                            <a href="/cinemas?movieId=344990" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:344990}">购 票</a>
                          </div>
                          <div class="movie-ver">
                            <i class="imax2d"></i>
                          </div>
                        </div>

                        <dd>
                          <div class="movie-item">
                            <a href="/films/71946" target="_blank" data-act="playingMovie-click" data-val="{movieid:71946}">
                              <div class="movie-poster">
                                <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                <img data-src="picture/75352182978ae891abb55727f51c28b6305181.jpg@160w_220h_1e_1c" />
                                <div class="movie-overlay movie-overlay-bg">
                                  <div class="movie-info">
                                    <div class="movie-score">
                                      <i class="integer">8.</i>
                                      <i class="fraction">6</i>
                                    </div>
                                    <div class="movie-title movie-title-padding" title="无问西东">无问西东</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="movie-detail movie-detail-strong movie-sale">
                              <a href="/cinemas?movieId=71946" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:71946}">购 票</a>
                            </div>
                            <div class="movie-ver"></div>
                          </div>

                          <dd>
                            <div class="movie-item">
                              <a href="/films/338463" target="_blank" data-act="playingMovie-click" data-val="{movieid:338463}">
                                <div class="movie-poster">
                                  <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                  <img data-src="picture/bfd371ed5c7290ca47a41e45e36dfe43963033.jpg@160w_220h_1e_1c" />
                                  <div class="movie-overlay movie-overlay-bg">
                                    <div class="movie-info">
                                      <div class="movie-title" title="西游记女儿国">西游记女儿国</div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <div class="movie-detail movie-detail-strong movie-sale">
                                <a href="/cinemas?movieId=338463" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:338463}">购 票</a>
                              </div>
                              <div class="movie-ver">
                                <i class="m3d"></i>
                              </div>
                            </div>

                            <dd>
                              <div class="movie-item">
                                <a href="/films/246714" target="_blank" data-act="playingMovie-click" data-val="{movieid:246714}">
                                  <div class="movie-poster">
                                    <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                    <img data-src="picture/18121bb13bd8b36243a871d075bcc80c1015601.jpg@160w_220h_1e_1c" />
                                    <div class="movie-overlay movie-overlay-bg">
                                      <div class="movie-info">
                                        <div class="movie-score">
                                          <i class="integer">9.</i>
                                          <i class="fraction">0</i>
                                        </div>
                                        <div class="movie-title movie-title-padding" title="马戏之王">马戏之王</div>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                                <div class="movie-detail movie-detail-strong movie-sale">
                                  <a href="/cinemas?movieId=246714" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:246714}">购 票</a>
                                </div>
                                <div class="movie-ver">
                                  <i class="imax2d"></i>
                                </div>
                              </div>

                              <dd>
                                <div class="movie-item">
                                  <a href="/films/1182552" target="_blank" data-act="playingMovie-click" data-val="{movieid:1182552}">
                                    <div class="movie-poster">
                                      <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                      <img data-src="picture/b03a8a75e75a416dbf981e032fa0ca8a857257.jpg@160w_220h_1e_1c" />
                                      <div class="movie-overlay movie-overlay-bg">
                                        <div class="movie-info">
                                          <div class="movie-title" title="红海行动">红海行动</div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                  <div class="movie-detail movie-detail-strong movie-sale">
                                    <a href="/cinemas?movieId=1182552" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:1182552}">购 票</a>
                                  </div>
                                  <div class="movie-ver">
                                    <i class="imax3d"></i>
                                  </div>
                                </div>

              </dl>


            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="/films?showType=2" class="textcolor_blue" data-act="all-upcomingMovie-click">
                  <span>全部</span>
                </a>
                <span class="panel-arrow panel-arrow-blue"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_blue">即将上映（260部）</span>
              </span>
            </div>
            <div class="panel-content">
              <dl class="movie-list">
                <dd>
                  <div class="movie-item">
                    <a href="/films/1199446" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1199446}">
                      <div class="movie-poster">
                        <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                        <img data-src="picture/39c5c76ba6b4fb5358a3d08be6c343e5586784.jpg@160w_220h_1e_1c" />
                        <div class="movie-overlay movie-overlay-bg">
                          <div class="movie-info">
                            <div class="movie-title" title="泡芙小姐">泡芙小姐</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <div class="movie-detail movie-wish">
                      <span class="stonefont">&#xf7ef;&#xf777;&#xf102;&#xf777;&#xe947;</span>人想看</div>
                    <div class="movie-detail movie-detail-strong movie-presale">
                      <a class="movie-presale-sep">预告片
                      </a>
                      <a href="/cinemas?movieId=1199446" class="active" target="_blank" data-act="presaleUpcomingMovie-click"
                        data-val="{movieid:1199446}">预 售</a>
                    </div>
                    <div class="movie-ver"></div>
                  </div>
                  <div class="movie-detail movie-rt">2月9日上映</div>

                  <dd>
                    <div class="movie-item">
                      <a href="/films/340946" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:340946}">
                        <div class="movie-poster">
                          <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                          <img data-src="picture/00f7b61f6205c7dca01be67e8bd525d5434044.jpg@160w_220h_1e_1c" />
                          <div class="movie-overlay movie-overlay-bg">
                            <div class="movie-info">
                              <div class="movie-title" title="纯洁心灵·逐梦演艺圈">纯洁心灵·逐梦演艺圈</div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="movie-detail movie-wish">
                        <span class="stonefont">&#xf022;&#xe947;&#xf241;&#xf777;</span>人想看</div>
                      <div class="movie-detail movie-detail-strong movie-presale">
                        <a class="movie-presale-sep">预告片
                        </a>
                        <a href="/cinemas?movieId=340946" class="active" target="_blank" data-act="presaleUpcomingMovie-click"
                          data-val="{movieid:340946}">预 售</a>
                      </div>
                      <div class="movie-ver"></div>
                    </div>
                    <div class="movie-detail movie-rt">2月9日上映</div>

                    <dd>
                      <div class="movie-item">
                        <a href="/films/1157354" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1157354}">
                          <div class="movie-poster">
                            <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                            <img data-src="picture/2e19099e27a1ec0e06a07aadd50d26441413854.jpg@160w_220h_1e_1c" />
                            <div class="movie-overlay movie-overlay-bg">
                              <div class="movie-info">
                                <div class="movie-title" title="大导归来">大导归来</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="movie-detail movie-wish">
                          <span class="stonefont">&#xe947;&#xf022;&#xf241;&#xed36;</span>人想看</div>
                        <div class="movie-detail movie-detail-strong movie-presale">
                          <a class="movie-presale-sep">预告片
                          </a>
                          <a data-act="presaleUpcomingMovie-click" data-val="{movieid:1157354}">预 售</a>
                        </div>
                        <div class="movie-ver"></div>
                      </div>
                      <div class="movie-detail movie-rt">2月9日上映</div>

                      <dd>
                        <div class="movie-item">
                          <a href="/films/1213057" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1213057}">
                            <div class="movie-poster">
                              <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                              <img data-src="picture/c1e1659fb3edf74c431e1d00ed373a30438770.jpg@160w_220h_1e_1c" />
                              <div class="movie-overlay movie-overlay-bg">
                                <div class="movie-info">
                                  <div class="movie-title" title="无迹可寻">无迹可寻</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="movie-detail movie-wish">
                            <span class="stonefont">&#xec75;&#xf777;&#xf241;&#xf102;</span>人想看</div>
                          <div class="movie-detail movie-detail-strong movie-presale">
                            <a class="movie-presale-sep">预告片
                            </a>
                            <a href="/cinemas?movieId=1213057" class="active" target="_blank" data-act="presaleUpcomingMovie-click"
                              data-val="{movieid:1213057}">预 售</a>
                          </div>
                          <div class="movie-ver"></div>
                        </div>
                        <div class="movie-detail movie-rt">2月9日上映</div>

                        <dd>
                          <div class="movie-item">
                            <a href="/films/1213080" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1213080}">
                              <div class="movie-poster">
                                <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                <img data-src="picture/a2eec1dee3f91889d765a8cb34388ab81034253.jpg@160w_220h_1e_1c" />
                                <div class="movie-overlay movie-overlay-bg">
                                  <div class="movie-info">
                                    <div class="movie-title" title="疯狂熊孩子">疯狂熊孩子</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="movie-detail movie-wish">
                              <span class="stonefont">&#xec75;&#xf777;&#xf7ef;&#xe63b;</span>人想看</div>
                            <div class="movie-detail movie-detail-strong movie-presale">
                              <a class="movie-presale-sep">预告片
                              </a>
                              <a href="/cinemas?movieId=1213080" class="active" target="_blank" data-act="presaleUpcomingMovie-click"
                                data-val="{movieid:1213080}">预 售</a>
                            </div>
                            <div class="movie-ver"></div>
                          </div>
                          <div class="movie-detail movie-rt">2月9日上映</div>

                          <dd>
                            <div class="movie-item">
                              <a href="/films/1133527" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1133527}">
                                <div class="movie-poster">
                                  <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                  <img data-src="picture/5417d8bbe372bb439e8fd8df16f9fef1156245.jpg@160w_220h_1e_1c" />
                                  <div class="movie-overlay movie-overlay-bg">
                                    <div class="movie-info">
                                      <div class="movie-title" title="阳光夏令营">阳光夏令营</div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <div class="movie-detail movie-wish">
                                <span class="stonefont">&#xf022;&#xed36;&#xe2a7;</span>人想看</div>
                              <div class="movie-detail movie-detail-strong movie-presale">
                                <a class="movie-presale-sep">预告片
                                </a>
                                <a data-act="presaleUpcomingMovie-click" data-val="{movieid:1133527}">预 售</a>
                              </div>
                              <div class="movie-ver"></div>
                            </div>
                            <div class="movie-detail movie-rt">2月9日上映</div>

                            <dd>
                              <div class="movie-item">
                                <a href="/films/1213724" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:1213724}">
                                  <div class="movie-poster">
                                    <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                    <img data-src="picture/d4934054d2874260eb4b14d19153c823369855.png@160w_220h_1e_1c" />
                                    <div class="movie-overlay movie-overlay-bg">
                                      <div class="movie-info">
                                        <div class="movie-title" title="熊猫石的奇幻旅行">熊猫石的奇幻旅行</div>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                                <div class="movie-detail movie-wish">
                                  <span class="stonefont">&#xf7ef;&#xec75;&#xe947;</span>人想看</div>
                                <div class="movie-detail movie-detail-strong movie-presale">
                                  <a class="movie-presale-sep">预告片
                                  </a>
                                  <a data-act="presaleUpcomingMovie-click" data-val="{movieid:1213724}">预 售</a>
                                </div>
                                <div class="movie-ver"></div>
                              </div>
                              <div class="movie-detail movie-rt">2月9日上映</div>

                              <dd>
                                <div class="movie-item">
                                  <a href="/films/13457" target="_blank" data-act="upcomingMovie-click" data-val="{movieid:13457}">
                                    <div class="movie-poster">
                                      <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                      <img data-src="picture/c71f54b976607e23727ab5fa116a5a5a399848.jpg@160w_220h_1e_1c" />
                                      <div class="movie-overlay movie-overlay-bg">
                                        <div class="movie-info">
                                          <div class="movie-title" title="龙凤斗">龙凤斗</div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                  <div class="movie-detail movie-wish">
                                    <span class="stonefont">&#xf241;&#xed36;&#xf777;&#xed36;</span>人想看</div>
                                  <div class="movie-detail movie-detail-strong movie-presale">
                                    <a class="movie-presale-sep">预告片
                                    </a>
                                    <a href="/cinemas?movieId=13457" class="active" target="_blank" data-act="presaleUpcomingMovie-click"
                                      data-val="{movieid:13457}">预 售</a>
                                  </div>
                                  <div class="movie-ver"></div>
                                </div>
                                <div class="movie-detail movie-rt">2月10日上映</div>

              </dl>


            </div>
          </div>

          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="/films?isPlay=1" class="textcolor_red" data-act="all-hotMovie-click">
                  <span>全部</span>
                </a>
                <span class="panel-arrow panel-arrow-red"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_red">热播电影</span>
              </span>
              <span class="panel-subtitle">
                <a href="/films?isPlay=1&catId=3" data-act="tag-hotMovie-click" data-val="{TagName:'爱情'}">爱情</a>
              </span>
              <span class="panel-subtitle">
                <a href="/films?isPlay=1&catId=2" data-act="tag-hotMovie-click" data-val="{TagName:'喜剧'}">喜剧</a>
              </span>
              <span class="panel-subtitle">
                <a href="/films?isPlay=1&catId=5" data-act="tag-hotMovie-click" data-val="{TagName:'动作'}">动作</a>
              </span>
              <span class="panel-subtitle">
                <a href="/films?isPlay=1&catId=6" data-act="tag-hotMovie-click" data-val="{TagName:'恐怖'}">恐怖</a>
              </span>
              <span class="panel-subtitle">
                <a href="/films?isPlay=1&catId=4" data-act="tag-hotMovie-click" data-val="{TagName:'动画'}">动画</a>
              </span>
            </div>
            <div class="panel-content">
              <dl class="movie-list">
                <dd>
                  <div class="movie-item">
                    <a href="/films/78772" target="_blank" data-act="hotMovie-click" data-val="{movieid:78772}">
                      <div class="movie-poster movie-poster-long">
                        <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                        <img data-src="picture/0c13090f39089e3b97e1bec1616960943882572.jpg@350w_220h_1e_1c" />
                        <div class="movie-overlay movie-overlay-bg">
                          <div class="movie-info">
                            <div class="movie-score">
                              <i class="integer">8.</i>
                              <i class="fraction">0</i>
                            </div>
                            <div class="movie-title movie-title-padding" title="闺蜜">闺蜜</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <div class="movie-ver"></div>
                  </div>

                  <dd>
                    <div class="movie-item">
                      <a href="/films/78621" target="_blank" data-act="hotMovie-click" data-val="{movieid:78621}">
                        <div class="movie-poster">
                          <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                          <img data-src="picture/__31723366__3815543.jpg@160w_220h_1e_1c" />
                          <div class="movie-overlay movie-overlay-bg">
                            <div class="movie-info">
                              <div class="movie-score">
                                <i class="integer">8.</i>
                                <i class="fraction">4</i>
                              </div>
                              <div class="movie-title movie-title-padding" title="爸爸去哪儿">爸爸去哪儿</div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <div class="movie-ver"></div>
                    </div>

                    <dd>
                      <div class="movie-item">
                        <a href="/films/78672" target="_blank" data-act="hotMovie-click" data-val="{movieid:78672}">
                          <div class="movie-poster">
                            <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                            <img data-src="picture/__39582689__9041214.jpg@160w_220h_1e_1c" />
                            <div class="movie-overlay movie-overlay-bg">
                              <div class="movie-info">
                                <div class="movie-score">
                                  <i class="integer">8.</i>
                                  <i class="fraction">9</i>
                                </div>
                                <div class="movie-title movie-title-padding" title="催眠大师">催眠大师</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="movie-ver"></div>
                      </div>

                      <dd>
                        <div class="movie-item">
                          <a href="/films/246077" target="_blank" data-act="hotMovie-click" data-val="{movieid:246077}">
                            <div class="movie-poster">
                              <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                              <img data-src="picture/a423cfe5184eedfa38d9bc6a7cfa0ca0138163.jpg@160w_220h_1e_1c" />
                              <div class="movie-overlay movie-overlay-bg">
                                <div class="movie-info">
                                  <div class="movie-score">
                                    <i class="integer">6.</i>
                                    <i class="fraction">5</i>
                                  </div>
                                  <div class="movie-title movie-title-padding" title="狙击时刻">狙击时刻</div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="movie-ver"></div>
                        </div>

                        <dd>
                          <div class="movie-item">
                            <a href="/films/246315" target="_blank" data-act="hotMovie-click" data-val="{movieid:246315}">
                              <div class="movie-poster">
                                <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                <img data-src="picture/5eddcfe53d8dfc4860ae904da694ad88661042.jpg@160w_220h_1e_1c" />
                                <div class="movie-overlay movie-overlay-bg">
                                  <div class="movie-info">
                                    <div class="movie-score">
                                      <i class="integer">8.</i>
                                      <i class="fraction">5</i>
                                    </div>
                                    <div class="movie-title movie-title-padding" title="咱们结婚吧">咱们结婚吧</div>
                                  </div>
                                </div>
                              </div>
                            </a>
                            <div class="movie-ver"></div>
                          </div>

                          <dd>
                            <div class="movie-item">
                              <a href="/films/78198" target="_blank" data-act="hotMovie-click" data-val="{movieid:78198}">
                                <div class="movie-poster">
                                  <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                  <img data-src="picture/__20595302__4697454.jpg@160w_220h_1e_1c" />
                                  <div class="movie-overlay movie-overlay-bg">
                                    <div class="movie-info">
                                      <div class="movie-score">
                                        <i class="integer">8.</i>
                                        <i class="fraction">3</i>
                                      </div>
                                      <div class="movie-title movie-title-padding" title="狄仁杰之神都龙王">狄仁杰之神都龙王</div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                              <div class="movie-ver">
                                <i class="imax3d"></i>
                              </div>
                            </div>

                            <dd>
                              <div class="movie-item">
                                <a href="/films/224973" target="_blank" data-act="hotMovie-click" data-val="{movieid:224973}">
                                  <div class="movie-poster">
                                    <img class="poster-default" src="picture/loading_2.e3d934bf.png" />
                                    <img data-src="picture/__42975419__9836378.jpg@160w_220h_1e_1c" />
                                    <div class="movie-overlay movie-overlay-bg">
                                      <div class="movie-info">
                                        <div class="movie-score">
                                          <i class="integer">9.</i>
                                          <i class="fraction">1</i>
                                        </div>
                                        <div class="movie-title movie-title-padding" title="无间道">无间道</div>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                                <div class="movie-ver"></div>
                              </div>

              </dl>


            </div>
          </div>
        </div>
      </div>
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
  <script src="js/common.1faad3f9.js"></script>
  <script src="js/home-index.fb70025c.js"></script>
</body>

</html>