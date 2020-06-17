<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegDocController extends Controller
{
    //
    function index(Request $req)
    {
        echo "hello";
        $req->validate([
            "fullname"=>"required",
            "email"=>"required | email",
            "blood_group"=>"required",
            "contact_number"=>"required |min:10 | numeric",
            "gender"=>"required |in:male,female,Male,Female,Other,other",
            "password"=>"required|same:confirm_password|min:6",
            "confirm_password"=>"required|same:password|min:6",
            "department"=>"required",
            "experience"=>"required",
            "specialization"=>"required",
            "hosp_id"=>"required | numeric",
            "qualification"=>"required"
        ]);

        $hid=DB::table('hospital_details')
            ->select('hospid')
            ->where("hospid",$req->hosp_id)
            ->first();
        if($hid==null)
        {
            return redirect('/registerhospital');
        }
        else
        {
            $res=DB::table('user_details')
                ->insert([
                    'name'=>$req->fullname,
                    'gender'=>$req->gender,
                    'email'=>$req->email,
                    'mobile_no'=>$req->contact_number,
                    'blood_group'=>$req->blood_group,
                    'password'=>$req->password,
                    'type'=>'doctor'
                ]);

            if($res==1)
            {
                $id=DB::table('user_details')
                    ->select('id')
                    ->where("email",$req->email)
                    ->first();


                DB::table('doctor_details')
                    ->insert([
                        'id'=>$id->id,
                        'specialization'=>$req->specialization,
                        'hosp_id'=>$req->hosp_id,
                        'qualification'=>$req->qualification,
                        'experience'=>$req->experience,
                        'department'=>$req->department,
                    ]);

            }
            else
            {
                echo "Cannot Register now!!! Try Again...";
            }
        }
    }
}
