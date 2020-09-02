<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Comments\Comment;
use App\Http\Controllers\Comments\Requests\CreateCommentsRequest;

class CommentsController extends Controller
{

    public function store(CreateCommentsRequest $request)
    {
        $inputs = $request->all();
        if(auth()->user()){
            $inputs['commentByName'] = auth()->user()->name;
            $inputs['commentByEmail'] = auth()->user()->email;
            $inputs['user_id'] = auth()->user()->id;
        }

        Comment::create($inputs);

        return back();
    }


}