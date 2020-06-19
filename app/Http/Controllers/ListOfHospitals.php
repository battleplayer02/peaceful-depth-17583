<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital_detail;
class ListOfHospitals extends Controller
{
    //
    function index(){
        return View("hospitals",[
            "data"=>Hospital_detail::all()
        ]);
    }
}
