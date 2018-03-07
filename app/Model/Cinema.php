<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    //
    public $table = 'cinema';
    public $primaryKey = 'id';
    public $guarded = [];
//    public $fillable = ['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;

    //跟Film的关联模型
    public function films()
    {
        return $this->belongsToMany('App\Model\Film','cinema_films','cid','pid');
    }
}
