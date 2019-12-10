<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
	protected $table='login';
	public $timestamps = false;
    // protected $fillable=['name','pwd'];   //允许批量赋值的字段
    public function addData($data){
    	$this->username = $data['username'];
	    $this->password = $data['password'];
	    return $this->save();
    }
    
}