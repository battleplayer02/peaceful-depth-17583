<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListOfDoctor extends Controller
{
    //
    function index()
    {
        $data = DB::table("doctor_details")
            ->join("user_details", "doctor_details.id", "user_details.id")
            ->get();
        echo "<pre>";
        $d = DB::table('hospital_details')
            ->get();
        foreach ($data as $key => $value) {
            if ($key == "hosp_id") {
                echo $value."<br>";
            }
        }
        print_r($data);
        print_r($d);
//        return View("doctors",[
//            "data"=>$data
//        ]);
    }
}
