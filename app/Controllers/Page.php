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

    public function board1()
    {
        return view('board1');
    }

    public function board2()
    {
        return view('board2');
    }

    public function board3()
    {
        return view('board3');
    }

    public function events()
    {
        return view('events');
    }

    public function eventDetails()
    {
        return view('event-details');
    }

    public function coFounders()
    {
        return view('co-founders');
    }

}
