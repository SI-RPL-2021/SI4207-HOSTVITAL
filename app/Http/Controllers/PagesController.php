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
    public function cekdetailkamar($id)
    {
        $data = DB::select("SELECT * FROM kamarinap WHERE id = ?",[$id]);
        return view('function.cekdetailkamar',["data"=>$data[0]]);
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
    public function detaildiagnosis()
        {
        return view('function.detaildiagnosis');
    }
    public function profiledokter($id)
    {
        $data = DB::select("SELECT * FROM dokter WHERE id = ?",[$id]);
        return view('function.profiledokter',["data"=>$data[0]]);
    }
    public function cekdetailobat()
        {
        return view('function.cekdetailobat');
    }
    public function formpemesananobat()
        {
        return view('function.formpemesananobat');
    }
    public function uploadbukti()
        {
        return view('function.uploadbukti');
    }
}