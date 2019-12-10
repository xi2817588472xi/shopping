<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Login;
session_start();
class HomeController extends Controller
{
	public function index(){
		return view('home/index');
	}

	public function login(){
		return view('home/login');
	}

	public function add(){
		return view('home/form');
	}

	public function doLogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		// echo $username;
		$sql = DB::select("select * from login where username='$username' and password='$password'");
		 foreach ($sql as $user) {
            $username = $user->username;
            // echo $id;
        }
        // echo $username;die;
        $_SESSION['username'] = $username;
		if($sql){
			echo "<script>alert('登录成功');location.href='/home/index';</script>";
		}else{
			echo "2";
		}
	}

	public function exit(){
    	$_SESSION = array();
    	echo "<script>alert('退出成功');location.href='/home/index';</script>";
    }

    public function insert(Request $request){
    	$data = $request->post();
    	// var_dump($data);
    	$model = new Login();
    	$sql = $model->addData($data);
    	echo "<script>alert('注册成功，跳转到登录页面');location.href='/home/login';</script>";
    }

    public function information(){
    	return view('home/information');
    }

    public function whole(){
    	return view('home/whole');
    }
}