<?php

namespace App\Blog\Front\Controllers;

use App\Blog\Categories\Category;
use App\Blog\Posts\Post;
use App\Blog\Tags\Tag;
use App\Blog\Testimonials\Testimonial;
use App\Http\Controllers\Controller;

class FrontController extends Controller {
    public $module;
    public $post;

    public function __construct(Post $post) {
        $this->module='fronte.home';
        $this->post = $post;

    }

    public function getIndex() {
        $data = [];
        $data['posts']= $this->post->paginate();
        $data['categories']= Category::all();
        return view($this->module);
    }

    public function all() {
        $data['posts'] = Post::paginate();
        $data['categories'] = Category::all();
        return view('fronte.blog_interactive', $data);

    }
    public function showPost($id) {
        $data['post'] = $this->post->with('author')->findOrFail($id);
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        $data['posts'] = Post::latest()->limit(2)->get();

        return view('fronte.blog_post', $data);

    }
    public function contact() {

        return view('fronte.contact');

    }
    public function about() {
        $data['testimonials'] = Testimonial::latest()->get();

        return view('front.about',$data);

    }

}
