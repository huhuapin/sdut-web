
@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                       用户管理
                    </h3>
                </div>
                <div class="card-body">
                    <table class="datatable table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>编号</th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>职业</th>
                            <th>教育程度</th>
                            <th>爱好</th>
                            <th>对网站的看法</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->job}}</td>
                                <td>{{$user->educate}}</td>
                                <td>{{$user->hobby}}
                                </td>
                                <td>{{$user->think}}</td>
                                <td>
                                    @if($user->permit==1)
                                        已通过
                                        @else
                                        未通过
                                        @endif
                                </td>
                                <td>
                                    <a href="{{url('passpermit')}}/{{$user->id}}">
                                        <input type="button" value="通过验证" class="btn btn-xs btn-success" onclick="return confirm('您确定要通过验证吗？')">
                                    </a>
                                    @php
                                    $id = session('id');
                                    @endphp
                                    <a href="{{url("user/{$user->id}")}}/{{$id}}/delete">
                                        <input type="button" value="删除用户" class="btn btn-xs btn-danger" onclick="return confirm('您确定要删除用户吗？')">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection