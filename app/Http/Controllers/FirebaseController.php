<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function index()
    {
        $factory = (new Factory())
            ->createDatabase();
        $database = $factory->createDatabase();
        $reference = $database->getReference('sample');
        $snapshot = $reference->getSnapshot();
        echo $snapshot->getKey() . ":" . $snapshot->getValue();
    }
}
