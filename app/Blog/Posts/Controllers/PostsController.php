<?php

namespace App\Blog\Posts\Controllers;
use App\Blog\Categories\Category;
use App\Blog\Posts\Post;
use App\Blog\Tags\Tag;
use App\Blog\users\User;
use App\Http\Controllers\Controller;
use App\Blog\Posts\Requests\CreatePostsRequest;
use App\Blog\Posts\Requests\UpdatePostsRequest;
use App\Http\Middleware\checkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use function Illuminate\Support\Facades\Gate;


class PostsController extends Controller
{
    public $model;
    public $module;

    public function __construct(Post $model)
    {
        $this->module = 'posts';
        $this->title = trans('app.posts');
        $this->model = $model;
        $this->middleware(checkCategory::class)->only('getCreate');

    }
    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('post.List posts');
        $data['rows'] = $this->model->getData()->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }

    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('posts')];
        $data['row'] = $this->model;
        return view('admin.'.$this->module . '.create', $data)->with('tags',Tag::all());

    }
    public function postCreate(CreatePostsRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Post();
        $row->title = $request->title;
        $row->description = $request->description;
        $row->category_id = $request->category_id;
        $row->author_id = $request->author_id;
        $row->postimg = $request->postimg->store('images','public');
        $row->postimg = $request->getImageData();

        $row->save();
        if ($request->tags) {
            $row->tags()->attach($request->tags);
        }
        flash('app.Created successfully')->success();
        return redirect( '/' . $this->module );

    }



    public function getEdit($id) {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => $this->module];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.edit', $data)->with('tags',Tag::all());
    }


    public function postEdit(UpdatePostsRequest $request , $id) {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        $row->title = $request->title;
        $row->description = $request->description;
        if ($request->tags) {
            $row->tags()->sync($request->tags);
        }
        if ($request->hasFile('postimg')) {
            $row->postimg = $request->postimg->store('images', 'public');
        }
        $row->update();
        return redirect( '/' . $this->module );
    }



    public function getDelete($id)
    {
        $row = $this->model->findOrFail($id);
        $row->delete();
        flash()->success(trans('app.Deleted Successfully'));
        return back();
    }

}
