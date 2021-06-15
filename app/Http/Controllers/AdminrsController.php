<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminrsController extends Controller
{
    public function rsrawatinap(){
        $data = DB::table('riwayatinap')->get();

        
        $datarumahsakit = DB::table('riwayatinap')->distinct('namars')->get();
       
        $tampung =[];
        $tampungdata =[];


        $response = \DB::table('riwayatinap')
            ->select('namars as name', \DB::raw('COUNT(namars) as y'), 'namars')
            ->groupBy('namars')
            ->get();

        return view('adminrs.rawatinap',  compact('data','response'));
    }

    public function review() {
        $data = DB::table('review')->get();
        return view('adminrs.review',["data"=>$data]);
    }
}
