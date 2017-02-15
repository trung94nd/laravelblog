<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
