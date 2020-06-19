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
            ->join("hospital_details","doctor_details.hosp_id","hospital_details.id")
            ->get();
        echo "<pre>";
        print_r($data);
//        return View("doctors",[
//            "data"=>$data
//        ]);
    }
}
