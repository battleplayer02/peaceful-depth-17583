<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use function Symfony\Component\String\s;

class BookAppointmentController extends Controller
{
    //
    function index($docid)
    {
        return View("book", ["book" => $docid]);
    }

    function bookapp()
    {

    }
}
