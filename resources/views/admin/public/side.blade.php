<div class="left-nav">
    <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe612;</i>
                    <cite  style="font-size: 16px">用户管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/user') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户列表</cite>

                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/user/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>用户添加</cite>

                        </a>
                    </li>


                </ul>
        </ul>
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon"  style="font-size: 20px">&#xe662;</i>
                    <cite   style="font-size: 16px">角色管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/role') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>角色列表</cite>
                        </a>
                    </li >
                </ul>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/role/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加角色</cite>
                        </a>
                    </li >
                </ul>
        </ul>
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon"  style="font-size: 22px">&#xe631;</i>
                    <cite   style="font-size: 16px">权限管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/permission') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite >权限列表</cite>

                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/permission/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加权限</cite>

                        </a>
                    </li>


                </ul>
            </li>
        </ul>


        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe614;</i>
                    <cite   style="font-size: 16px">网站配置管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/config/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加网站配置</cite>
                        </a>
                    </li >
                </ul>
        </ul>

        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe630;</i>
                    <cite style="font-size: 16px">分类管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/cate') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>分类列表</cite>

                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('admin/cate/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加分类</cite>

                        </a>
                    </li>



                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe6ed;</i>
                    <cite style="font-size: 16px">影片管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/film') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>影片列表</cite>

                        </a>
                    </li>
                    <li>
                        <a _href="{{ url('admin/film/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加影片</cite>

                        </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe6ed;</i>
                    <cite style="font-size: 16px">影院管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('admin/cinema') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>影院列表</cite>

                        </a>
                    </li>
                    <li>
                        <a _href="{{ url('admin/cinema/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>添加影院</cite>

                        </a>
                    </li>

                </ul>
            </li>

        </ul>
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="layui-icon" style="font-size: 20px">&#xe62a;</i>
                    <cite style="font-size: 16px">文章管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="{{ url('article') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章列表</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="{{ url('/article/create') }}">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>文章添加</cite>
                        </a>
                    </li>
                </ul>
            </li>
        <li>
            <a href="javascript:;">
                <i class="layui-icon" style="font-size: 20px">&#xe634;</i>
                <cite style="font-size: 16px">轮播图管理</cite>
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a _href="{{ url('lunbo') }}">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>轮播图列表</cite>
                    </a>
                </li >
                <li>
                    <a _href="{{ url('/lunbo/create') }}">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>添加轮播图</cite>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                <i class="layui-icon" style="font-size: 20px">&#xe698;</i>
                <cite style="font-size: 16px">订单管理</cite>
                <i class="iconfont nav_right">&#xe697;</i>
            </a>
            <ul class="sub-menu">
                <li>
                    <a _href="{{ url('dingdan') }}">
                        <i class="iconfont">&#xe6a7;</i>
                        <cite>订单列表</cite>
                    </a>
                </li >
            </ul>

        </li>
        </ul>
    </div>
</div>
<!-- <div class="x-slide_left"></div> -->
