<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'name',
        'email',
        'comment'
    ];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
