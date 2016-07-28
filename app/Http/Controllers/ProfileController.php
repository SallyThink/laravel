<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function profile(Profile $profile){
      $result=Profile::where('user_id',\Auth::user()->name)->get();
        $pattern='/([0-9]+)-([a-z]*)-([0-9]+)/';
        foreach($result as $val){
            preg_match($pattern, $val->born,$match);
        }
        return view('post.profile',compact('result','match'));
    }
    public function save(Profile $profile,ProfileRequest $request){
        $request['born']=$request['day']."-".$request['month']."-".$request['year'];
        Profile::where('user_id',\Auth::user()->name)->update($request->only(['status','born','country','image']));
        return redirect()->back();
    }
}
