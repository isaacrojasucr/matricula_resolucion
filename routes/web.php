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

    Route::resource('admin/usuarios', 'UserController');
    
    Route::get('/download/{file}' , 'Courses\\courseController@downloadFile');

    Route::resource('admin/procesos', 'RegistrationProcesses\\pwcnm_registration_processController');

    Route::resource('admin/sedes', 'SecondLocations\\pwcnm_second_locationController');

    Route::resource('matricula','inscriptionController');

    Route::get('matricula/carrera/{id}' , 'inscriptionController@creation');

    Route::resource('proceso/coordinador','managerCheckController');

    Route::get('general/correos/{email}','emailController@opening');

    Route::resource('correos', 'emailController');

    Route::post('send', 'emailController@send');

    Route::get('correo/correo', 'emailController@email');
    
    Route::resource('admin/matricula', 'AdminInscriptionController');

});