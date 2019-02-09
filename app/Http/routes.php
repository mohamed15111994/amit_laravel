<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web','admin'] ],function (){
    Route::get('/adminpanel','AdminController@index');
    Route::get('/adminpanel/add','AdminController@add');
    Route::get('/adminpanel/store','AdminController@store');
    Route::get('/adminpanel/update','AdminController@update');
    Route::get('/adminpanel/form','AdminController@form');
});
//Route::get('/adminpanel','AdminController@index');
//Route::get('/adminpanel/add','AdminController@add');
//Route::get('/adminpanel/update','AdminController@update');
//Route::get('/adminpanel/form','AdminController@form');