<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    //
    function index(Request $request)
    {
        $passdetails = DB::table('pass')
            ->insert([
                'vehicle_type' => $request->vehicle_type,
                'valid_till' => $request->ticket_valid,
                'reason' => $request->reason,
                'vehicle_number' => $request->vehicle_no,
                'ticket_number' => session('logininfo')[0]->id
            ]);
        if ($passdetails == 1) {
            return redirect()->route('pass')->with('message', 'Please Wait till your pass get verified');
        } else {
            return 0;
        }
    }

    function verify(Request $request){
        if (session('logininfo')[0]->type=='authority'){
            $verified=DB::table('pass')
                ->where('ticket_number',$request->id)->get();
            ?>
            <pre>
                <?php
                print_r($verified);
                ?>
            </pre>
<?php
            if($verified[0]->verified==null)
            {
                return view('verify',[
                    'data'=>$verified[0]
                ]);
            }
            else{
                echo "<script>alert('This pass is verified')</script>";
            }
        }
        else{
            echo "<script>alert('Please login with a authorised account.')</script>";
        }
    }
    function verifypass(Request $request){
        $flag = DB::table('pass')
            ->where('pass_id',$request->passid)
            ->update([
                'verified'=>$request->verified,
                'valid_till'=>$request->ticket_valid,
                'issued_by'=>$request->issuedby
            ]);
        if($flag){
            return redirect('verified');
        }
    }
}
