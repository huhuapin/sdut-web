<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo.png" type="image/x-icon" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootsnav -->
    <!-- 自定义 -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
<div class="father">
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#login" data-toggle="tab" aria-expanded="true" id="a-login">Login</a></li>
        <li><a href="#register" data-toggle="tab" id="a-register">Sign</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="login">
            <form action="{{url('login')}}" method="post">
                {{csrf_field()}}
                <div class="form-group username">
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group password">
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="登录" class="form-control submit">
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="register">
            <form action="register" class="form-horizontal" method="post">
                @if(count($errors)>0)
                    <div class="alert-danger alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                <div class="form-group">
                    <label for="" class="label-control col-md-4">用户名</label>
                    <div class="col-md-8">
                        <input type="text" name="username" class="form-control" id="username">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="label-control col-md-4">密码</label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" id="password">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="label-control col-md-4">确认密码</label>
                    <div class="col-md-8">
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirmed">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="label-control col-md-4">邮箱</label>
                    <div class="col-md-8">
                        <input type="text" name="email" class="form-control" id="email">
                        <span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="label-control col-md-4">职业</label>
                    <div class="col-md-8">
                        <input type="text" name="job" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-md-4 label-control">学历</label>
                    <div class="col-md-8">
                        <select name="educate" id="educate" class="form-control">
                            <option selected="" value="" disabled>请选择...</option>
                            <option>初中及以下</option>
                            <option>高中或中专</option>
                            <option>大专</option>
                            <option>本科</option>
                            <option>硕士</option>
                            <option>博士</option>
                            <option>博士后</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="hobby" class="label-control col-md-4">爱好</label>
                    <div class="col-md-8">
                        <label for="" class="checkbox-inline">
                            <input type="checkbox" name="hobby" value="basketball">篮球</label>
                        <label for="" class="checkbox-inline">
                            <input type="checkbox" name="hobby" value="table_tennis">乒乓球</label>
                        <label for="" class="checkbox-inline">
                            <input type="checkbox" name="hobby" value="study" checked>学习</label>
                        <label for="" class="checkbox-inline">
                            <input type="checkbox" name="hobby" value="play" disabled>打游戏</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="think" class="label-control">对网站感受</label>
                    <textarea name="think" cols="30" rows="10" class="form-control" id="think"></textarea>
                </div>
                    {{csrf_field()}}
                <div class="form-group">
                    <input type="submit" value="注册" class="form-control submit">
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/three.min.js"></script>
<script src="js/three-waves.min.js"></script>
<script src="js/canvas-nest.js"></script>
<script src="js/login.js"></script>
</body>

</html>