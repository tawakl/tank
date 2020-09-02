<?php

namespace App\Http\Controllers\Comments;

use App\Blog\Posts\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'post_id' ,'commentByName', 'commentByEmail', 'body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }


}
