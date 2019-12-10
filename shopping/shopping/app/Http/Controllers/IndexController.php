<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Model\Admin;

class IndexController extends Controller
{
	public function index(){
		return view('index/index');
	}

	public function add(Request $request){
		$data=$request->all();
		$model=new Admin();
		$sql=$model::create($data);
		return $sql;
	}
	
}