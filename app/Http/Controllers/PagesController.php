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
    public function caridokter()
        {
        return view('function.caridokter');
        }
    public function detaildiagnosis()
        {
        return view('function.detaildiagnosis');
    }
    public function profiledokter()
        {
        return view('function.profiledokter');
    }
    
}