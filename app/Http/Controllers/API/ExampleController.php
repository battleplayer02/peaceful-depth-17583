<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends Controller
{
    //
    public function inputChat(Request $request)
    {
        $a = DB::table('chats')
            ->insert([
                'doc_id' => $request->docid,
                'pat_id' => $request->pat_id,
                'message' => $request->message,
                'kaun_bheja' => $request->kaunbheja,
                'date_and_time'=>date("Y-m-d h:i:sa")
            ]);
        return $a;
    }
}
