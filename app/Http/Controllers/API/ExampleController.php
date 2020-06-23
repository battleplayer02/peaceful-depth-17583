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
        $a = DB::table('chat')
            ->insert([
                'doc_id' => $request->docid,
                'pat_id' => session('logininfo')[0]->id,
                'message' => $request->message,
                'kaun_bheja' => $request->kaunbheja
            ]);

        echo $a;
    }
}
