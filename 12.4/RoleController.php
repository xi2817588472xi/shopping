<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Role;
use App\Model\Quan;
use App\Model\R_q;
session_start();
class RoleController extends Controller
{
	public function index(){
		return view('role/show');
	}

	public function shows(){
		$id = $_SESSION['id'];
        $sql = DB::select("select * from role");		
			 $data['code'] = 0;
		     $data['msg'] = "";
		     $data['data'] = $sql;
		
		echo json_encode($data);
	}

	public function add(){
		// $sql = DB::select("select * from quan");
		 $sql = DB::table('quan')->get();
		 $sqls = DB::table('role')->get();
		 $data = json_decode($sql,true);
		 $datas = json_decode($sqls,true);
		// var_dump($data);die;
		// var_dump($sql);die;
		return view('role/form',['data'=>$data,'datas'=>$datas]);
	}

	public function doAdd(Request $request){
		$role = $request->post('role');
		// print_r($role);die;
		// $sql = DB::insert()
		$model = new Role();
		$sql = $model->addData($role);
		$r_id = $model->id;
		// print_r($id);die;
		$q_id = $request->post('q_id');
		// print_r($q_id);die;
		// $data =  array('q_id'=>$q_id);
		// dd($q_id);die;
		// foreach ($q_id as $key => $value) {
  //           $models = new R_q();
  //           $models->r_id = $r_id;
  //           $models->q_id = $value;
  //           $models->addData();
  //       }
        foreach ($q_id as $key => $value) {
        	$models = new R_q();
            $models->r_id = $r_id;
            $models->q_id = $value;
            $models->save();
        }
		echo "<script>alert('管理员角色添加成功');location.href='/role/index';</script>";

	}

	public function use(){
		$id = $_GET['id'];
		// echo $id;die;
		$sql = DB::select("select * from role where id=$id");
		// var_dump($sql);
		 foreach ($sql as $user) {
            $role = $user->role;
            // echo $role;
        }
        $sqls = DB::table('admin')
        ->join('a_r','admin.id','=','a_r.a_id')
        ->join('role','a_r.r_id','=','role.id')
        ->where('role.role','=',$role)
        ->select()
        ->get();
        $re = json_decode($sqls,true);
        // var_dump($re);
	    $data['code'] = 0;
		$data['msg'] = "";
		$data['data'] = $re;
		return json_encode($data);
		// var_dump($data);
		     
	}

	public function del(){
		$id = $_GET['id'];
		Role::where('id',$id)->delete();
	}
	
}