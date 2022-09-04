<?php

namespace App\Blog\Projects;

use App\Blog\BaseApp\BaseModel;
use App\Blog\Categories\Category;
use App\Blog\Tags\Tag;
use App\Blog\users\User;
use App\Http\Controllers\Comments\Comment;

class Project extends BaseModel
{
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = [
        'title',
        'about',
        'category_id',
        'client',
        'websiteUrl',
        'mission',
        'coverImg',
        'projectImg',

    ];

    public function getData()
    {
        return $this;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategories()
    {
        return Category::with('title')->pluck('title', 'id')->toArray();

    }

}
