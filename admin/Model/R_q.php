<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class R_q extends Model
{
	protected $table='r_q';
	public $timestamps = false;
    // protected $fillable=['role'];   //允许批量赋值的字段
    // public function addData($data){
    // 	$this->r_id = $data['r_id'];
    // 	$this->q_id = $data['q_id'];
	   //  return $this->save();
    // }
}