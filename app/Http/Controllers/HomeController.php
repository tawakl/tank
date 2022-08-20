<?php

namespace App\Http\Controllers;

use App\Blog\users\User;
use App\Jobs\SendMAils;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.layouts.master');
    }

    protected function sendMails()
    {
        $emails =User::chunk(50,function ($data){
            dispatch(new SendMAils($data));
        });
        return 'done';
    }
}
