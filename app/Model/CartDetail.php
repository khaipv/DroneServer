<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table ="chitietgiohang";
    public $timestamps = false;
    protected $fillable = ['so_luong','san_pham_id','gio_hang_id'];
}
