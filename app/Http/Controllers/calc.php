<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
class calc extends Controller{
	public function main(){
		$a="a";
		return view('main/index');
	}
}
?>