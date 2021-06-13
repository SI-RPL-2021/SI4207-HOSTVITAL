<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\Rawatinap;
use App\Models\RumahSakit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function datarawatinap(){
        $data = DB::table('riwayatinap')->get();

        
        $datarumahsakit = DB::table('riwayatinap')->distinct('namars')->get();
       
        $tampung =[];
        $tampungdata =[];


        $response = \DB::table('riwayatinap')
            ->select('namars as name', \DB::raw('COUNT(namars) as y'), 'namars')
            ->groupBy('namars')
            ->get();
        //dd($response);drilldown



        // $kamuss = DB::table('riwayatinap')->distinct('namars')->get();
        // foreach ($datarumahsakit as  $value) {
        //     $tampung[] = $value->namars;
             
        // }
        

        //dd($tampung);
        return view('admin.datarawatinap', compact('data','response'));
    }

    public function updatestatusrawatinapapprove($id){
        
        $categories = Rawatinap::where('id_riwayat',$id)
                ->update([
                    'status' => 'Approve'
                ]);
        return redirect()->back();
        
    }

    public function updatestatusrawatinapdecline($id){
        
        $categories = Rawatinap::where('id_riwayat',$id)
                ->update([
                    'status' => 'decline'
                ]);
        return redirect()->back();
        
    }

    public function printpdfrawayinap(){
        $data = Rawatinap::all();
        $jumklahdata = Rawatinap::count();
        $jumlahharga = Rawatinap::sum('harga');

        view()->share(['data' => $data,
                        'jumklahdata' => $jumklahdata,
                        'jumlahharga' => $jumlahharga,
        ]);
        $pdf = PDF::loadview('datarawatinap-pdf');

        return $pdf->download('datarawatinaf.pdf');
    }


    public function datapenjualanobat(){
        $data = Transaction::all();

        $response = \DB::table('riwayatobat')
            ->select('namabat as name', \DB::raw('COUNT(namabat) as y'), 'namabat')
            ->groupBy('namabat')
            ->get();


        return view('admin.datapenjualanobat',compact('data','response'));
    }

    public function approvepembelianobat($id){
        
        $categories = Transaction::find($id)
                ->update([
                    'status' => 'Approve'
                ]);
        return redirect()->back();
        
    }

    public function declinepembelianobat($id){
        
        $categories = Transaction::find($id)
                ->update([
                    'status' => 'decline'
                ]);
        return redirect()->back();
        
    }

    public function printpdfobat(){
        $data = Transaction::all();
        $jumklahdata = Transaction::count();
        $jumlahharga = Transaction::sum('total');

        view()->share(['data' => $data,
                        'jumklahdata' => $jumklahdata,
                        'jumlahharga' => $jumlahharga,
        ]);
        $pdf = PDF::loadview('dataobat-pdf');

        return $pdf->download('laporanpenjualanobat.pdf');
    }

   public function formadminlogin(){
       return view('admin.login');
   }

}
