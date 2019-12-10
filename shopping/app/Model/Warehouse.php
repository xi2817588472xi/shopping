<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table='warehouses';
    public function add($data)
    {
        $this->username = $data['username'];
        $this->coding = $data['coding'];
        $this->static = $data['static'];
        $this->place = $data['place'];
        $this->servicearea = $data['servicearea'];
        return $this->save();
    }

}
