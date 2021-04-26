<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rumahsakit extends Controller
{
    public function carirs(Request $r)
    {
        $dataSearch = null;
        if ($r->get("nama_rs"))
        {
            $keyword = $r->get("nama_rs");
            $dataSearch = DB::select("SELECT * FROM rumahsakit WHERE nama LIKE '%$keyword%'");
        }
        return view('function.carirs',["dataSearch"=>$dataSearch,"keyword"=>$keyword ?? null]);
    }
    public function detailrs($id)
    {
        $data = DB::select("SELECT * FROM rumahsakit WHERE id = ?",[$id]);
        $kamarinap = DB::select("SELECT * FROM kamarinap WHERE id_rumahsakit = ?",[$id]);
        return view('function.detailrs',["data"=>$data[0],"kamarinap"=>$kamarinap]);
    }
}
