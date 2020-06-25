<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class ParticipantController extends Controller
{
    //
    public function insert(Request $request)
    {
//           $a= DB::table('participants')
//                ->insert([
//                    'id'=>session('logininfo')[0]->id,
//                    'eid'=>$request->,
//                   'pname'=>$request->participantname,
//                    'pmobile'=>$request->participantcontact,
//                    'assigned_work'=>$request->assignedwork,
//                    'address'=>$request->participantaddress,
//                ]);
//           return $a;
    }
}
