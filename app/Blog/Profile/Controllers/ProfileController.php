<?php

namespace App\Blog\Profile\Controllers;

use App\Blog\Profile\Requests\ProfileRequest;
use App\Blog\users\User;
use App\Http\Controllers\Controller;

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
        $data['page_title']=trans('profile.Edit Account');
        $data['layout']='master';
        return view('admin.'.$this->module.'.edit', $data);
    }

    public function postEdit(ProfileRequest $request) {
        $row=$this->model->findOrFail(auth()->user()->id);
        if($row->update([$request->except(['password_confirmation']),
            $row->image = $request->image->store('profileImages','public')])) {
            flash(trans('app.Update successfully'))->success();
            return back();
        }
    }

    public function getLogout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
