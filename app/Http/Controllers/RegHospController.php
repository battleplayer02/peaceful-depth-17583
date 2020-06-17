<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegHospController extends Controller
{
    //
    function index(Request $req)
    {
        echo "hello";
        $req->validate([
            "hospname"=>"required",
            "address"=>"required ",
            "city"=>"required",
            "state"=>"required ",
            "pincode"=>"required |min:10 | numeric",
            "corona_treatment"=>"required| in: yes,Yes,No,no"
        ]);
        $res=DB::table('hospital_details')
            ->insert([
                'id'=>0,
                'hosp_name'=>$req->hospname,
                'address'=>$req->address,
                'city'=>$req->city,
                'state'=>$req->state,
                'pincode'=>$req->pincode,
                'corona_treatment'=>$req->corona_treatment
            ]);
        // echo $res;
        if($res==1)
        {
            // echo $res;
            $id = DB::getPdo()->lastInsertId();
            return redirect('/registerdoctor')->with('alert', 'Your hospital id is:'.$id);
        }
        else{
            echo "Not Registered....Try Again!!!";
        }
    }
}
