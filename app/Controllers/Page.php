<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function signup()
    {
        return view('signup');
    }

    public function signin()
    {
        return view('signin');
    }
}
