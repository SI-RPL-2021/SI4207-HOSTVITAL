<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class diagnosis extends Controller
{
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
    public function detaildiagnosis($id)
    {
        $data = DB::select("SELECT * FROM diagnosis WHERE id = ?",[$id]);
        return view('function.detaildiagnosis',["data"=>$data[0]]);
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
