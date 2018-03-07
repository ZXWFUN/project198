<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.0</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  
      <link rel="stylesheet" href="{{ asset('admin/css/font.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/css/xadmin.css') }}">
      <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
      <script src="{{ asset('admin/lib/layui/layui.js') }}" charset="utf-8"></script>
      <script type="text/javascript" src="{{ asset('admin/js/xadmin.js') }}"></script>
      <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
      <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  
  <body>
    <div class="x-body">
    
        <form class="layui-form" action="http://www.lamp198.com/admin/cate/{{ $data['id'] }}" method="POST">
             {{ csrf_field() }}
               {{ method_field('PUT') }}
          <div class="layui-form-item">
              <select name="pid" class="small">
                            
                           @foreach($cates as $k=>$v)
                <option value="{{$v['id']}}" @if($data['pid'] == $v['id']) selected @endif>{{$v['cname']}}</option>
                @endforeach   
                        </select>
          </div>

          <div class="layui-form-item">
              <label for="cname" class="layui-form-label">
                  <span class="x-red"></span>分类名
              </label>
              <div class="layui-input-inline">
                  <input type="text" value="" id="{{ $data['id'] }}" name="cname" required="" lay-verify="cname"
                  autocomplete="off" class="layui-input">
              </div>
          </div>
          <div class="layui-form-item">
              <label for="phone" class="layui-form-label">
                  <span class="x-red"></span>
              </label>
              <div class="layui-input-inline">
                  <input type="submit" class="layui-btn" lay-filter="edit" lay-submit="" value="修改">
              </div>
          </div>
       
      
    </div>
    <script>
      layui.use(['form','layer'], function(){
          $ = layui.jquery;
        var form = layui.form
        ,layer = layui.layer;
      
        

        
  </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>