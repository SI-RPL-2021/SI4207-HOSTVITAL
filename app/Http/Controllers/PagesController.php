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
    public function cariobat(Request $r)
    {
        $dataSearch = null;
        if ($r->get("nama_obat"))
        {
            $keyword = $r->get("nama_obat");
            $dataSearch = DB::select("SELECT * FROM obat WHERE nama LIKE '%$keyword%'");
        }
        return view('function.cariobat',["dataSearch"=>$dataSearch,"keyword"=>$keyword ?? null]);
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
    public function caridiagnosis(Request $r)
    {
        
        $dataSearch = null;
        if ($r->get("nama_diagnosis"))
        {
            $keyword = $r->get("nama_diagnosis");
            $dataSearch = DB::select("SELECT * FROM diagnosis WHERE nama LIKE '%$keyword%'");
        }
        return view('function.caridiagnosis',["dataSearch" => $dataSearch,"keyword"=>$keyword ?? null]);
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
    public function detaildiagnosis($id)
    {
        $data = DB::select("SELECT * FROM diagnosis WHERE id = ?",[$id]);
        return view('function.detaildiagnosis',["data"=>$data[0]]);
    }
    public function profiledokter($id)
    {
        $data = DB::select("SELECT * FROM dokter WHERE id = ?",[$id]);
        return view('function.profiledokter',["data"=>$data[0]]);
    }
    public function cekdetailobat($id)
    {
        $data = DB::select("SELECT * FROM obat WHERE id = ?",[$id]);
        return view('function.cekdetailobat',["data"=>$data[0]]);
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