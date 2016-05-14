<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class menu extends Controller
{
    public function main($one,$two,$three){
     switch($two) {
     	case '+':
     	$ret=$one+$three;
     	return view('main/calc',compact('ret'));
     	break;
     	case '-':
     	$ret=$one-$three;
     	return view('main/calc',compact('ret'));
     	break;
     	case '*':
     	$ret=$one*$three;
     	return view('main/calc',compact('ret'));
     	break;
     	case '/':
     	$ret=$one/$three;
     	return view('main/calc',compact('ret'));
     	break;	
     }
    }
    public function result($numb){
    	$result=$numb;
    	return view('main/result', compact('result'));
    }
}
