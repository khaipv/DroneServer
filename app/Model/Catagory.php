<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table ="danhmuc";
    public $timestamps = false;
    protected $fillable = ['ten_danh_muc'];
}
