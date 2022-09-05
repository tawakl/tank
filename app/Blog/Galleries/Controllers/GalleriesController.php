<?php

namespace App\Blog\Galleries\Controllers;
use App\Blog\Categories\Category;
use App\Blog\Galleries\Gallery;
use App\Blog\Galleries\Requests\CreateGalleriesRequest;
use App\Blog\Galleries\Requests\UpdateGalleriesRequest;
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


class GalleriesController extends Controller
{
    public $model;
    public $module;

    public function __construct(Gallery $model)
    {
        $this->module = 'galleries';
        $this->title = 'galleries';
        $this->model = $model;
    }
    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'galleries';
        $data['rows'] = $this->model->getData()->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }

    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('galleries')];
        $data['row'] = $this->model;
        return view('admin.'.$this->module . '.create', $data);

    }
    public function postCreate(CreateGalleriesRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Gallery();
        $row->project_id = $request->project_id;
//        $row->image = $request->image->store('images','public');
        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $row['image'] = $filename;
        }
        $row->save();

        flash('app.Created successfully')->success();
        return redirect( '/' . $this->module );

    }



    public function getEdit($id) {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => $this->module];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.edit', $data);
    }


    public function postEdit(UpdateGalleriesRequest $request , $id) {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
            $row['image'] = $filename;
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
