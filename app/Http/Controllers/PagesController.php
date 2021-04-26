<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Dokter;
use App\Models\Transaction;
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
    public function formpemesananobat(Request $request) {
        $code = 'CART-'. mt_rand(000000, 999999);
        $data = new Cart;
        $data->code =  $code;
        $data->obat_id = $request->obat_id;
        $data->qty = $request->qty;
        $data->total = $request->harga * $request->qty;
       
        $data->save();
       // dd($data->id);

        $datacart = Cart::with('obat')->where('id', $data->id)->first();

        return view('function.formpemesananobat',\compact('datacart'));
    }
    public function transaction(Request $request){

       
         $data= new Transaction;
         $data->obat_id = $request->obat_id;
         $data->qty = $request->qty;
         $data->total = $request->total;
         $data->nama_lengkap = $request->nama_lengkap;
         $data->no_telpon = $request->no_telpon;
         $data->alamat = $request->alamat;
         $data->metode_pembayaran = $request->metode_pembayaran;

        // $data->save();
        // $transaction = $data->id;

       // $data = $request->all();
        $data['foto'] = $request->file('foto')->store('assets/buktipembayaran','public');
        $data->save();

        $cart = Cart::find($request->cart_id);
        $cart->delete();

        return redirect()->route('cariobat')->with('sukses','Data berhasil Di Tambahkan');
       
      
        
    }
    
}