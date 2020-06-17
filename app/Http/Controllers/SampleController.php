<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SampleController extends Controller
{
    //
    function dbCheck(){
        $users = DB::select('select * from user_details');
        echo "<pre>";
        return $users;
    }
}
