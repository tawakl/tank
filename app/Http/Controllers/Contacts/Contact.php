<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email' ,'subject', 'body'];



}
