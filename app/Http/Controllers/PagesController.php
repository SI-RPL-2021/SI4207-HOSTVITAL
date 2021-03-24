<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function aboutus()
    {
        return view('aboutus');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function cariobat()
    {
        return view('function.cariobat');
    }
    public function articles()
    {
        return view('function.additional.articles');
    }

}
