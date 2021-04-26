<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kamarinap extends Controller
{
    public function cekdetailkamar($id)
    {
        $data = DB::select("SELECT * FROM kamarinap WHERE id = ?",[$id]);
        return view('function.cekdetailkamar',["data"=>$data[0]]);
    }
}
