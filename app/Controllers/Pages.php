<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function select_course()
    {
        return view('select_course');
    }

    public function cbe_rules()
    {
        return view('cbe_rules');
    }
    public function exam()
    {
        return view('exam');
    }
    public function review()
    {
        return view('review');
    }
    public function result()
    {
        return view('result');
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
}
