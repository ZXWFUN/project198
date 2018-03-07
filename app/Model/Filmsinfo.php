<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Filmsinfo extends Model
{
    //
    public $table = 'filmsinfo';
    public $primaryKey = 'id';
    public $guarded = [];
//    public $fillable = ['cate_name','cate_title','cate_keywords'];

    public $timestamps = false;
}
