<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
	protected $table='quan';
	public $timestamps = false;
    // protected $fillable=['name','pwd'];   //允许批量赋值的字段
}