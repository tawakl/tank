<?php

namespace App\Blog\Projects\Controllers;
use App\Blog\Categories\Category;
use App\Blog\Posts\Post;
use App\Blog\Projects\Project;
use App\Blog\Projects\Requests\CreateProjectsRequest;
use App\Blog\Projects\Requests\UpdateProjectsRequest;
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


class ProjectsController extends Controller
{
    public $model;
    public $module;

    public function __construct(Project $model)
    {
        $this->module = 'projects';
        $this->title = 'Projects';
        $this->model = $model;

    }
    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'List Projects';
        $data['rows'] = $this->model->getData()->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }

    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('projects')];
        $data['row'] = $this->model;
        return view('admin.'.$this->module . '.create', $data);

    }
    public function postCreate(CreateProjectsRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Project();
        $row->title = $request->title;
        $row->client = $request->client;
        $row->websiteUrl = $request->websiteUrl;
        $row->mission = $request->mission;
        $row->about = $request->about;
        $row->category_id = $request->category_id;
        $row->coverImg = $request->coverImg->store('images','public');
        $row->projectImg = $request->projectImg->store('images','public');

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


    public function postEdit(UpdateProjectsRequest $request , $id) {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        $row->title = $request->title;
        $row->client = $request->client;
        $row->websiteUrl = $request->websiteUrl;
        $row->mission = $request->mission;
        $row->about = $request->about;

        if ($request->hasFile('coverImg')) {
            $row->coverImg = $request->coverImg->store('images', 'public');
        }
        if ($request->hasFile('projectImg')) {
            $row->projectImg = $request->projectImg->store('images', 'public');
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
