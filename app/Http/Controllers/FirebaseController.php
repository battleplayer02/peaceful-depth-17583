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
            ->withDatabaseUri("https://messaging-c93b9.firebaseio.com/");
        $database = $factory->createDatabase();
        $reference = $database->getReference('sample');
        $snapshot = $reference->getSnapshot();
        echo $snapshot->getKey() . ":" . $snapshot->getValue();
    }
}
