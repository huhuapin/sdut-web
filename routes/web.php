<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/index','HomeController@index');
Route::get('/news/{news}','HomeController@news');
Route::get('/lvyou','HomeController@lvyou');
Route::get('about','HomeController@about');
Route::get('login','HomeController@login');
Route::post('login',"HomeController@loginpost");
Route::get('logout','HomeController@logout');
Route::post('register','HomeController@register');
Route::get('/getImage/{path}/{name}',['as'=>'getImage','uses'=>'HomeController@getImage']);

Route::middleware(['web','AdminLoginCheck'])->group(function (){
    Route::get('admin/index',function (){
        return view('layout.admin');
    });
    Route::get('userList','AdminController@userList');
    Route::get('passpermit/{user}','AdminController@passpermit');
    Route::get('user/{buser}/{cuser}/delete','AdminController@userDelete');

    Route::get('newsList','AdminController@newsList');
    Route::get('news','AdminController@newsCreate');
    Route::post('news','AdminController@newsStore');
    Route::get('news/{news}/edit','AdminController@newsEdit');
    Route::post('news/{news}/edit','AdminController@newsUpdate');
    Route::get('news/{news}/delete','AdminController@newsDelete');
});
