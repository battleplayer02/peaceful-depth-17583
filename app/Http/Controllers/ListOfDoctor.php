<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital_detail;
class ListOfDoctor extends Controller
{
    //
    function index(){
        return View("doctors",[
            "data"=>Hospital_detail::all()
        ]);
    }
}
