<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegUserController extends Controller
{
    //
    function register(Request $req)
    {
        $req->validate([
            "fullname"=>"required",
            "email"=>"required | email",
            "blood_group"=>"required",
            "contact_number"=>"required |min:10 | numeric",
            "gender"=>"required |in:male,female,Male,Female,Other,other",
            "password"=>"required|same:confirm_password|min:6",
            "confirm_password"=>"required|same:password|min:6",
            "user_profile"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:1024"
        ]);

        $guessExtension = $req->file('user_profile')->guessExtension();
        $prof_pic_name=$req->email.'.'.$guessExtension;
        $res=DB::table('user_details')
                ->insert([
                    'name'=>$req->fullname,
                    'gender'=>$req->gender,
                    'email'=>$req->email,
                    'mobile_no'=>$req->contact_number,
                    'blood_group'=>$req->blood_group,
                    'password'=>$req->password,
                    'type'=>'patient',
                    'pic_url'=>'uploads/'.$prof_pic_name
                ]);

        if($res==1)
        {
            $file = $req->file('user_profile')->storeAs('/uploads', $prof_pic_name);
            print_r( $file);
            echo "inserted";
            return redirect("home");
        }
    }
}
