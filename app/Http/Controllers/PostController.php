<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post;
Use App\Http\Requests\PostRequest;
use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }
    public function newpost(){
        return view('post.newpost');
    }
    public function publishedpost()
    {
        // Image::insert(\Request::all());
         Post::create(\Request::all());
       // Post::insert($request->all());
        return redirect()->back();
    }
    public function history(){
        $all=Post::all();
        return view('post.history',compact('all'));
    }
}

