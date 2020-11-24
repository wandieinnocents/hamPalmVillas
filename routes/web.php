<?php

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

Route::get('/', function () {
    return view('welcome');
});

// villlas page
Route::get('villas','PageController@villasPage');

// singleVilllas
Route::get('villaDetails','PageController@SingleBedroomVillas');
Route::get('villaDetail','PageController@House2Villas');
Route::get('house3Details','PageController@house3Villas');




// amenities page
Route::get('amenities','PageController@ammenitiesPage');

// construction status page
Route::get('construction_status','PageController@constructionStatusPage');

// sales page
Route::get('sales','PageController@salesPage');

// sales page
Route::get('aboutus','PageController@aboutUsPage');




