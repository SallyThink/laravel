<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    
    public function index(Post $post){
        $all=$post->all();
        return view('post.mainpage',compact('all'));
    }
    
    public function selectpost($id,Post $post){
       $all=$post->getSelectPost($id);
        $comments = \App\Comment::where('post_id',$id)->get();
        return view('post.select',compact('all','comments'));
    }
    
    public function newpost(){
        return view('post.newpost');
    }
    
    public function publishedpost(PostRequest $request)
    {
        $request['auth']=\Auth::user()->name;
         Post::create($request->all());
       // Post::insert($request->all());
        return redirect()->back();
    }
    
    public function history(Post $post){

        $all=$post->where('auth',\Auth::user()->name)->get();
        return view('post.history',compact('all'));
    }
    
    public function showeditpost(Post $post){
        return view('post.newpost',compact('post'));
    }
    
    public function editpost(Post $post,PostRequest $request){
        $post->update($request->all());
        return redirect('post/history');
    }
    
    public function delete(){
        $id=\Request::input('id');
        Post::where('id',$id)->delete();
        return redirect('post/history');
    }
}

