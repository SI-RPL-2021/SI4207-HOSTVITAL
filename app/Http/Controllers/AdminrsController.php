<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminrsController extends Controller
{
    public function rsrawatinap(){
        return view('adminrs.rawatinap');
    }

    public function rsedit() {
        return view('adminrs.rsmin');
    }
}
