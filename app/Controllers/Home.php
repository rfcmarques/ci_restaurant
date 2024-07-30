<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function products(): string
    {
        return view('products');
    }

    public function where_we_are(): string
    {
        return view('where_we_are');
    }
}
