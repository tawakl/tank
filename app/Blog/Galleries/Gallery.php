<?php

namespace App\Blog\Galleries;

use App\Blog\BaseApp\BaseModel;
use App\Blog\Categories\Category;
use App\Blog\Projects\Project;
use App\Blog\Tags\Tag;
use App\Blog\users\User;
use App\Http\Controllers\Comments\Comment;

class Gallery extends BaseModel
{
    protected $table = 'galleries';
    public $timestamps = true;
    protected $fillable = [
        'image',
        'project_id'
    ];

    public function getData()
    {
        return $this;
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function getProjects()
    {
        return Project::with('title')->pluck('title', 'id')->toArray();

    }

}
