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

Route::get("/bookappointment/{a}", "BookAppointmentController@index");

Route::post("/bookApp", 'BookAppointmentController@bookapp');

Route::view("/login", "login");
Route::post("/LoginSubmit", "LoginController@index");

Route::view("/govser", "govser");

Route::view("/products", "GovtSer");

Route::view("/book", "book");

Route::get("/logout", "LogoutController@index");

Route::view("/profile", "profile");
Route::view("/labdownload", "labdownload");
Route::view("/labupload", "labupload");
Route::view("/mywork", "mywork");
Route::view("/participate", "participate");
