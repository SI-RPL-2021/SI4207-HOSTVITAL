<?php

namespace App\Http\Controllers;


use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        public function reservasi()
        {
        return view('reservasi');
    }
    public function bpjs()
        {
        return view('function.bpjs');
        }  
    
}