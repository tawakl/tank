<?php

namespace App\Blog\Profile\Controllers;

use App\Blog\Profile\Requests\ProfileRequest;
use App\Blog\users\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller {
    public $model;
    public $module;

    public function __construct(User $model) {
        $this->module='profile';
        $this->model=$model;
        $this->rules=$model->rules;
    }

    public function getEdit() {
        $data['row']=$this->model->findOrFail(auth()->user()->id);
        $data['page_title']='Edit Account';
        $data['layout']='master';
        return view('admin.'.$this->module.'.edit', $data);
    }

    public function postEdit(ProfileRequest $request) {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail(auth()->user()->id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->mobile_number = $request->mobile_number;
        $row->password =Hash::make( $request->password);

        $row->update();
        flash(trans('app.Update successfully'))->success();
        return back();
    }

    public function getLogout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
