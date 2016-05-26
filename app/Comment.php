<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'comment','auth','post_id'
    ];
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
