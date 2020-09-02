<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contacts\Contact;
use App\Http\Controllers\Contacts\Requests\CreateContactsRequest;

class ContactController extends Controller
{
    public $model;
    public $module;

    public function __construct(Contact $model)
    {
        $this->module = 'contact';
        $this->title = trans('app.contact');
        $this->model = $model;
    }
    public function index()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('tags.List contact');
        $data['rows'] = $this->model->latest()->paginate();
        return view('admin.'.$this->module . '.index', $data);
    }

    public function store(CreateContactsRequest $request)
    {
        $inputs = $request->all();

        Contact::create($inputs);

        return back();
    }


}
