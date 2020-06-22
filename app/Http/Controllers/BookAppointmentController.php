<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class BookAppointmentController extends Controller
{
    //


    function bookapp(Request $request)
    {
        $a = DB::table('appointments')
            ->insert([
                "apt_date" => $request->date,
                "docid" => $request->docid,
                "id" => session('logininfo')[0]->id,
                "age" => $request->age,
                "timing" => $request->time,
                "symptoms" => $request->symptoms,
                "temperature" => $request->temperature,
                "medicine" => $request->medicine,
                "previous_disease" => $request->previous,
                "chronic_disease" => $request->chronic,
            ]);
        if ($a == 1) {
            return redirect('MyBookingController');
        }
    }
}
