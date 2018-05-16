<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>中国·济宁</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/logo.png')}}" type="image/x-icon" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- bootsnav -->
    <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">
    <!-- 自定义 -->
    @yield('css')
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
</head>

<body>

<!-- header  start -->
<nav class="navbar navbar-mobile bootsnav on">
    <div class="container">
        <div class="navbar-header logo">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars fa-lg"></i>
            </button>
            <a href=""><img src="{{asset('images/logo.png')}}" alt="JiNing"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="hei-100"><a href="{{url('/')}}">首页</a></li>
                <li class="hei-100"><a href="http://www.jnnews.tv/" target="_blank">新闻热点</a></li>
                <li class="dropdown hei-100">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">旅游景点</a>
                    <ul class="dropdown-menu animate">
                        <li><a href="{{url('lvyou')}}">三孔</a></li>
                        <li><a href="{{url('lvyou')}}">太白楼</a></li>
                        <li><a href="{{url('lvyou')}}">孟庙</a></li>
                    </ul>
                </li>
                <li class="hei-100"><a href="http://www.jining.gov.cn/" target="_blank">政府门户</a></li>
                <li class="hei-100"><a href="{{url('/index')}}#twelve">12县市区</a></li>
                <li class="hei-100">
                    <a href="{{url('about')}}">关于济宁</a>
                </li>
                <!-- <li><a href=""></a></li>
            <li><a href=""></a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                @if(session('id'))
                    <li class="hei-100"><a href="{{url('admin/index')}}">进入后台</a></li>
                    <li class="hei-100"><a href="{{url('logout')}}">登出</a></li>
                @else
                    <li class="hei-100"><a href="{{url('login')}}">登录</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="title">
                    本站声明
                </div>
                <div class="introduction">
                    <p>“中国·济宁”网站是济宁市各类信息的发布源，同时还组织了大量反映济宁经济、文化和社会风貌的新闻类、文献类、服务类等方面的信息。一些单位和部门需要转载本网站上的文字图片等资料时，必须直接与作者联系征得同意，请勿直接转载。</p> 　　　　　　　　 　　<p> 特此声明。</p>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="title">
                    关注我们
                </div>
                <ul class="list-group">
                    <li> <a href="">新浪微博</a> </li>
                    <li><a href="javascript();" id="weixin">微信公众号</a><img src="{{asset('images/weixin.jpg')}}" width="150" id="weixin-img"></li>
                    <li><a href="javascript();" id="qq">QQ</a><img src="{{asset('images/qq.jpg')}}" alt="" width="150" id="qq-img"></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="com-md-8 text-center copy">
                <p>copyright&copy;  SDUT 胡华聘</p>
            </div>
        </div>
    </div>
</footer>
<!-- <script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script> -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script type="text/javascript" src="{{asset('js/canvas-nest.js')}}" zIndex="-1"></script>
@yield('js')
</body>
@yield('extra')
</html>