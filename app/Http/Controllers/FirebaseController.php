<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index()
    {
        $factory = (new Factory)->withServiceAccount('/AuthKey.json');
    }
}
