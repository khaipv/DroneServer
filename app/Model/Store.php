<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table ="cuahang";
    public $timestamps = false;
    protected $fillable = ['dia_chi','email','sdt','nguoi_dung_id'];
}
