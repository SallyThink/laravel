<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainPageController extends Controller
{
    public function mainpage(){
    	return view('index');
    }
    public function index(){
    	echo "qwe";
    }
    public function four($q){
       echo "<h2>404</h2><br>This page is not found";
    }
}
