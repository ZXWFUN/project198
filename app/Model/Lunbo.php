<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Lunbo extends Model
{
    use SoftDeletes;
    //关联的表名
    public $table = 'lunbo';
//    表的主键
    public $primaryKey = 'lunid';

//    是否自动维护created_at和updated_at字段
    public $timestamps = false;

    public $guarded = [];
    protected $dates = ['deleted_at'];
    public function lunfun()
    {
        return $this->hasOne('App\Model\User','user_id');
    }
}
