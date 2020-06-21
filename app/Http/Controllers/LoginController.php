<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input('email');
        $password = $request->input('password');
//        echo $username . $password;

        $checkLogin = DB::table("user_details")
            ->where([
                "email"=>$username,
                "password"=>$password
            ])
            ->get();
//        echo $checkLogin."<br>";
        if (count($checkLogin) > 0) {
            $request->session()->put('logininfo',$checkLogin);
            if ($request->session()->has('logininfo')) {
                return redirect('home');
            }
        } else {
            return redirect('login');
        }
    }
}
