<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassController extends Controller
{
    //
    function index()
    {
        $data = DB::table('pass')
            ->where('ticket_number',session('logininfo')[0]->id)
            ->get();
        return view('pass',[
            'data'=>$data
        ]);
    }
}
