<?php

namespace App\Blog\Services\Controllers;

use App\Blog\Services\Requests\ServicesRequest;
use App\Blog\Services\Service;
use App\Http\Controllers\Controller;


class ServicesController extends Controller
{
    public $model;
    public $module;

    public function __construct(Service $model)
    {
        $this->module = 'services';
        $this->title = 'Services';
        $this->model = $model;
    }
    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'List services';
        $data['rows'] = $this->model->getData()->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }


    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('services')];
        $data['row'] = $this->model;
        return view('admin.'.$this->module . '.create', $data);

    }

    public function postCreate(ServicesRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Service();
        $row->title = $request->title;
        $row->subtext = $request->subtext;
        $row->description = $request->description;
        $row->image = $request->image->store('uploads','public');
        $row->image = $request->getImageData();

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

    public function postEdit(ServicesRequest $request , $id) {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        $row->title = $request->title;
        $row->subtext = $request->subtext;
        $row->description = $request->description;
        if ($request->hasFile('image')) {
            $row->image = $request->image->store('uploads', 'public');
        }
        $row->update();
        return redirect( '/' . $this->module );
    }

    public function show($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'view service';
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.view', $data);
    }

    public function getDelete($id)
    {
        $row = $this->model->findOrFail($id);
        $row->delete();
        flash()->success('Deleted Successfully');
        return back();
    }

}
