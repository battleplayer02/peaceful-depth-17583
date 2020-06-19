<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListOfDoctor extends Controller
{
    //
    function index(){
        $data = DB::table("doctor_details")
            ->join("user_details","doctor_details.id","user_details.id")
            ->get();
        $hosp_data = DB::table("hospital_details")
            ->get();
        echo "<pre>";
        print_r($data);
        print_r($hosp_data);
//        return View("doctors",[
//            "data"=>$data
//        ]);
    }
}
