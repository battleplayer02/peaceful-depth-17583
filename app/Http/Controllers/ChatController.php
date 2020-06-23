<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    //
    function index(Request $request)
    {
        $data = DB::table('chats')
            ->where([
                "doc_id"=>$request->docid,
                "pat_id"=>session('logininfo')[0]->id
            ])
            ->get();

        $docname = DB::table("doctor_details")
            ->join("user_details", "doctor_details.id", "user_details.id")
            ->where('docid', $request->docid)
            ->get();

        return view('Chat',[
            "previous_chats"=>$data,
            "docname"=>$docname
        ]);
    }
}
