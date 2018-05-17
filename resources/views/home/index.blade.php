@extends('layout.home')
@section('css')
    <link rel="stylesheet" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        footer {
            margin-top: 0;
        }
    </style>
@endsection
@section('content')
    <!-- slider start -->
    <div class="container-fulid" style="max-height: 830px; overflow: hidden;">
        <ul class="bxslider">
            <li><img src="{{asset('images/banner1.jpg')}}" /></li>
            <li><img src="{{asset('images/banner2.jpg')}}" /></li>
            <li><img src="{{asset('images/banner3.jpg')}}" /></li>
        </ul>
    </div>
    <!-- slider end -->
    <!-- news  start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                        $first = App\News::where('category',1)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                        $news = App\News::where('category',1)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                        <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                        <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>
                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">时事热点</a>
                        </strong>
                        <small>Recent Hot News</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                            <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                            $first = App\News::where('category',2)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                            $news = App\News::where('category',2)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                            <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                            <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>

                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">自然地理</a>
                        </strong>
                        <small>Physical Geography</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                            $first = App\News::where('category',3)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                            $news = App\News::where('category',3)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                            <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                            <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>

                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">美食特产</a>
                        </strong>
                        <small>Delicious Food</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                            $first = App\News::where('category',4)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                            $news = App\News::where('category',4)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                            <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                            <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>

                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">风流人物</a>
                        </strong>
                        <small>Great Man</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                            $first = App\News::where('category',5)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                            $news = App\News::where('category',5)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                            <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                            <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>

                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">风土人情</a>
                        </strong>
                        <small>Local Customs</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="new-item">
                    <div class="new-pic">
                        @php
                            $first = App\News::where('category',6)->whereNotNull('img')->orderBy('updated_at','desc')->first();
                            $news = App\News::where('category',6)->orderBy('updated_at','desc')->limit(5)->get();
                        @endphp
                        @if($first)
                            <a href="{{url("news/{$first->id}")}}"><img src="{{url('getImage')}}/{{$first->img}}" alt=""></a>
                            <a href="{{url("news/{$first->id}")}}" class="new-title">{{str_limit($first->title,'34','...')}}</a>

                        @endif
                    </div>
                    <div class="new-category">
                        <strong>
                            <a href="">学校教育</a>
                        </strong>
                        <small>School Education</small>
                    </div>
                    <div class="new-list">
                        <ul>
                            @foreach($news as $new)
                                <li><a href="{{url("news/{$new->id}")}}">{{str_limit($new->title,36,'...')}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- news  end -->
    <!-- 12县市区 start-->
    <div class="twelve" id="twelve">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>12县市区</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.rencheng.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/shizhongqu.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>市中区</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.rencheng.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/rencheng.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>任城区</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.qufu.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/qufu-logo.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>曲阜市</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.yanzhou.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/yanzhou-logo.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>兖州区</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.jiaxiang.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/jiaxiang.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>嘉祥县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.weishan.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/weishan.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>微山县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.sishui.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/sishui.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>泗水县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://zhengfu2455.e-fa.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/liangshan.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>梁山县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.wenshang.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/wenshang.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>汶上县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.zoucheng.gov.cn/index.html" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/zhoucheng.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>邹城市</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.jinxiang.gov.cn/" target="_blank"> <div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/jinxiang.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>金乡县</strong>
                            </div>
                        </div></a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <a href="http://www.yutai.gov.cn/" target="_blank"><div class="item">
                            <div class="item-pic">
                                <img src="{{asset('images/yutai.jpg')}}" alt="" width="100%">
                            </div>
                            <div class="item-title">
                                <strong>鱼台县</strong>
                            </div>
                        </div></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 12县市区 end-->
    <div class="friend">
        <div class="container">
            <div class="row">
                <div class="friend-title">
                    友情链接
                </div>
                <div class="friend-content">
                    <p><a href="http://www.jining.gov.cn/" target="_blank">济宁市人民政府</a><a href="http://www.zgzdjyw.cn" target="_blank">济宁干部政德教育网</a><a href="http://www.jnhn.gov.cn/" target="_blank">济宁高新区</a><a href="http://www.jnetdz.gov.cn/" target="_blank">济宁经济技术开发区</a><a href="http://www.wenshang.gov.cn/" target="_blank">汶上政府网</a><a href="http://www.12371.cn/" target="_blank" rel="nofollow">共产党员网</a><a href="http://www.jnzfcg.gov.cn/" target="_blank">政府采购网</a><a href="http://www.qufutv.cn/" target="_blank">曲阜广电网</a><a href="http://www.net.china.com.cn/txt/2015-01/20/content_7622927.htm" target="_blank" rel="＇nofollow＇">举报“网络敲诈和有偿删帖”</a><a href="http://jubao.12377.cn:13225/reportform.do" target="_blank">暴恐音视频举报</a></p>
                    <p><a href="http://www.people.com.cn/" target="_blank" rel="nofollow">人民网</a><a href="http://www.xinhuanet.com/" target="_blank" rel="nofollow">新华网</a><a href="http://www.cctv.com/" target="_blank" rel="nofollow">央视网</a><a href="http://www.ifeng.com/" target="_blank" rel="nofollow">凤凰网</a><a href="http://www.cnr.cn/" target="_blank" rel="nofollow">中国广播网</a><a href="http://www.sdchina.com" target="_blank">中国山东网</a><a href="http://www.168hs.com/" target="_blank">黄山市民网</a><a href="http://www.lcbtv.com" target="_blank">聊城视窗网</a><a href="http://www.ilinyi.net/" target="_blank">爱临沂网</a><a href="http://www.dztv.tv" target="_blank">德州传媒网</a></p>
                    <p><a href="http://www.jngdgl.com/" target="_blank">济宁广电国旅</a><a href="http://www.qfwhjssfq.gov.cn/" target="_blank">曲阜文化建设示范区</a><a href="http://www.jnxxcd.com/" target="_blank">济宁休闲垂钓网</a><a href="http://www.sdfxj.org" target="_blank" rel="＇nofollow＇">山东反邪教</a><a href="http://www.zishashuhua.com/" target="_blank">紫砂书画网</a><a href="http://www.qlrf.org" target="_blank">齐鲁儒风</a><a href="http://www.jiningke.com/" target="_blank">济宁客</a><a href="http://www.clcmw.com/" target="_blank">昌乐传媒网</a></p>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('js')
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/jquery.bxslider.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
@endsection
@section('extra')
    <script>
        $(function() {
            $('.bxslider').bxSlider({
                auto: true,
                autoHover: true,
                video: true,
            });
        });
    </script>
    <embed  src="{{asset('media/jiningzhige.mp3')}}" width="0" height="0">
@endsection