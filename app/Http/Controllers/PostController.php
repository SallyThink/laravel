<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\PostRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function index(){
        return view('post.index');
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
         Post::create($request->all());
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
    
    public function editpost(Post $post,PostRequest $request){
        $id=\Request::input('id');
        $title=\Request::input('title');
        $text=\Request::input('text');
//        Post::where('id',$id)->update(['title'=>$title,'text'=>$text]);
      //  dd($request->id);
        $r=$request->id;
       // dd($post->where('id',$request->id));
        $post->update($request->all());
        return redirect('post/history');
    }
    
    public function delete(){
        $id=\Request::input('id');
        Post::where('id',$id)->delete();
        return redirect('post/history');
    }
}

