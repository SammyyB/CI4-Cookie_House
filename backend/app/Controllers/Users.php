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

    public function signup(): string
    {
        return view('user/signup_page');
    }

    public function moodboard(): string
    {
        return view('user/moodboard_page');
    }

    public function roadmap(): string
    {
        return view('user/roadmap_page');
    }
}
