<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req){
        $login = User::where("email", $req->emailaddress)->first();
        if (Hash::check($req->password, $login->password))
        {
            $req->session()->put('login', $login->username);
            $req->session()->put('id', $login->id);
            return redirect("/");
        } else {
            $req->session()->put('login', false);
             return 'Password salah';
        }
    }

    public function register(Request $req){
        $user = new User();
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->username = $req->username;
        $user->email  = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return redirect("login");
    }

    public function editprofile($id)
    {
    $data = DB::select("SELECT * FROM users WHERE id = $id");
    return view('function.editprofile',["data"=>$data]);
    }

    public function detaileditprofile($id)
    {
        $data = DB::select("SELECT * FROM users WHERE id = $id");
        return view('function.detaileditprofile',["data"=>$data]);
    }
    public function saveeditprofile(Request $req)
    {
        if ($req->password ==$req->confirmationpassword) {
            User::where('id', $req->id)
            ->update([
                'firstname' => $req->firstname,
                'lastname'=> $req->lastname,
                'username' => $req->username,
                'email'=> $req->email,
                'password'=>bcrypt($req->password),
                ]);
                return redirect ('/editprofile/'.$req->id);
        }else{
        }
}   
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
