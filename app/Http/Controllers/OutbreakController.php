<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OutbreakController extends Controller
{
    //
    function index()
    {
        $http = Http::get("https://api.covid19api.com/total/country/india")->json();

        return view("outbreak",[
            'data'=>$http
        ]);
    }
}
