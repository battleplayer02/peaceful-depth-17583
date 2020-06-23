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
        foreach ($data as $value) {
            $value->doctorname = DB::table("doctor_details")
                ->join("user_details", "doctor_details.id", "user_details.id")
                ->where('docid', $value->docid)
                ->get();
        }

        return view('Chat', [
            "data" => $data
        ]);
    }

    public function inputChat(Request $request)
    {
        $a = DB::table('chat')
            ->insert([
                'doc_id' => $request->docid,
                'pat_id' => session('logininfo')[0]->id,
                'message' => $request->message,
                'kaun_bheja' => $request->kaunbheja
            ]);

        echo $a;
    }

    public function example()
    {
        echo "chal raha hai ";
    }
}
