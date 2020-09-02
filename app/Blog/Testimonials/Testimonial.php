<?php

namespace App\Blog\Testimonials;

use App\Blog\BaseApp\BaseModel;

class Testimonial extends BaseModel
{

    protected $table = 'testimonials';
    public $timestamps = true;
    protected $fillable = ['title','description','testimonialimg'];


}
