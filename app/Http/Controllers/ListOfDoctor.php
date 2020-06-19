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
        foreach ($data as $key => $value) {
            if ($key == "hosp_id") {
                $data["hospital_details"] =
                    DB::table('hospital_details')
                        ->where('hospid', $value)
                        ->get();

            }
        }
        print_r($data);
//        return View("doctors",[
//            "data"=>$data
//        ]);
    }
}
