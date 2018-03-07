<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //关联的表名
    public $table = 'role';
//    表的主键
    public $primaryKey = 'id';

//    是否自动维护created_at和updated_at字段
    public $timestamps = false;

    public $guarded = [];
    //定义角色模型跟权限模型的关联
    public function permission()
    {
        return $this->belongsToMany('App\Model\Permission', 'role_permission', 'role_id', 'permission_id');
    }
}
