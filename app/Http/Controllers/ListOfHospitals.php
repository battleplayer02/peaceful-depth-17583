<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListOfHospitals extends Controller
{
    //
    function index(){
        return View("hospitals");
    }
}
