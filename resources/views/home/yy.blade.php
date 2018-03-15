@include('home.public.head')


    <div class="container" id="app" class="page-cinemas/list" >
  <div class="tags-panel">
    <ul class="tags-lines">
    
      

      
        <li class="tags-line" data-type="brand">
          <div class="tags-title">品牌:</div>
          <ul class="tags">
          
            <li class="active">
              <a data-act="tag-click" data-val="{TagName:'全部', city_id:236}" data-id="-1" href="" data-bid="b_x9tdpsnb">全部</a>
            </li>
            @foreach($cinema as $v)
             @if($v['pid'] == 1)
             <li class="">
              <a  data-val="" href="" >{{$v['name']}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </li>
        <li class="tags-line tags-line-border" data-type="district">
          <div class="tags-title">区域:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="" data-id="-1" href="" data-bid="b_arz3865r">全部</a>
            </li>
             @foreach($cinema as $v)
             @if($v['pid'] == 6)
            <li class="">
              <a  data-val=""  href="">{{$v['name']}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </li>
         <li class="tags-line tags-line-border" data-type="district">
          <div class="tags-title">店名:</div>
          <ul class="tags">
            <li class="active">
              <a data-act="tag-click" data-val="" data-id="-1" href="" data-bid="b_arz3865r">全部</a>
            </li>
             @foreach($cinema as $v)
             @if($v['pid'] > 16)
            <li class="">
              <a  data-val=""  href="">{{$v['name']}}</a>
            </li>
            @endif
            @endforeach
          </ul>
        </li>
    </ul>
  </div>

  </div>


    
  
  
@include('home.public.footer')
