<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index()
    {

        $factory = (new Factory)->withServiceAccount(__DIR__.'AuthKey.json')->createDatabase();
        $firebasedatabase = $factory->getReference("sample");
        echo $firebasedatabase->getKey().":".$firebasedatabase->getValue();
    }
}
