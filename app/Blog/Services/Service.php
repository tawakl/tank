<?php

namespace App\Blog\Services;


use App\Blog\BaseApp\BaseModel;

class Service extends BaseModel
{
    protected $table = 'services';
    public $timestamps = true;
    protected $fillable =
        [
            'title',
            'subtext',
            'description',
            'image'
        ];

}
