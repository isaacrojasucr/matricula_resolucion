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



    Route::get('lang/es', function () {
        return \Redirect::back();
    });

    Route::get('lang/en', function () {

        return \Redirect::back();
    });



    Route::get('/', function () {
        return view('welcome');
    });


