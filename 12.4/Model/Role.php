<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table='role';
	public $timestamps = false;
    // protected $fillable=['role'];   //允许批量赋值的字段
    public function addData($role){
    	$this->role = $role;
	    return $this->save();
    }
}