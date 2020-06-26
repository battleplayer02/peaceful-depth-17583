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
            return function () {

                echo
                "<script>
                alert('Get Your Pass Verified');
              </script>";

                return view('pass');
            };
        } else {
            return 0;
        }
    }
}
