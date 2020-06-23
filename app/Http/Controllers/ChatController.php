<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    function index()
    {
        $data = DB::table('appointments')
            ->where('id', session('logininfo')[0]->id)
            ->get();
        foreach ($data as $value)
        {
            $value->doctorname=DB::table("doctor_details")
                ->join("user_details", "doctor_details.id", "user_details.id")
                ->where('docid', $value->docid)
                ->get();
        }
        return view('Chat',[
            "data"=>$data
        ]);
    }
}
