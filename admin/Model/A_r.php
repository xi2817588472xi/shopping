<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class A_r extends Model
{
	protected $table='a_r';
	public $timestamps = false;
    // protected $fillable=['name','pwd'];   //允许批量赋值的字段
    public function addData($datas){
    	$this->a_id = $datas['a_id'];
	    $this->r_id = $datas['r_id'];
	    return $this->save();
    }
    
}