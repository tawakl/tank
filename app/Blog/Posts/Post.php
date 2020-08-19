<?php

namespace App\Blog\Posts;



use App\Blog\BaseApp\BaseModel;
use App\Blog\Categories\Category;
use App\Blog\Tags\Tag;
use App\Blog\users\User;

class Post extends BaseModel
{
//    protected static $attachFields = [
//
//        'postimg' => [
//            'sizes' => ['small' => 'crop,400x300', 'large' => 'resize,800x600'],
//            'path' => 'uploads'
//        ],
//    ];
    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'category_title',
        'postimg',
        'is_active',

    ];

    public function getData()
    {
        return $this;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }

    public function getCategories()
    {
        return Category::with('title')->pluck('title', 'id')->toArray();

    }

    public function getTags()
    {
        return Tag::with('title')->pluck('title', 'id')->toArray();

    }

}
