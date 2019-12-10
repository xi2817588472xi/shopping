<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table='admins';
	public $timestamps = false;
    protected $fillable=['name','pwd'];   //允许批量赋值的字段
}