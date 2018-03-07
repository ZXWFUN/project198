<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Article extends Model 
{
     use SoftDeletes;
    //
    //关联的表名
    public $table = 'article';
//    表的主键
    public $primaryKey = 'art_id';

//    是否自动维护created_at和updated_at字段
    public $timestamps = false;

    public $guarded = [];
    protected $dates = ['deleted_at'];
    public function artfun()
    {
        return $this->hasOne('App\Model\News','news_id');
    }
}
