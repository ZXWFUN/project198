<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $table = 'films';
    public $primaryKey = 'id';
    public $guarded = [];
//    public $fillable = ['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;

    // 定义关系
    public function filminfo()
    {
    	return $this->belongsTo('App\Model\Filmsinfo','pid');
    }
}
