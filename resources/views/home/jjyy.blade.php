@include('home.public.head')
 <link rel="stylesheet" href="{{ asset('home/css/cinemas-cinema.c339c8d8.css') }}"/>
    <div class="banner cinema-banner">
  <div class="wrapper clearfix">
    <div class="cinema-left">
      <div class="avatar-shadow">
        <img class="avatar" src="/upload/yy.png">
       
      </div>
    </div>

    <div class="cinema-main clearfix">
      <div class="cinema-brief-container">
      @foreach($addrs as $v)
        <h3 class="name text-ellipsis">{{$v['name']}}</h3>
      @endforeach
        <div class="telphone">电话：80082088</div>
        
        <div class="features-group">
          <div class="group-title">影院服务</div>

          <div class="feature">
            <span class="tag ">3D眼镜</span>
            <p class="desc text-ellipsis" title="需押金, 10.0元每副">需押金, 10.0元每副</p>
          </div>
          <div class="feature">
            <span class="tag ">儿童优惠</span>
            <p class="desc text-ellipsis" title="1.2米以下儿童免票观影，无眼镜无座位，一名成人限带一名免票儿童">1.2米以下儿童免票观影，无眼镜无座位，一名成人限带一名免票儿童</p>
          </div>
          <div class="feature">
            <span class="tag park-tag">可停车</span>
            <p class="desc text-ellipsis" title="影城门口大量免费停车场">影城门口大量免费停车场</p>
          </div>
        </div>
      </div>
    </div>

    <div class="cinema-map" data-lat="34.72665" data-lng="112.75106">
      <span class="show-map"></span>
    </div>
  </div>
</div>


    <div class="container" id="app" class="page-cinemas/cinema" >
      

      <div class="show-list active" data-index="0">
        <div class="movie-info">
  <div>
  @foreach($film as $v)
    <h3 class="movie-name">{{$v['filmname']}}</h3>
@endforeach
@foreach($film as $v)
        <span class="score sc">{{$v['number']}}</span>

  </div>

  <div class="movie-desc">
    <div>
      <span class="key">时长 :</span>
      <span class="value">{{$v['time']}}</span>
    </div>
    <div>
      <span class="key">类型 :</span>
      <span class="value"> {{$v['keyword']}} </span>
    </div>
    <div>
      <span class="key">主演 :</span>
      <span class="value"> {{$v['people']}}</span>
    </div>
  </div>
</div>
@endforeach
<div class="show-date">

  <span>观影时间 :</span>
    <span 
      class="date-item active"
      data-index="0"
    >今天 3-14</span>
</div>

  <div class="plist-container active">
      
<table class="plist">
  <thead>
    <tr>
      <th>放映时间</th>
      <th>语言版本</th>
      <th>放映厅</th>
      <th>售价（元）</th>
      <th>选座购票</th>
    </tr>
  </thead>
@foreach($cinema as $v)
  <tbody>
    <tr class="">
      <td>
        <span class="begin-time">{{$v['fytime']}}</span>
        <br />
        <span class="end-time">{{$v['sctime']}}散场</span>
      </td>
      <td>
        <span class="lang">{{$v['bb']}}</span>
      </td>
      <td>
        <span class="hall">{{$v['fyting']}}</span>
      </td>
      <td>
        <span class="sell-price"><span class="stonefont">{{$v['money']}}</span></span>
      </td>
      <td>
        <form action="/seat" method="post">
            {{csrf_field()}}
            <input type="hidden" name="yid[]" value="{{$v['qid']}}">
            <input type="hidden" name="yid[]" value="{{$v['cid']}}">
            <button class="buy-btn normal">选座购票</button>
        </form>
        <!--<a href="{{url('seat')}}" 
          class="buy-btn normal"
          data-tip=""
          data-act="show-click"
          data-bid="b_gvh3l8gg"
          data-val="{movie_id: 341138, cinema_id:9389}"
        >选座购票</a>-->
      </td>
    </tr>
  @endforeach
    
  </tbody>
</table>

  </div>


      </div>


  <div class="big-map-modal" style="display: none">
    <div class="close-map"></div>
    <div class="big-map"></div>
  </div>
    </div>
@include('home.public.footer')
