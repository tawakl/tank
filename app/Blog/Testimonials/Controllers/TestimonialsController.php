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
        $this->title = trans('app.testimonials');
        $this->model = $model;
    }
    public function index()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.list users');
        $data['records'] = $this->model->latest()->paginate();
        return view('admin.'. $this->module . '.index', $data);

    }

    public function create()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
        $data['row'] = $this->model;
        return view('admin.'. $this->module . '.create', $data);
    }


    public function store(CreateTestimonialsRequest $request)
    {
        $data['module'] = $this->module;
        $row = $this->model->create(array_merge($request->except(['testimonialimg']),
            [
                'testimonialimg' => $request->testimonialimg->store('testimonialimg','public'),
            ]
        ));

        if ($row) {
            flash()->success(trans('app.Created successfully'));
            return redirect( '/' . $this->module );
        }
        flash()->error(trans('app.failed to save'));
        return back();

    }


    public function edit($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('testimonials')];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'. $this->module . '.edit', $data);
    }

    public function update(UpdateTestimonialsRequest $request, $id)
    {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        $row->title = $request->title;
        $row->description = $request->description;

        if ($request->hasFile('testimonialimg')) {
            $row->testimonialimg = $request->testimonialimg->store('testimonialimg', 'public');
        }
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
