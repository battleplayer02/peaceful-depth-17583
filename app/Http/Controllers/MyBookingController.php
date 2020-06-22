<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyBookingController extends Controller
{
    public function index()
    {
        $appointment=DB::table('appointments')
            ->where('id',session('logininfo')[0]->id)
            ->get();

        foreach ($appointment as $value) {
            $value->doc_details = DB::table("doctor_details")
                ->join("user_details", "doctor_details.id", "user_details.id")
                ->where('docid', $value->docid)
                ->get();
        }
        return view('MyBookings',[
            "data"=>$appointment
        ]);
    }
}
