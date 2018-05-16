@extends('layout.home')
@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/news.css')}}">
    @endsection
@section('content')
    <div class="container-fulid news-bg">
        <div class="news-banner">
            <h2><a href="#">中国·济宁</a></h2>
        </div>
        <div class="news-nav">
            <ul>
                <li><a href="{{url('/')}}">首页</a></li>
                <li><a href="#">{{$news->get_category->name}}</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="news">
                    <div class="news-title text-center">
                        <h2>{{$news->title}}</h2>
                        <span>时间：{{$news->updated_at}}    浏览量：{{$news->read}}</span>
                    </div>
                    <div class="news-content">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4 asider">
                <div class="widget">
                    <h4>热门文章推荐</h4>
                    <ul class="widget-content">
                        @foreach($hots as $hot)
                            <li><a href="{{url('news')}}/{{$hot->id}}">{{str_limit($hot->title,30,'...')}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h4>随机文章推荐</h4>
                    <ul class="widget-content">
                        @foreach($randoms as $random)
                            <li><a href="{{url('news')}}/{{$random->id}}">{{str_limit($random->title,30,'...')}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection