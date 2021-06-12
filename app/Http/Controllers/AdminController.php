<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Artikel;
use App\Models\Diagnosis;
use App\Models\Rawatinap;
use App\Models\RumahSakit;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
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

    public function editdata(){

        return view('admin.editdata');
    }

   public function formadminlogin(){
       return view('admin.login');
   }

}
