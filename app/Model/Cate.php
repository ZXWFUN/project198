<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    public $table = 'cates';
    public $primaryKey = 'id';
    public $guarded = [];
//    public $fillable = ['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;

    //跟Film的关联模型
    public function film()
    {
        return $this->belongsToMany('App\Model\Film','cates_films','cid','pid');
    }
}
