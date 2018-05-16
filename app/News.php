<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table  = 'news';
    public function get_category(){
        return $this->belongsTo('App\News_Category','category','id');
    }
}
