<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function carirs()
        {
        return view('function.carirs');
    }
    public function detailrs()
        {
        return view('function.detailrs');
    }
        public function reservasi()
        {
        return view('reservasi');
    }
    public function bpjs()
        {
        return view('function.bpjs');
        }
    public function caridiagnosis()
        {
        return view('function.caridiagnosis');
    }
<<<<<<< HEAD
    public function caridokter()
        {
        return view('function.caridokter');
=======
    public function detaildiagnosis()
        {
        return view('function.detaildiagnosis');
    }
    
>>>>>>> b5d26cf56e2c6a0a5c609b46e5bb0a689629f50d
}
}