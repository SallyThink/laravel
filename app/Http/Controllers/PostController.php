<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Post;
use App\Http\Requests\PostRequest;
use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }
    public function newpost(){
        return view('post.newpost');
    }
    public function publishedpost(PostRequest $request)
    {
         Post::create(\Request::all());
       // Post::insert($request->all());
        return redirect()->back();
    }
    public function history(){
        $all=Post::all();
        return view('post.history',compact('all'));
    }
    public function showeditpost(){

        $id=\Request::input('id');
        $edit=Post::where('id',$id)->get();
        return view('post.newpost',compact('edit'));
    }
    public function editpost(){
        $id=\Request::input('id');
        $title=\Request::input('title');
        $text=\Request::input('text');
        Post::where('id',$id)->update(['title'=>$title,'text'=>$text]);
        return redirect('post/history');
    }
    public function delete(){
        $id=\Request::input('id');
        Post::where('id',$id)->delete();
        return redirect('post/history');
    }
}

