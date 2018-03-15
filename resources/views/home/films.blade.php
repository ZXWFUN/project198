@include('home.public.head')


  <div class="subnav">
    <ul class="navbar">
      <li>
        <a data-act="subnav-click" data-val="{subnavClick:1}" data-state-val="{subnavId:1}" class="active" href="javascript:void(0);">正在热映</a>
      </li>
    </ul>
  </div>




  <div class="container" id="app" class="page-movie/list">


    
    <div class="movies-channel">
      
      <div class="tags-panel">
      @foreach($cates as $k=>$v)
        <ul class="tags-lines">
          <li class="tags-line" data-val="{tagTypeName:'cat'}">
            <div class="tags-title">{{ $v['cname'] }}</div>
            <ul class="tags">
              <li class="active" data-state-val="{ catTagName:'全部'}">
                <a data-act="tag-click" data-val="{TagName:'全部'}" href="{{ url('home/cate') }}" style="cursor: default">全部</a>
              </li>
               @foreach($a as $m=>$n)
                              @if($k == $m)
                              @foreach($n as $j=>$h)
              <li id="ajax">
             <form action="{{ url('home/cate/films') }}/{{ $h['id'] }}" method="POST">
                {{ csrf_field() }}
                <a data-act="" data-val="" href=""><button class="btn-mini btn-info">{{ $h['cname'] }}</button></a>
              </form>
               </li>
                              @endforeach
                              @endif
             @endforeach
            </ul>
            </li>
       
              
        </ul>
        @endforeach
      </div>
    
      <div class="movies-panel">
        <div class="movies-sorter">
          <div class="cat-sorter">
            
          </div>
        </div>
        <div id="movies-list">


               <dl class="movie-list">
      




           @foreach($filmscate as $v)


            <dd>
              <div class="movie-item">
                <a href="{{ url('home/films/') }}/{{ $v['id'] }}" target="_blank" data-act="movie-click" data-val="{movieid:338493}">
                  <div class="movie-poster">
                    <img src="{{ $v['pic'] }}" />
                  </div>
                </a>
                </div>
            
              <div class="channel-detail movie-item-title" title="{{ $v['filmname'] }}">
                <a href="{{ url('home/films/') }}/{{ $v['id'] }}" target="_blank" data-act="movies-click">{{ $v['filmname'] }}</a>
              </div>
              <div class="channel-detail channel-detail-orange">
                <i class="integer">{{ $v['number'] }}</i>
              </div>


          @endforeach
             
          </dl>


         


        </div>
        
      </div>
    </div>








@include('home.public.footer')