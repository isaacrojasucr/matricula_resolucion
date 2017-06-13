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





Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/inicio', 'HomeController@index')->name('home');

    Route::resource('admin/carreras', 'Carrers\\carrerController');

    Route::resource('admin/cursos', 'Courses\\courseController');

    Route::resource('users/user', 'UserController');
    
    Route::get('/download/{file}' , 'Courses\\courseController@downloadFile');

    Route::resource('registrationProcess/pwcnm_registration_process', 'RegistrationProcesses\\pwcnm_registration_processController');
});

