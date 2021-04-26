<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dokter extends Controller
{
    public function caridokter(Request $r)
    {
        $dataSearch = null;
        if ($r->get("nama_dokter"))
        {
            $keyword = $r->get("nama_dokter");
            $dataSearch = DB::select("SELECT * FROM dokter WHERE nama LIKE '%$keyword%'");
        }
        return view('function.caridokter',["dataSearch"=>$dataSearch,"keyword"=>$keyword ?? null]);
    }

    public function profiledokter($id)
    {
        $data = DB::select("SELECT * FROM dokter WHERE id = ?",[$id]);
        return view('function.profiledokter',["data"=>$data[0]]);
    }
}
