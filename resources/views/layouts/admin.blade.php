<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    {{--样式文件--}}
    @include('admin.public.styles')
    {{--样式文件--}}
    {{--脚本文件--}}
    @include('admin.public.script')
    {{--脚本文件--}}


</head>
<body>
{{--头部开始--}}
@include('admin.public.header')
{{--头部结束--}}
<!-- 中部开始 -->
<!-- 左侧菜单开始 -->
@include('admin.public.side')
<!-- 左侧菜单结束 -->
<!-- 右侧主体开始 -->
@section('content')
    @show
<!-- 右侧主体结束 -->
<!-- 中部结束 -->
<!-- 底部开始 -->
@include('admin.public.footer')
<!-- 底部结束 -->
@yield('script')
</body>
</html>