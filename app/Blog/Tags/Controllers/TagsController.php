<?php

namespace App\Blog\Tags\Controllers;
use App\Blog\Tags\Requests\CreateTagsRequest;
use App\Blog\Tags\Requests\UpdateTagsRequest;
use App\Blog\Tags\Tag;
use App\Http\Controllers\Controller;


class TagsController extends Controller
{
    public $model;
    public $module;

    public function __construct(Tag $model)
    {
        $this->module = 'tags';
        $this->title = trans('app.Tags');
        $this->model = $model;
    }
    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('tags.List Tags');
        $data['rows'] = $this->model->getData()->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }


    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('tags')];
        $data['row'] = $this->model;
        return view('admin.'.$this->module . '.create', $data);

    }

    public function postCreate(CreateTagsRequest $request)
    {
        $data['module'] = $this->module;
        if ($row = $this->model->create($request->except(['_token']))) {
            flash()->success(trans('app.Created successfully'));
            return redirect( '/' . $this->module );
        }
        flash()->error(trans('app.failed to save'));
        return back();
    }


    public function getEdit($id) {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => $this->module];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.edit', $data);
    }

    public function postEdit(UpdateTagsRequest $request , $id) {
        $row = $this->model->findOrFail($id);
        if ($row->update($request->except(['_token','_method']))) {
            flash(trans('app.Update successfully'))->success();
            return redirect( '/' . $this->module );
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
