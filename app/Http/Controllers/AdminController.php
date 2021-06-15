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

    public function editdata(){

        return view('admin.editdata');
    }

    public function rumahsakit(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('rumahsakit')->where('nama','like', '%'.$query.'%')->get();
            }else{
                $data = DB::table('rumahsakit')->orderBy('id','asc')->get();
            }

            $total_row = $data->count();
            $output ='';
            if($total_row > 0){
                $no =1;
                foreach ($data as $row) {
                    $output .='
                        <tr>
                            <td> '.$no++.'</td>
                            <td> '.$row->nama.'</td>
                            <td> '.$row->alamat.'</td>
                            <td> '.$row->notelp.'</td>
                            <td> '.$row->website.'</td>
                            <td>
                                     <a href="/formeditdatarumahsakit/'.$row->id.'" class="btn btn-warning btn-sm">Edit</a>
                                     <a href="/deletedatarumahsakit/'.$row->id.'" class="btn btn-sm btn-danger delete-confirm" >Delete</a>
                            </td>
                        </tr>
                    ';
                }
            }else{
                $output ='DATA TIDAK DI TEMUKAN';
            }

            $data = array('table_data_rumahsakit' => $output);

            echo json_encode($data);

        }
    }

     public function deletedatarumahsakit($id)
    {
        $item = RumahSakit::where('id', $id)->delete();
            if ($item) {
                return redirect()->back();
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
   }

    public function formtambahdatarumahsakit(){
        return view('rumahsakit.formtambahdata');
    }

    public function adddatarumahsakit(Request $request){
        $data= new RumahSakit;
        $data->nama = $request->nama;
        $data->website =$request->website;
        $data->notelp = $request->notelp;
        $data->googlemapembed = $request->googlemapembed;
        $data->alamat = $request->alamat;
        $data->deskripsi = $request->deskripsi;

      if($request->hasFile('foto')){
            $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }

       return redirect()->route('editdata')->with('success','Data Rumah Sakit Berhasil Di Tambahkan');
    }


    public function formeditdatarumahsakit($id){
        $data = RumahSakit::find($id);
        //dd($data);

        return view('rumahsakit.formeditdata',compact('data'));
    }

    public function updatedatarumahsakit(Request $request,$id){
        $data = RumahSakit::find($id);
        // $data->update($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
        //     $data->foto= $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }
        $id = $request->session()->get('id');
        $data = DB::select("SELECT * FROM users WHERE id= $id");
        if ($data[0]->role == "ADMIN") {
            return redirect()->route('editdata')->with('success','Data Berhasil Di Update');
        }else if ($data[0]->role == "ADMINRS") {
            return redirect('/rsmin');
        }
    }



//data user
    public function user(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('users')->where('username','like', '%'.$query.'%')->get();
            }else{
                $data = DB::table('users')->orderBy('id','asc')->get();
            }

            $total_row = $data->count();
            $output ='';
            if($total_row > 0){
                $no =1;
                foreach ($data as $row) {
                    $output .='
                        <tr>
                            <td> '.$no++.'</td>
                            <td> '.$row->firstname.'</td>
                            <td> '.$row->lastname.'</td>
                            <td> '.$row->username.'</td>
                              <td> '.$row->email.'</td>
                            <td> '.date('d-m-Y', strtotime($row->created_at)).'</td>
                          
                            
                            <td>
                                  <a href="/formeditdatauser/'.$row->id.'" class="btn btn-warning btn-sm">Edit</a>
                                     <a href="/deletedatauser/'.$row->id.'" class="btn btn-sm btn-danger delete-confirm-user" >Delete</a>  
                            </td>
                        </tr>
                    ';
                }
            }else{
                $output ='DATA TIDAK DI TEMUKAN';
            }

            $data = array('table_data_user' => $output);

            echo json_encode($data);

        }
        
    }


      public function formtambahdatauser(){
        return view('userfolder.formtambahdata');
    }

     public function tambahdatauser(Request $req){
        $user = new User();
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->username = $req->username;
        $user->email  = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return redirect()->route('editdata')->with('success','Data User Berhasil Di Tambahkan');
    }

    public function formeditdatauser($id){
        $data = DB::table('users')->find($id);

        return view('userfolder.formeditdata',compact('data'));
    }


     public function updatedatauser(Request $request,$id){
       $data = request()->except(['_token']);
        DB::table('users')
                ->where('id', $id)
                ->update($data);
        return redirect()->route('editdata')->with('success','Data Berhasil Di Update');
    }


     public function deletedatauser($id)
    {
        $item = User::where('id', $id)->delete();
            if ($item) {
                return redirect()->back();
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
   }
   
   

    

    
   //data dokter
    public function dokter(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('dokter')->where('nama','like', '%'.$query.'%')->get();
            }else{
                $data = DB::table('dokter')->orderBy('id','asc')->get();
            }

            $total_row = $data->count();
            $output ='';
            if($total_row > 0){
                $no =1;
                foreach ($data as $row) {
                    $output .='
                        <tr>
                            <td> '.$no++.'</td>
                            <td> '.$row->nama.'</td>
                            <td> '.$row->spesialis.'</td>
                            <td> '.$row->rumahsakit.'</td>
                            <td> '.$row->deskripsi.'</td>
                            <td> <img style="width: 50px;" src="'.asset('resource/imgres/'.$row->foto).'"</td>
        
                            <td>
                                  <a href="/formeditdatadokter/'.$row->id.'" class="btn btn-warning btn-sm">Edit</a>
                                  <a href="/deletedatadokter/'.$row->id.'" class="btn btn-sm btn-danger delete-confirm-dokter" >Delete</a>  
                            </td>
                        </tr>
                    ';
                }
            }else{
                $output ='DATA TIDAK DI TEMUKAN';
            }

            $data = array('table_data_dokter' => $output);

            echo json_encode($data);

        }
        
    }

     public function formtambahdatadokter(){
         $rumahsakit = RumahSakit::all();
        return view('datadokter.formtambahdata',compact('rumahsakit'));
    }

    public function tambahdatadokter(Request $request){
        $data= new Dokter;
        $data->nama = $request->nama;
        $data->spesialis =$request->spesialis;
        $data->rumahsakit = $request->rumahsakit;
        $data->deskripsi = $request->deskripsi;


      if($request->hasFile('foto')){
            $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('editdata')->with('success','Data Dokter Berhasil Di Tambahkan');
    }




    public function formeditdatadokter($id){
        $rumahsakit = RumahSakit::all();
        $data = Dokter::find($id);
        //dd($data);

        return view('datadokter.formeditdata',compact('data','rumahsakit'));
    }

    public function updatedatadokter(Request $request,$id){
        $data = Dokter::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('editdata')->with('success','Data Berhasil Di Update');
    }

     public function deletedatadokter($id)
    {
        $item = Dokter::where('id', $id)->delete();
            if ($item) {
                return redirect()->back();
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
   }




   
//data diagnosis
    public function diagnosis(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('diagnosis')->where('nama','like', '%'.$query.'%')->get();
            }else{
                $data = DB::table('diagnosis')->orderBy('id','asc')->get();
            }

            $total_row = $data->count();
            $output ='';
            if($total_row > 0){
                $no =1;
                foreach ($data as $row) {
                    $output .='
                        <tr>
                            <td> '.$no++.'</td>
                            <td> '.$row->nama.'</td>
                            <td> '.$row->ditinjau.'</td>
                            <td> <img style="width: 50px;" src="'.asset('resource/imgres/'.$row->foto).'"</td>
        
                            <td>
                                  <a href="/formeditdatadiagnosis/'.$row->id.'" class="btn btn-warning btn-sm">Edit</a>
                                  <a href="/deletedatadiagnosis/'.$row->id.'" class="btn btn-sm btn-danger delete-confirm-diagnosis" >Delete</a>  
                            </td>
                        </tr>
                    ';
                }
            }else{
                $output ='DATA TIDAK DI TEMUKAN';
            }

            $data = array('table_data_diagnosis' => $output);

            echo json_encode($data);

        }
        
    }

    public function formtambahdatadiagnosis(){
        return view('datadiagnosis.formtambahdata');
    }



    public function tambahdatadiagnosis(Request $request){
        $data= new Diagnosis;
        $data->nama = $request->nama;
        $data->deskripsi =$request->deskripsi;
        $data->kontenhtml =$request->kontenhtml;
        $data->ditinjau = $request->ditinjau;
      if($request->hasFile('foto')){
            $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('editdata')->with('success','Data Diagnosis Berhasil Di Tambahkan');
    }


    public function formeditdatadiagnosis($id){
        $data = Diagnosis::find($id);
        //dd($data);

        return view('datadiagnosis.formeditdata',compact('data'));
    }



    public function updatedatadiagnosis(Request $request,$id){
        $data = Diagnosis::find($id);
        $data->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('resource/imgres/',$request->file('foto')->getClientOriginalName());
            $data->foto= $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('editdata')->with('success','Data Berhasil Di Update');
    }

     public function deletedatadiagnosis($id)
    {
        $item = Diagnosis::where('id', $id)->delete();
            if ($item) {
                return redirect()->back();
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
   }



    
//data Artikel
    public function artikel(Request $request){
        if($request->ajax()){
            $query = $request->get('query');
            if($query != ''){
                $data = DB::table('articles')->where('title','like', '%'.$query.'%')->get();
            }else{
                $data = DB::table('articles')->orderBy('id','asc')->get();
            }

            $total_row = $data->count();
            $output ='';
            if($total_row > 0){
                $no =1;
                foreach ($data as $row) {
                    $output .='
                        <tr>
                            <td> '.$no++.'</td>
                            <td> '.$row->title.'</td>
                            <td> '.$row->tag.'</td>
                            <td> '.$row->author.'</td>
                            <td> '.$row->post_date.'</td>
                            <td> <img style="width: 50px;" src="'.asset('resource/imgres/articles/'.$row->image).'"</td>
        
                            <td>
                                  <a href="/formeditdataartikel/'.$row->id.'" class="btn btn-warning btn-sm">Edit</a>
                                  <a href="/deletedataartikel/'.$row->id.'" class="btn btn-sm btn-danger delete-confirm-artikel" >Delete</a>  
                            </td>
                        </tr>
                    ';
                }
            }else{
                $output ='DATA TIDAK DI TEMUKAN';
            }

            $data = array('table_data_artikel' => $output);

            echo json_encode($data);

        }
        
    }

    public function formtambahdataartikel(){
       
        return view('dataartikel.formtambahdata');
    }


     public function tambahdataartikel(Request $request){

        //dd($request->all());
        $day = Carbon::now();
        $data= new Artikel;
        $data->title = $request->title;
        $data->content =$request->content;
        $data->tag =$request->tag;
        $data->author = $request->author;
        $data->post_date = $day->format('Y-m-d');

      if($request->hasFile('image')){
            $request->file('image')->move('resource/imgres/articles/',$request->file('image')->getClientOriginalName());
            $data->image= $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('editdata')->with('success','Data Artikel Berhasil Di Tambahkan');
    }


    public function formeditdataartikel($id){

        $data = Artikel::find($id);
        return view('dataartikel.formeditdata',compact('data'));
    }



    public function updatedataartikel(Request $request,$id){
        
        $data = Artikel::find($id);
        $data->update($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('resource/imgres/articles/',$request->file('image')->getClientOriginalName());
            $data->image= $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('editdata')->with('success','Data Berhasil Di Update');
    }


     public function deletedataartikel($id)
    {
        $item = Artikel::where('id', $id)->delete();
            if ($item) {
                return redirect()->back();
            }else{
                return response()->json([
                    'status' => 'error'
                ]);
            }
   }



   public function formadminlogin(){
       return view('admin.login');
   }

   public function datauser(){
    $datauser=\App\Models\User::all();
    return view('admin.datauser', compact('datauser'));

}
public function datarumahsakit(){
    $datarumahsakit=\App\Models\RumahSakit::all();
    return view('admin.datarumahsakit', compact('datarumahsakit'));

}

}
