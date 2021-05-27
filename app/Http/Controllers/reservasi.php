<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kamarinap;
use App\Models\reservasi as reservasiModel;

class reservasi extends Controller
{
    public function bookingKamar($idKamar)
    {
        $reservasi = kamarinap::leftJoin('rumahsakit', 'rumahsakit.id', '=', 'kamarinap.id_rumahsakit')
            ->where('kamarinap.id', $idKamar)
            ->select('kamarinap.id as idKamarInap', 'rumahsakit.id as idRumahSakit', 'rumahsakit.nama as namaRumahSakit', 'rumahsakit.alamat as alamatRumahSakit', 'kamarinap.nama as namaKamar', 'kamarinap.deskripsi', 'kamarinap.tersedia', 'kamarinap.harga', 'kamarinap.foto')
            ->first();
        
        return view('reservasi',["data"=>$reservasi]);
    }

    public function submitBooking(Request $request)
    {
        // dd($request->all());
        $reservasi = new reservasiModel();
        $reservasi->id_kamar = $request->idKamar;
        $reservasi->nama_wali = $request->namaWali;
        $reservasi->nama_pasien = $request->namaPasien;
        $reservasi->jenis_kelamin = $request->jenisKelamin;
        $reservasi->nik = $request->nikKtp;
        $reservasi->ttl = $request->ttl;
        $reservasi->alamat_pasien = $request->alamatPasien;
        $reservasi->bukti_pembayaran = $request->file('buktiPembayaran')->store('assets/buktipembayaran','public');
        $reservasi->save();

        $kamar = DB::select('SELECT * from kamarinap where id = ?', [$request->idKamar]);
        $rs = DB::select('SELECT * from rumahsakit where id = ?', [$kamar[0]->id]);


        DB::table('riwayatinap')->insert([
            'id_user' => $request->session()->get('id'),
            'namars' => $rs[0]->nama,
            'tipekamar' => $kamar[0]->nama,
            'harga' => $kamar[0]->harga,
            'status' => "Need Approve",
            'keter' => "review"
        ]);

        return redirect()->route('carirs')->with('sukses','Pesanan diproses');
    }
}
