<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        return view('admin.user.index');
    }

    public function edit()
    {

        return view('admin.user.edit');
    }
}
