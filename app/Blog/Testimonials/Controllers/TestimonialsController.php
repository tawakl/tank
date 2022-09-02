<?php

namespace App\Blog\Testimonials\Controllers;
use App\Http\Controllers\Controller;
use App\Blog\Testimonials\Requests\CreateTestimonialsRequest;
use App\Blog\Testimonials\Requests\UpdateTestimonialsRequest;
use App\Blog\Testimonials\Testimonial;


class TestimonialsController extends Controller
{
    public $model;
    public $module;

    public function __construct(Testimonial $model)
    {
        $this->module = 'testimonials';
        $this->title ='testimonials';
        $this->model = $model;
    }
    public function index()
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'list testimonials';
        $data['records'] = $this->model->latest()->paginate();
        return view('admin.'. $this->module . '.index', $data);

    }

    public function create()
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'Create' . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
        $data['row'] = $this->model;
        return view('admin.'. $this->module . '.create', $data);
    }


    public function store(CreateTestimonialsRequest $request)
    {
        $data['module'] = $this->module;

        $row = new Testimonial();
        $row->name = $request->name;
        $row->description = $request->description;
        $row->save();

        flash('Created successfully')->success();
        return redirect( '/' . $this->module );

    }


    public function edit($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = 'Edit' . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('testimonials')];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'. $this->module . '.edit', $data);
    }

    public function update(UpdateTestimonialsRequest $request, $id)
    {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        $row->name = $request->name;
        $row->description = $request->description;

        $row->update();
        return redirect( '/' . $this->module );

    }


    public function destroy($id)
    {
        $record = Testimonial::findOrFail($id);
        $record->delete();
        if($record)
        {
            return redirect( '/' . 'testimonials');
        }

        return redirect( '/' . 'testimonials');

    }

}
