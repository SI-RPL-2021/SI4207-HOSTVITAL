<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\DbObat;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class obat extends Controller
{
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
        $data->user_id =$request->session()->get('id');
        $data->qty = $request->qty;
        $data->total = $request->total;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->no_telpon = $request->no_telpon;
        $data->alamat = $request->alamat;
        $data->status = "Need Approve";
        $data->metode_pembayaran = $request->metode_pembayaran;

       // $data->save();
       // $transaction = $data->id;

      // $data = $request->all();
      if($request->hasFile('foto')){
            $request->file('foto')->move('buktipembayaran/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        $test = DbObat::find($request->obat_id);
      
        DB::table('riwayatobat')->insert([
            'id_user' => $request->session()->get('id'),
            'namabel' => $request->nama_lengkap,
            'namabat' => $test->nama,
            'jumlah' => $request->qty,
            'harga' => $test->harga,
            'total' => $request->total,
            'status' => "Need Approve",
            'ket' => '1'
        ]);
     

       $cart = Cart::find($request->cart_id);
       $cart->delete();

       return redirect()->route('cariobat')->with('sukses','Pesanan diproses');
      
     
       
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
