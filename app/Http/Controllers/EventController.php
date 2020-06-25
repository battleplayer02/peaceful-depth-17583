<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class EventController extends Controller
{
    //
   public function retrieve()
   {
       $event_data=DB::table('events')
           ->where('id',session('logininfo')[0]->id)
           ->get();
       return View('createevent',[
           'data'=>$event_data
       ]);

   }

    public function insert(Request $request)
    {
           $a= DB::table('events')
                ->insert([
                   'ename'=>$request->eventname,
                    'eabout'=>$request->eventdescription,
                    'eaddress'=>$request->eventaddress,
                    'owner_name'=>$request->organizer,
                    'mobile'=>$request->organizercontact,
                    'edate'=>$request->eventdate,
                    'id'=>session('logininfo')[0]->id
                ]);
           return $a;
    }
}
