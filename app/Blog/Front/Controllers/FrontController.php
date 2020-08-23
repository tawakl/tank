<?php

namespace App\Blog\Front\Controllers;

use App\Blog\Categories\Category;
use App\Blog\Posts\Post;
use App\Http\Controllers\Controller;

class FrontController extends Controller {
    public $module;

    public function __construct() {
        $this->module='welcome';
    }

    public function getIndex() {
        $data = [];
        $data['posts']= Post::all();
        $data['categories']= Category::all();
        return view($this->module, $data);
    }

}
