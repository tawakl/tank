<?php

namespace App\Blog\Posts;



use App\Blog\BaseApp\BaseModel;
use App\Blog\Categories\Category;
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
//        'author_id',
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


//    public function author()
//    {
//        return $this->belongsTo(User::class, 'author_id');
//    }

    public function getCategories()
    {
        return Category::with('title')->pluck('title', 'id')->toArray();

    }

}
