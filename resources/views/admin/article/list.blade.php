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
      <div class="layui-row">
          <form class="layui-form layui-col-md12 x-so" method="get" action="{{ url('article') }}">
          
          <input type="text" name="gjz" value="{{$request->gjz}}"  placeholder="请输入要搜索的标题" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
      </div>
     
      <table class="layui-table">
        <thead>
          <tr>
            <th>名称 </th>
            <th>资讯类别</th>
            <th>缩略图</th>
            <th>内容</th>
            <th>发布时间</th>
            <th>发布人</th>
            <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
          <tr>
            <td>{{ $v->art_title }}</td>
            <td>{{ $v->news_id }}</td>
            <td><img src="{{ $v->art_thumb }}"></td> 
            <td>{!! $v->art_content !!}</td>
            <td>{{ $v->art_time }}</td>
            <td>{{ $v->art_editor }}</td>
            <td class="td-manage">

              <a title="编辑"  onclick="x_admin_show('编辑','{{url('article/'.$v->art_id.'/edit')}}',990,450)" href="javascript:;">
                <i class="layui-icon">&#xe642;</i>
              </a>

              <a title="删除" onclick="member_del(this,'{{ $v->art_id }}')" href="javascript:;">
                <i class="layui-icon">&#xe640;</i>
              </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>


    </div>
   
     <div class="page">

        {!! $data->appends($request->all())->render() !!}
      </div>
    <script>
      layui.use(['form','laydate','layer'], function(){
        var laydate = layui.laydate;
        var form = layui.form;
        var layer = layui.layer;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });

          //监听提交
          form.on('submit(sreach)', function(data){
              // console.log(11111);
              // return false;
          });


      });

      //修改排序
      /*
      * @param obj 当前的文本框元素
      * @param id  当前分类记录的ID
      * */
     
     
      /*用户-删除*/
      function member_del(obj,id){
          layer.confirm('确认要删除吗？',function(data){
              //发异步删除数据
              // $.post('URL地址'.'携带的参数',成功后的闭包函数)
              $.post('{{ url('article') }}/'+id,{"_token":"{{csrf_token()}}","_method":"delete","id":id},function(data){
                  if(data.status == 0){
                      $(obj).parents("tr").remove();
                      layer.msg('已删除!',{icon:1,time:1000});
                      location.reload(true);
                  }else{
                      layer.msg('删除失败!',{icon:1,time:1000});
                      location.reload(true);
                  }
              });

          });
      }



    
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>