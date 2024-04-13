<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }
    public function user()
    {
        return view('admin/user');
    }
    public function q_bank()
    {
        return view('admin/question_bank');
    }
    public function test()
    {
        return view('admin/test');
    }
}
