<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
    public function login(){
        return view('home.login');
    }
    public function loginPost(){
        $username = \request('username');
//        dd($username);
        $password = \request('password');
        if($user = User::where('username',$username)->first()){
            if(decrypt($user->password)==$password){
                if($user->permit==1){
                    session(['id'=> $user->id]);
                    return redirect('admin/index');
                }else{
                    echo "<script>alert('您的账号还未通过审核！')</script>";
                    echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
                    return;
                }

            }else{
                echo "<script>alert('用户名或密码错误！')</script>";
                echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
                return;
            }
        }else{
            echo "<script>alert('用户名或密码错误！')</script>";
            echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
            return;
        }
    }
    public function logout(){
        if(session('id')){
            session()->forget('id');
        }
        return redirect('index');
    }
    public function register(Request $request){
    $this->validate($request,[
       'username'=>'required|between:6,16|unique:user,username',
       'password'=>'required|confirmed|between:6,16',
        'email'=>'required|email',
    ]);
    $user = new User();
    $user->username = $request->input('username');
    $user->password = encrypt($request->input('password'));
    $user->email = $request->input('email');
    $user->job = $request->input('job');
    $user->educate = $request->input('educate');
    $user->think = $request->input('think');
    $user->hobby = $request->input('hobby');
    if(count(User::all())==0){
        $user->permit = 1;
    }
    $user->save();
        echo "<script>alert('注册成功！')</script>";
        echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
    }

    public function index(){
        return view('home.index');
    }
    public function news(News $news){
        $news->read++;
        $news->save();
        $hots = News::orderBy('read','desc')->limit(5)->get();
        $randoms = News::inRandomOrder()->limit(5)->get();
        return view('home.news')->with(['news'=>$news,'hots'=>$hots,'randoms'=>$randoms]);
    }
    public function lvyou(){
        return view('home.lvyou');
    }
    public function about(){
        return view('home.about');
    }
    public function getImage($path,$name){
        return response()->download(storage_path('app/').$path."/".$name);
    }
}
