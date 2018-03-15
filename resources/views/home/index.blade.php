@include('home.public.head')

  <div class="banner">
    <div class="slider single-item slider-banner">
    @foreach($pic as $v)
      <a target="_blank" data-act="bannerNews-click" href="" data-bgUrl="{{ $v['lun_tu'] }}"></a>
    @endforeach
    </div>

  </div>

  <div class="container" id="app" class="page-home/index">
    <div class="content">
      <div class="aside">
        <div class="ranking-box-wrapper">
          <div class="panel">
            <div class="panel-header">
             <span class="panel-more">
                <a href="{{ url('home/list') }}" class="textcolor_orange" data-act="all-TOP100-click">
                  <span>查看完整榜单</span>
                </a>
                <span class="panel-arrow panel-arrow-orange"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_red">评分排行</span>
              </span>
            </div>
            <div class="panel-content">
              <ul class="ranking-wrapper ranking-box">
              @foreach($filmsnum as $k=>$v)
                <li class="ranking-item ranking-top ranking-index-1">
                  <a href="{{ url('home/films/') }}/{{ $v['pid'] }}" target="_blank" data-act="ticketList-movie-click" data-val="{movieid:1208122}">
                    <div class="ranking-top-left">
                    
                      <img class="ranking-img  " data-src="{{ $v['pic'] }}" />
                      @if($k == 0){<i class="ranking-top-icon"></i>}@endif
                    </div>
                    <div class="ranking-top-right">
                      <div class="ranking-top-right-main">
                        <span class="ranking-top-moive-name">{{ $v['filmname'] }}</span>
                        <p class="ranking-top-wish">
                          <span class="stonefont">{{ $v['number'] }}</span>  
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
               
              @endforeach  

              </ul>

            </div>
          </div>
        </div>


        

        <div class="top100-wrapper">
          <div class="panel">
            <div class="panel-header">
             
              <span class="panel-title">
                <span class="textcolor_orange">票房前五</span>
              </span>
            </div>
            <div class="panel-content">
              <ul class="ranking-wrapper ranking-top100">
              @foreach($box as $K=>$v)
                <li class="ranking-item ranking-top ranking-index-1">
                  <a href="{{ url('home/films/') }}/{{ $v['id'] }}" target="_blank" data-act="TOP100-movie-click" data-val="{movieid:1203}">
                    <div class="ranking-top-left">
                      
                      <img class="ranking-img  " data-src="{{ $v['pic'] }}" />
                     @if($k == 0){<i class="ranking-top-icon"></i>}@else{}@endif
                    </div>
                    <div class="ranking-top-right">
                      <div class="ranking-top-right-main">
                        <span class="ranking-top-moive-name">{{ $v['filmname'] }}</span>


                        <p class="ranking-top-wish">
                          <span class="stonefont">{{ $v['box_office'] }}</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              @endforeach
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
                <a href="{{ url('home/cate') }}" class="textcolor_red" data-act="all-playingMovie-click">
                  <span>全部</span>
                </a>
                <span class="panel-arrow panel-arrow-red"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_red">正在热映</span>
              </span>
            </div>
            <div class="panel-content">
              <dl class="movie-list">
              @foreach($films as $v)
                <dd>
                  <div class="movie-item">
                    <a href="{{ url('home/films/') }}/{{ $v['id'] }}" target="_blank" data-act="playingMovie-click" data-val="{movieid:1208122}">
                      <div class="movie-poster">
                        <img data-src="{{ $v['pic'] }}" />
                        <div class="movie-overlay movie-overlay-bg">
                          <div class="movie-info">
                            
                            <div class="movie-title movie-title-padding" title="{{ $v['filmname'] }}">{{ $v['filmname'] }}</div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <div class="movie-detail movie-detail-strong movie-sale">
                      <a href="{{url('goumai1')}}/{{$v['id']}}/0" class="active" target="_blank" data-act="salePlayingMovie-click" data-val="{movieid:1208122}">购 票</a>
                    </div>
                    <div class="movie-ver"></div>
                  </div>
              @endforeach
              </dl>

            </div>
          </div>


          <div class="panel">
            <div class="panel-header">
              <span class="panel-more">
                <a href="{{ url('home/cate') }}" class="textcolor_red" data-act="all-hotMovie-click">
                  <span>全部</span>
                </a>
                <span class="panel-arrow panel-arrow-red"></span>
              </span>
              <span class="panel-title">
                <span class="textcolor_red">热播电影</span>
              </span>
              
            </div>
            <div class="panel-content">
              <dl class="movie-list">
                

                  @foreach($filmshot as $v)
                    <dd>
                      <div class="movie-item">
                        <a href="{{ url('home/films/') }}/{{ $v['pid'] }}" target="_blank" data-act="hotMovie-click" data-val="{movieid:78672}">
                          <div class="movie-poster">
                            <img data-src="{{ $v['pic'] }}" />
                            <div class="movie-overlay movie-overlay-bg">
                              <div class="movie-info">
                                <div class="movie-score">
                                  <i class="integer">{{ $v['number'] }}</i>
                                </div>
                                <div class="movie-title movie-title-padding" title="{{ $v['filmname'] }}">{{ $v['filmname'] }}</div>
                              </div>
                            </div>
                          </div>
                        </a>
                        <div class="movie-ver"></div>
                      </div>

                  @endforeach   

              </dl>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@include('home.public.footer')