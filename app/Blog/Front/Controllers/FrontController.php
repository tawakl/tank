<?php

namespace App\Blog\Front\Controllers;

use App\Blog\Categories\Category;
use App\Blog\Posts\Post;
use App\Http\Controllers\Controller;

class FrontController extends Controller {
    public $module;
    public $post;

    public function __construct(Post $post) {
        $this->module='front.home';
        $this->post = $post;

    }

    public function getIndex() {
        $data = [];
        $data['posts']= $this->post->paginate(2);
        $data['categories']= Category::all();
        return view($this->module, $data);
    }

    public function all() {
        $data['posts'] = Post::paginate(2);
        $data['categories'] = Category::all();
        return view('front.posts.all-posts', $data);

    }
    public function showPost($id) {
        $data['post'] = $this->post->with('author')->findOrFail($id);
        $data['categories'] = Category::all();
        return view('front.posts.show', $data);

    }

}
