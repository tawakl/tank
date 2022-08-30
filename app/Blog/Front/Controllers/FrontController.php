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
        $posts= $this->post->paginate();
        $categories= Category::all();
        $testimonials = Testimonial::latest()->get();
        return view( 'fronte.home', compact( 'testimonials', 'categories', 'posts'));
    }

    public function all() {
        $data['posts'] = Post::paginate(3);
        $data['categories'] = Category::all();
        return view('fronte.blog_interactive', $data);

    }
    public function showPost($id) {
        $post = Post::with('author')->findOrFail($id);
        $previous = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id','desc')->first();
        $categories = Category::all();
        $tags = Tag::all();
        return view( 'fronte.blog_post', compact( 'post', 'next', 'previous','categories','tags' ));



//        return view('fronte.blog_post', $data);

    }
    public function contact() {

        return view('fronte.contact');

    }
    public function portfolioGrid() {

        return view('fronte.portfolio-grid-portrait-mode');

    }
    public function portfolios() {

        return view('fronte.portfolio_interactive');

    }
    public function about() {
        $data['testimonials'] = Testimonial::latest()->get();

        return view('fronte.about',$data);

    }


}
