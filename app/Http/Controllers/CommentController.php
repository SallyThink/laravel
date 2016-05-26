<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Http\Requests;

class CommentController extends Controller
{
    public function addcomment(CommentRequest $request){
        Comment::create(\Request::all());
         return redirect()->back();
        }
}
