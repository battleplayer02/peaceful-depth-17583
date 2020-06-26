<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "ChikitsaController@index");
Route::get("/home", "ChikitsaController@index");


Route::view("/service", "service");
Route::get("/outbreak", "OutbreakController@index");

Route::get("/doctors", "ListOfDoctor@index");
Route::get("/hospitals", "ListOfHospitals@index");

Route::view("/contactus", "contactus");

Route::get("/db", "SampleController@dbCheck");

Route::post("/reghospital", "RegHospController@index");
Route::post("/regdoctor", "RegDocController@index");


Route::view('/registerdoctor', "registerdoctor");
Route::view('/registerhospital', "registerhospital");

Route::view("/registeruser", "registeruser");
Route::post("/reguser", "RegUserController@register");

Route::get("/bookappointment", function () {
    return view('book', [
        "docid" => request()->get('docid')
    ]);
});

Route::post("/bookapp", "BookAppointmentController@bookapp");

Route::view("/login", "login");
Route::post("/LoginSubmit", "LoginController@index");

Route::view("/govserv", "govserv");

Route::view("/products", "GovtSer");

Route::view("/book", "book");

Route::get("/logout", "LogoutController@index");

Route::view("/profile", "profile");

Route::view("/labdownload", "labdownload");

Route::view("/labupload", "labupload");

Route::view("/mywork", "mywork");

Route::view("/participate", "participate");

Route::get('/firebase', "FirebaseController@index");

Route::get("MyBookingController", "MyBookingController@index");

Route::get('/chat/{docid}', 'ChatController@index');

Route::view('/createevent','createevent');
Route::get('geteid','EventController@getfulldata');
Route::view('showparticipant','showparticipant');

Route::get('events','EventController@retrieve');

Route::post('eventcontroller','EventController@insert');

Route::view('addparticipants','addparticipants');

Route::post('addpp','AddParticipants@insert');

Route::get('assignwork',function () {
    return view('assignwork', [
        "pid" => request()->get('pid'),
        "eid" => request()->get('eid')
    ]);
});
Route::post('/addwork','EventController@addwork');

Route::get("/participates", "ParticiapantController@retrieve");

Route::get("searchevents","SearchEventController@retrieve");
Route::get('eventparticipate','SearchEventController@insert');

Route::view('request','requesttravel');

Route::post('requestcont','TravelController@index');

Route::view('pass','pass');

