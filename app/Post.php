<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'text',
        'auth'
    ];
    public function getSelectPost($id){
        return $this->where('id',$id)->get();
    }
   
}
