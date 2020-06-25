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
       return View('mywork',[
           'data'=>$event_data
       ]);

   }

   public function getfulldata(Request $request)
   {
       $eid=$request->eid;
       $participants=DB::table('participants')
           ->where('eid',$eid)
           ->get();
       return View('showparticipant',[
           'participants'=>$participants
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

    public function addwork(Request $request)
    {
        $work= DB::table('participants')
            ->where('pid', $request->pid)
            ->where('eid', $request->eid)
            ->update([
                'assigned_work' => $request->participantwork,
                'address' => $request->workaddress,
                ]);
        if($work == 1)
        {
            redirect('events');
        }
    }
}
