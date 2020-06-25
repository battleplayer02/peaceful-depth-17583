<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class SearchEventController extends Controller

{
    //
    public function retrieve()
    {
        $event_data=DB::table('events')
            ->where('id','!=',session('logininfo')[0]->id)
            ->get();
        return View('newevent',[
            'data'=>$event_data
        ]);

    }
    public function insert(Request $request)
    {
        $participant_data=DB::table('participants')
            ->insert([
                'id'=>session('logininfo')[0]->id,
                'eid'=>$request->eid,
                'pname'=>session('logininfo')[0]->name,
                'pmobile'=>session('logininfo')[0]->mobile_no
            ]);

        if($participant_data==1)
        {
            echo "<script>alert('You have participated successfully.')</script>";
            return redirect('participates');
        }
        else{
            echo "<script>alert('You have participated unsuccessfully!!Please Retry')</script>";
        }

    }


}
