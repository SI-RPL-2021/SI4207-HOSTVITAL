<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class login extends Controller
{
    
    public function login(Request $req){
        $login = User::where("email", $req->emailaddress)->first();
        if (Hash::check($req->password, $login->password))
        {
            $req->session()->put('login', $login->username);
            return redirect("/");
        } else {
            $req->session()->put('login', false);
             return 'Password salah';
        }
    }
}
