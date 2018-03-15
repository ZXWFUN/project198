@include('home.public.head')
    <link rel="stylesheet" href="/home/css/query-index.8f264800.css"/>


<div class="subnav">
  <ul class="navbar">
    <li>
      <a data-act="subnav-click" data-val="{subnavClick:0}"
          data-state-val="{subnavId:0}"
          class="active" href="javascript:void(0);"
      >影视剧</a>
    </li>
  </ul>
</div>


    <div class="container" id="app" class="page-query/index" >
<div class="search-result-box">
      <dl class="movie-list">
      @foreach($list as $v)
  <dd>
    <div class="movie-item">
      <a href="{{ url('home/films/') }}/{{ $v['pid'] }}" target="_blank" data-act="movie-click" data-val="{movieid:1148404}">
      <div class="movie-poster">
        <img data-src="{{ $v['pic'] }}" />
      </div>
      </a>
        
        
      <div class="movie-ver"></div>
    </div>
    <div class="channel-detail movie-item-title" title="{{ $v['filmname'] }}">
      <a href="{{ url('home/films/') }}/{{ $v['pid'] }}" target="_blank" data-act="movies-click" data-val="{movieId:1148404}">{{ $v['filmname'] }}</a>
    </div>
<div class="movie-item-subtitle"></div>
<div class="absolute-info">
     <div class="channel-detail channel-detail-orange"><i class="integer">{{ $v['number'] }}</i></div>

  <div class="movie-item-cat">{{ $v['keyword'] }}</div>
  <div class="movie-item-pub">{{ $v['show_time'] }}</div>
</div>
  @endforeach

  
</dl>
  <div class="pager">
    <ul class="list-pager">
     {!! $list->appends($request->all())->render() !!}
    </ul>  
  </div>
</div>

    </div>

@include('home.public.footer')