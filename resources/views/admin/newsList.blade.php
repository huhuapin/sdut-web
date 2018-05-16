
@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        新闻管理
                    </h3>
                </div>
                <div class="card-body">
                    <table class="datatable table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>题目</th>
                            <th>类别</th>
                            <th>内容</th>
                            <th>修改日期</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                    <td>{{$new->id}}</td>
                                <td>{{$new->title}}</td>
                                <td>{{$new->get_category->name}}</td>
                                <td>{{str_limit(strip_tags($new->content),30,'...')}}</td>
                                <td>{{$new->updated_at}}</td>
                                <td>
                                    <a href="{{url('news')}}/{{$new->id}}/edit">
                                        <input type="button" value="编辑" class="btn btn-xs btn-success">
                                    </a>
                                    <a href="{{url("news/{$new->id}")}}/delete">
                                        <input type="button" value="删除" class="btn btn-xs btn-danger" onclick="return confirm('您确定要删除该文章吗？')">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{url('news')}}">
                        <input type="button" class="btn btn-primary" value="新建文章">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection