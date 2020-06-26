<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class MedicalController extends Controller
{
    //
   public function retrieve()
   {
       $medical_data=DB::table('medical_stores')
           ->get();
       return View('medical',[
           'mdata'=>$medical_data
       ]);

   }
}
