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
        return view('MyBookings',[
            "data"=>$appointment
        ]);
    }
}
