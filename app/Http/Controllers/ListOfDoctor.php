<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListOfDoctor extends Controller
{
    //
    function index(){
        return View("doctors");
    }
}
