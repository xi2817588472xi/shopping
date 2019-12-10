<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Clas;

class IndexController extends Controller
{
	public function index(){
		return view('index/index');
	}

    public function service()
    {
        return redirect('service/service');
    }

    //商品属性展示
	public function show(Request $request){
        $data = new Property();
        $res = $data->all();
		return view('Index/show',['data'=>$res]);
	}
	//商品属性删除
	public function del(Request $request)
    {
        $data = new Property();
        $id = $request->get('id');
        if ($data->where('id',$id)->delete())
        {
            return redirect('index/aaa');
        }else{
            return 2;
        }
    }
    //商品分类添加
    public function insert(Request $request)
    {
        $datas = clas::all()->toArray();
        return view('Index/insert',['data'=>$datas]);
    }
    //商品属性添加
    public function plan(Request $request)
    {
        $data = new Property();
        $res = $request->post();
        if($data->add($res))
        {
            return redirect('index/aaa');
        }else{
            return "0";
        }
    }

    public function upd(Request $request)
    {
          $id = $request->get('id');
          $datas = clas::all()->toArray();
          $data = Property::where('id','=',$id)->get()->toArray();
          return view('index/update', ['data'=>$datas,'arr'=>$data]);

//          dump($data);
    }

    public function update(Request $request)
    {
        $data = new Property();
        $res = $request->post();
        $id = $res['id'];
        unset($res['id']);
        if($data->where('id','=',"$id")->update($res))
        {
            return redirect('index/aaa');
        }else{
            return false;
        }
    }
}