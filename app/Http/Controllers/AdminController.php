<?php

namespace App\Http\Controllers;
use App\News;
use App\News_Category;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userList(){
        $users = User::all();
        return view('admin/userList')->with(['users'=>$users]);
    }
    public function passpermit(User $user){
        $user->permit = 1;
        $user->save();
        return back();
    }
    public function userDelete(User $buser,User $cuser){
        if($buser->id==1||$buser == $cuser){
            echo "<script>alert('您不能删除该用户')</script>";
            echo "<script>var t = setTimeout(function(){parent.history.back()},2);</script>";
            return;
        }else{
            $buser->delete();
            return back();
        }
    }
    public function newsList(){
        $news = News::orderBy('updated_at','desc')->get();
        return view('admin.newsList')->with(['news'=>$news]);
    }
    public function newsCreate(){
        return view('admin.newsCreate');
    }
    public function newsStore(News $news,Request $request){
        $this->validate($request,[
           'title'=>'required'
        ]);
        $new = new News();
        $new->title = $request->input('title');
        $new->content = $request->input('editorValue');
        $new->category = $request->input('category');
        $img = $request->file('img');
        if($img){
            $new->img = $img->store('images');
        }
        $new->save();
        return redirect('newsList');
    }
    public function newsEdit(News $news){
        $categorys = News_Category::all();
        return view('admin.newsEdit')->with(['news'=>$news,'categorys'=>$categorys]);
    }
    public function newsUpdate(News $news,Request $request){
        $this->validate($request,[
            'title'=>'required'
        ]);
        $news->title = $request->input('title');
        $news->content = $request->input('editorValue');
        $news->category = $request->input('category');
        $img = $request->file('img');
        if($img) {
            $news->img = $img->store('images');
        }
        $news->save();
        return redirect('newsList');
    }
    public function newsDelete(News $news){
        $news->delete();
        return redirect('newsList');
    }
}
