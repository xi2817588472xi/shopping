<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\A_r;
session_start();
class AdminController extends Controller
{
	public function index(){
		return view('admin/show');
	}

	public function shows(){
		$sql = DB::select("select * from admin");		
			 $data['code'] = 0;
		     $data['msg'] = "";
		     $data['data'] = $sql;
		
		echo json_encode($data);
	}

	public function add(){
		// echo "123";
		$sql = DB::table('role')->get();
		$data = json_decode($sql,true);
		// var_dump($data);die;
		return view('admin/form',['data'=>$data]);
	}

	public function insert(Request $request){
		// $data = $request->post();
		$name = $_POST['name'];
		$pwd = $_POST['pwd'];
		$r_id = $_POST['r_id'];
		$data = array('name'=>$name,'pwd'=>$pwd);
		// var_dump($r_id);die;
		$model = new Admin();
		$sql = $model->addData($data);
		$a_id = $model->id;
		// echo $a_id;die;
		$datas = array('a_id'=>$a_id,'r_id'=>$r_id);
		$models = new A_r();
		$sql = $models->addData($datas);
		if($sql){
			echo "<script>alert('管理员添加成功')</script>";
		}
	}

	public function delete(){
		$id = $_GET['id'];
		Admin::where('id',$id)->delete();
		A_r::where('a_id',$id)->delete();
	}

	public function update(){
		$id = $_GET['id'];
		$data = Admin::where('id','=',$id)->get()->toarray();
		// var_dump($data);die;
		return view('admin/save',['data'=>$data]);
	}

	public function save(){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$pwd = $_POST['pwd'];
		$sql = Admin::where('id','=',$id)->update(['name'=>$name,'pwd'=>$pwd]);
		echo "<script>alert('管理员修改成功');location.href='/admin/index';</script>";
	}
}