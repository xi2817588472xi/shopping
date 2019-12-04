<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $table='admin';
	public $timestamps = false;
    // protected $fillable=['name','pwd'];   //允许批量赋值的字段
    public function addData($data){
    	$this->name = $data['name'];
	    $this->pwd = $data['pwd'];
	    return $this->save();
    }
    
}