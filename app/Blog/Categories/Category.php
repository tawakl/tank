<?php

namespace App\Blog\Categories;


use App\Blog\BaseApp\BaseModel;
use App\Blog\Posts\Post;

class Category extends BaseModel
{
    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable =
        [
            'title',
        ];



    public function posts()
    {
        return $this->hasMany(Post::class);
    }



}
