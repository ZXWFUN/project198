<!DOCTYPE html>

<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>
  <title>靓影电影</title>

  <link rel="dns-prefetch" href="//p0.meituan.net" />
  <link rel="dns-prefetch" href="//p1.meituan.net" />
  <link rel="dns-prefetch" href="//ms0.meituan.net" />
  <link rel="dns-prefetch" href="//ms1.meituan.net" />
  <link rel="dns-prefetch" href="//analytics.meituan.com" />
  <link rel="dns-prefetch" href="//report.meituan.com" />
  <link rel="dns-prefetch" href="//frep.meituan.com" />

      <meta name="csrf-token" content="{{ csrf_token() }}">

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
  <link rel="stylesheet" href="/home/css/common.4b838ec3.css" />
  <link rel="stylesheet" href="/home/css/home-index.705294ae.css" />
  <link rel="stylesheet" href="{{ asset('home/css/movie-detail.40d4116c.css') }}"/>
    <link rel="stylesheet" href="/home/css/movie-list.ffb4de4a.css" />
    <link rel="stylesheet" href="{{ asset('home/css/cinemas-list.81574a4d.css') }}" />
    <link rel="stylesheet" href="{{ asset('home/css/news-hotnews.a01df872.css') }}" />
   
  <script src="{{ asset('home/js/stat.583e6097.js') }}"></script>
  <script src="{{ asset('home/js/jquery-1.8.3.js') }}"></script>
  <script src="{{ asset('home/js/common.dc33ab40.js') }}"></script>
  <link rel="stylesheet" href="/home/bootstrap/css/bootstrap.min.css" />
 <script src="{{ asset('home/js/news-hotnews.858de7f4.js') }}"></script>
<script src="{{ asset('home/js/common.1faad3f9.js') }}"></script>
<link rel="stylesheet" href="{{ asset('home/css/cinemas-seat.d66e64ba.css') }}"/>

     <link rel="stylesheet" href="{{ asset('home/css/news-detail.8be10f92.css') }}" />
  <script src="{{ asset('home/lib/layui/layui.js') }}" charset="utf-8"></script>
  <script>
    if (window.devicePixelRatio >= 2) {
      document.write('<link rel="stylesheet" href="/home/css/image-2x.8ba7074d.css"/>')
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
      <a href="#" class="logo" data-act="icon-click"></a>
      <div class="city-container" data-val="{currentcityid:1 }">
      
        <div class="city-list" data-val="{ localcityid: 1 }">
       

        </div>
      </div>


      <div class="nav">
        <ul class="navbar" id="navbar">
          <li id="li">
            <a href="{{ url('home/index') }}" data-act="home-click" >首页</a>
          </li>
          <li id="li">
            <a href="{{ url('home/cate') }}" data-act="movies-click" >电影</a>
          </li>
          <li id="li">
            <a href="{{url('yy')}}" data-act="cinemas-click">影院</a> 
          </li>

          <li id="li">
            <a href="{{ url('home/list') }}" data-act="board-click">榜单</a>
          </li>
          <li id="li">
            <a href="{{url('news')}}" data-act="hotNews-click">热点</a>
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

      <form action="{{ url('home/search') }}" method="GET" target="_blank" class="search-form" data-actform="search-click">
        <input name="name" class="search"  type="search" maxlength="32" placeholder="搜索电影" autocomplete="off">
        <input class="submit" type="submit" value="">
      </form>

      
    </div>
  </div>
  <div class="header-placeholder"></div>
