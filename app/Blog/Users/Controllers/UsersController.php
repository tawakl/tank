<?php
namespace App\Blog\Users\Controllers;

use App\Blog\Users\Requests\CreateUsersRequest;
use App\Blog\Users\Requests\UpdateUsersRequest;
use App\Http\Controllers\Controller;
use App\Blog\Users\User;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function postCreate(CreateUsersRequest $request)
    {
        $data['module'] = $this->module;
        $row = new User();
        $row->name = $request->name;
        $row->email = $request->email;
        $row->mobile_number = $request->mobile_number;
        $row->password = Hash::make( $request->password);
        $row->save();
        return redirect( '/' . $this->module );

    }

    public function getEdit($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.Edit') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
        $data['row'] = $this->model->findOrFail($id);
        return view('admin.'. $this->module . '.edit', $data);

    }
    public function postEdit(UpdateUsersRequest $request , $id)
    {
        $data['module'] = $this->module;
        $row = $this->model->findOrFail($id);
//        if ($row->update($request->all())) {
//            flash(trans('app.Update successfully'))->success();
//            return redirect( '/' . $this->module );
//        }
        $row->name = $request->name;
        $row->email = $request->email;
        $row->mobile_number = $request->mobile_number;
        $row->password =bcrypt( $request->email);
        $row->update();
        return redirect( '/' . $this->module );


    }
    public function getView($id)
    {
        $data['module'] = $this->module;
        $data['page_title'] = trans('app.View') . " " . $this->title;
        $data['breadcrumb'] = [$this->title => route('users')];
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
    public function makeAdmin(User $user)
    {
        $user->role = "admin";
        $user->save();
        flash()->success(trans('app.changed Successfully'));
        return back();
    }
    public function cancleAdmin(User $user)
    {
        $user->role = "writer";
        $user->save();
        flash()->success(trans('app.changed Successfully'));
        return back();
    }
    public function getLogout() {
        auth()->logout();
        return redirect()->route('login');
    }
}
