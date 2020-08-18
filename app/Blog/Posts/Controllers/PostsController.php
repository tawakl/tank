<?php

namespace App\Blog\Posts\Controllers;
use App\Blog\Posts\Post;
use App\Http\Controllers\Controller;
use App\Blog\Posts\Requests\CreatePostsRequest;
use App\Blog\Posts\Requests\UpdatePostsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        return view('admin.'.$this->module . '.create', $data);

    }
    public function postCreate(CreatePostsRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Post();
        $row->title = $request->title;
        $row->description = $request->description;
        $row->category_id = $request->category_id;
        $row->postimg = $request->postimg->store('images','public');
        $row->save();
        return redirect( '/' . $this->module );

    }



    public function getEdit($id) {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => $this->module];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.edit', $data);
    }


    public function postEdit(UpdatePostsRequest $request , $id) {
        $row = $this->model->findOrFail($id);
        if ($row->update($request->all())) {
            flash(trans('app.Update successfully'))->success();
            return redirect('/' . $this->module);
        }
    }

    public function getDelete($id)
    {
        $row = $this->model->findOrFail($id);
        $row->delete();
        flash()->success(trans('app.Deleted Successfully'));
        return back();
    }

}
