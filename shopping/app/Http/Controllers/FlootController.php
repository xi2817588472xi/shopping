<?php

namespace App\Http\Controllers;

use App\Model\Commodi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlootController extends Controller
{
    public function index()
    {
        $data = new Commodi();
        $res = $data->all();
        dump($res);die();
        return view('index/floot');
    }



    public function show()
    {
        return view('index/details');
    }





}
