<?php

namespace App\Blog\Tags;


use App\Blog\BaseApp\BaseModel;
use App\Blog\Posts\Post;

class Tag extends BaseModel
{
    protected $table = 'tags';
    public $timestamps = true;
    protected $fillable =
        [
            'title',
        ];



    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }



}
