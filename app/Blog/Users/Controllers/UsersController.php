<?php
namespace App\Blog\Users\Controllers;

use App\Http\Controllers\Controller;
use App\Blog\Users\User;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public $model;
    public $module;

    public function __construct(User $model)
    {
        $this->module = 'users';
        $this->title = trans('app.Users');
        $this->model = $model;
    }

    public function getIndex()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.list users');
        $data['rows'] = $this->model->latest()->paginate();
        return view('admin.'. $this->module . '.index', $data);
    }
    public function getCreate()
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Create') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
        $data['row'] = $this->model;
        return view('admin.'. $this->module . '.create', $data);

    }

    public function postCreate(CreateUserRequest $request)
    {
        $data['module'] = $this->module;
        if ($row = $this->model->create($request->all())) {
            flash()->success(trans('app.Created successfully'));
            return redirect( '/' . $this->module );
        }
        flash()->error(trans('app.failed to save'));
        return back();
    }

    public function getEdit(Request $request , $id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'. $this->module . '.edit', $data);

    }
    public function postEdit(Request $request , $id)
    {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
        if ($row->update($request->all())) {
            flash(trans('app.Update successfully'))->success();
            return redirect( '/' . $this->module );
        }

    }
    public function getView($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.View') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => $this->module.'?'.request()->getQueryString()];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'.$this->module . '.view', $data);
    }
    public function getDelete($id)
    {
        $row = $this->model->findOrFail($id);
        $row->delete();
        flash()->success(trans('app.Deleted Successfully'));
        return back();
    }
    public function getLogout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
