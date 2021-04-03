<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class register extends Controller
{
    //
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
}
