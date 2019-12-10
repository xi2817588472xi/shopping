<?php

namespace App\Http\Controllers;

use App\Model\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('index/service');
    }

    public function house()
    {
        return view('index/service_insert');
    }

    public function create(Request $request)
    {
        $data = new Warehouse();
        $res = $request->post();
//        dump($res);die();
        if($data->add($res))
        {
            return redirect('service/play');
        }
            return "0";
    }

    public function show()
    {
        $data = new Warehouse();
        $res = $data->all();
        return view('index/service_show',['data'=>$res]);
    }

    public function unset(Request $request)
    {
        $data = new Warehouse();
        $id = $request->get('id');
        if($data->where('id',$id)->delete())
        {
            return redirect('service/play');
        }else{
            return "0";
        }
    }

    public function redact(Request $request)
    {
        $data = $request->get('id');
        $res = Warehouse::where('id',"=","$data")->get()->toarray();
//        dump($res);die();
        return view('index/service_update',['res'=>$res]);
    }

    public function compile(Request $request)
    {
        $data = new Warehouse();
        $res = $request->post();
//        dump($res);die();
        $id = $res['id'];
//        echo $id;die();
        unset($res['id']);
        if($data->where('id',"=","$id")->update($res))
        {
            return redirect('service/play');
        }else{
            return "0";
        }
    }

    public function fack()
    {
        return view('index/fack');
    }
}
