<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table='propertys';
    public function add($data)
    {
        $this->username = $data['username'];
        $this->classify = $data['classify'];
        $this->static = $data['static'];
        return $this->save();
    }
}