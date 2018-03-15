<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="UTF-8">
    <title>添加文章页面</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <div>
        {{--判断是否添加错误的提示信息--}}
        @if(!empty(session('msg')))
        <p>{{ session('msg') }}</p>
        @endif
    </div>
    <div class="x-body">
        <form id="art_form" class="layui-form" enctype="multipart/form-data">
          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>分类
              </label>
              <div class="layui-inline">
                  {{ csrf_field() }}

                  <select name="news_id">
                      <!--{{--<option value="0">请选择分类</option>--}}-->
                      <@foreach($news as $v)
                      <option value="{{ $v['news_id' ]}}">{{ $v['news_name' ]}}</option>
                      @endforeach
                  </select>
              </div>

          </div>

            <div class="layui-form-item">
                <label for="L_art_title" class="layui-form-label">
                    <span class="x-red">*</span>新闻标题
                </label>
                <div class="layui-input-block">
                    <input type="text" id="L_art_title" name="art_title" required=""
                           autocomplete="off" class="layui-input">

                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_art_editor" class="layui-form-label">
                    <span class="x-red">*</span>新闻作者
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_art_editor" name="art_editor" required=""
                           autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="L_art_editor" class="layui-form-label">
                    <span class="x-red">*</span>缩略图
                </label>
                <div class="layui-input-inline">
                    <input type="file" id="file_upload" name="file_upload" value="">
                </div>
  <script type="text/javascript">
    $(function () {
        $("#file_upload").change(function () {
            uploadImage();
        })
    })
    function uploadImage() {
//  判断是否有选择上传文件
        var imgPath = $("#file_upload").val();
        if (imgPath == "") {
            alert("请选择上传图片！");
            return;
        }
        //判断上传文件的后缀名
        var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
        if (strExtension != 'jpg' && strExtension != 'gif'
            && strExtension != 'png' && strExtension != 'bmp') {
            alert("请选择图片文件");
            return;
        }
       var formData = new FormData($('#art_form')[0]);
        //var formData = new FormData();
        //formData.append("file_upload", $('#file_upload')[0].files[0]);
    //formData.append("_token", '{{csrf_token()}}');

        $.ajax({
            type: "POST",
            url: "/article/upload",
            headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            data: formData,
            contentType: false,
            processData: false,
            async:true,
            cache:false,
            success: function(data) {
                $('#thumb').attr('src',data);
                $('#art_thumb').val(data);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("上传失败，请检查网络后重试");
            }
        });
       
    }
</script>
           <div class="layui-form-item">
                <label for="L_art_editor" class="layui-form-label">
                    <span class="x-red">*</span>
                </label>
                <div class="layui-input-inline">
                <input type="hidden" name="art_thumb" id="art_thumb" value="">
                <!--上传成功后显示上传图片-->
                    <img src="" id="thumb"alt="" style="width:100px;">
                </div>
            </div>
         
            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>内容
                </label>
                <div class="layui-input-block">
                    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
                    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
                    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                    <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

                     <script name="art_content" id="editor" type="text/plain" style="width:900px;height:400px;"></script>

                     <script type="text/javascript">

                        //实例化编辑器
                        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                        var ue = UE.getEditor('editor');
                    </script>
                </div>

            </div>

          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({

          });

          //监听提交
          form.on('submit(add)', function(data){
             $.ajax({
                  type : "POST", //提交方式
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url : '/article',//路径
                  data : data.field,//数据，这里使用的是Json格式进行传输
                  dataType : "Json",
                  success : function(result) {//返回数据根据结果进行相应的处理
                     console.log(result);
                     // 如果ajax的返回数据对象的status属性值是0，表示用户添加成功；弹添加成功的提示信息
                     if(result.status == 0){
                         layer.alert(result.msg, {icon: 6},function () {
                             // // 获得frame索引
                             //var index = parent.layer.getFrameIndex(window.name);
                             // //关闭当前frame
                             //parent.layer.close(index);

                             //刷新父页面
                            parent.location.reload();
                         });
                     }else{
                         layer.alert(result.msg, {icon: 6},function () {
                             // 获得frame索引
                             // var index = parent.layer.getFrameIndex(window.name);
                             // //关闭当前frame
                             // parent.layer.close(index);

                             parent.location.reload();
                         });
                     }
                  }
              });
              console.log(data);
            //发异步，把数据提交给php
            return false;
          });          
        });
    </script>
    <script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
      })();</script>
  </body>

</html>