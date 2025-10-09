<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{

    public function index(): string
    {
        return view('user/landing_page');
    }

    public function login(): string
    {
        return view('user/login_page');
    }
}
