<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital_detail;
use Illuminate\Support\Facades\Facade\DB;
class ListOfHospitals extends Controller
{
    //
    function index(){
        $data = Hospital_detail::paginate(3);
        return View("hospitals",[
            "data"=>$data
        ]);
    }
}
