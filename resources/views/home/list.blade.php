@include('home.public.head')
     <link rel="stylesheet" href="/home/css/board-index.92a06072.css" />
  
  <div class="subnav">
    <ul class="navbar">
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:7}" data-state-val="{subnavId:7}" class="active" href="javascript:void(0);">热映口碑榜</a>
      </li>
    </ul>
  </div>


  <div class="container" id="app" class="page-board/index">

    <div class="content">
      <div class="wrapper">
        <div class="main">
          <p class="update-time">2018-03-12
            <span class="has-fresh-text">已更新</span>
          </p>
          <p class="board-content">榜单规则：将近日热映的影片，按照评分从高到低排列取前10名。</p>
          <dl class="board-wrapper">
          @foreach($films as $k=>$v)
            <dd>
              <i class="board-index board-index-{{ $k+1 }}">{{ $k+1 }}</i>
              <a href="{{ url('home/films/') }}/{{ $v['pid'] }}" title="{{ $v['filmname'] }}" class="image-link" data-act="boarditem-click" data-val="{movieId:1208122}">
                <img data-src="{{ $v['pic'] }}" alt="{{ $v['filmname'] }}" class="board-img" />
              </a>
              <div class="board-item-main">
                <div class="board-item-content">
                  <div class="movie-item-info">
                    <p class="name">
                      <a href="/films/1208122" title="{{ $v['filmname'] }}" data-act="boarditem-click" data-val="{movieId:1208122}">{{ $v['filmname'] }}</a>
                    </p>
                    <p class="star">
                      {{ $v['people'] }}
                    </p>
                    <p class="releasetime">{{ $v['show_time'] }}</p>
                  </div>
                  <div class="movie-item-number score-num">
                    <p class="score">
                      <i class="integer">{{ $v['number'] }}</i>
                    </p>
                  </div>

                </div>
              </div>

            </dd>
           @endforeach
       
          </dl>

        </div>
      </div>
    </div>

  </div>
@include('home.public.footer')
