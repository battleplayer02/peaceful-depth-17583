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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/","ChikitsaController@index");
Route::get("/home","ChikitsaController@index");

Route::view("/doctors","doctors");

Route::view("/service","service");
Route::get("/outbreak","OutbreakController@index");

Route::view("/contactus","contactus");

Route::get("test",function (){
    return "test";
});

Route::get("db","SampleController@dbCheck");

Route::post("reghospital","RegHospController@index");
Route::post("regdoctor","RegDocController@index");


Route::view('/registerdoctor',"registerdoctor");
Route::view('/registerhospital', "registerhospital");

Route::view("registeruser","registeruser");
Route::post("reguser","RegUserController@register");
