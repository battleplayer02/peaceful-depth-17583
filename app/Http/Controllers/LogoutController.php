<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    function index()
    {
        session()->forget('logininfo');
        return redirect("home");
    }
}
