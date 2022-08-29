<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contacts\Contact;
use App\Http\Controllers\Contacts\Requests\CreateContactsRequest;
use Illuminate\Support\Facades\Mail;

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
        $data['rows'] = $this->model->latest()->paginate(12);
        return view('admin.'.$this->module . '.index', $data);
    }

    public function store(CreateContactsRequest $request)
    {
        $inputs = $request->all();

        Contact::create($inputs);
        \Mail::send('contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('body'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('tawakl.at@gmail.com')
                   ->subject($request->get('subject'));

            });
        return back()->with('success', 'Thank you for contact us!');;
    }

    public function show($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('tags.view contact');
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.view', $data);
    }


}
