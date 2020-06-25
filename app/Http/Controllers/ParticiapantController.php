<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class ParticiapantController extends Controller
{
    //
    public function retrieve()
    {
        $event_data=DB::table('participants')
            ->join('events','participants.eid','events.eid')
            ->where('participants.id',session('logininfo')[0]->id)
            ->get();
        return View('participate',[
            'data'=>$event_data
        ]);

    }


}
