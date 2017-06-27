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

    Route::get('/Acerca', function () {
        return view('aboutUs');
    });

    Route::get('/matricula/reporte', function(){
        return view('inscription.student.show');
    });

    Auth::routes();

    Route::get('/inicio', 'HomeController@index')->name('home');

    Route::get('/Carreras', 'Carrers\\carrerController@indexPage');

    Route::get('/Secciones', 'SectionController@index');

    Route::get('/CarrerasAdmin', 'CareerController@indexAdmin');

    Route::get('/SeccionesAdmin', 'SectionController@indexAdmin');

    Route::get('/ServiciosAdmin', 'ServiceController@indexAdmin');

    Route::post('send', 'emailController@send');

    Route::resource('correos', 'emailController');

    Route::resource('matricula','inscriptionController');

    Route::get('/Servicios/Profesores', 'ServiceController@indexTeacher');

    Route::get('/Servicios/Estudiantes', 'ServiceController@indexStudent');

    Route::get('/SeccionesAdmin/Agregar', 'SectionController@addSection');

    Route::get('/ServiciosAdmin/Agregar', 'ServiceController@addService');

    Route::get('SeccionesAdmin/Eliminar/{id}', 'SectionController@deleteSection');

    Route::get('SeccionesAdmin/Editar/{id}', 'SectionController@editSectionView');

    Route::get('SeccionesAdmin/Editar/{id}/Edit', 'SectionController@editSection');

    Route::get('correo/correo', 'emailController@email');

    Route::resource('admin/usuarios', 'UserController');

    Route::resource('admin/carreras', 'Carrers\\carrerController');

    Route::resource('admin/cursos', 'Courses\\courseController');

    Route::resource('proceso/coordinador','managerCheckController');

    Route::resource('admin/matricula', 'AdminInscriptionController');
    
    Route::resource('admin/reportes', 'reportsController');

    Route::resource('admin/antiguas', 'OldpetitionsController');

    Route::resource('consulta/estudiante', 'studentRequestController');

    Route::resource('admin/procesos', 'RegistrationProcesses\\pwcnm_registration_processController');

    Route::resource('admin/sedes', 'SecondLocations\\pwcnm_second_locationController');

    Route::get('reportes/facio', 'reportsController@centralLocation');
    
    Route::get('pdf/sedes/{id}', 'reportsController@pdf');

    Route::get('/download/{file}' , 'Courses\\courseController@downloadFile');

    Route::get('matricula/carrera/{id}' , 'inscriptionController@creation');

    Route::get('admin/reportes/sede/{id}', 'reportsController@location');

    Route::get('admin/reportes/sede/{id}', 'reportsController@location');

    Route::get('matricula/reporte/estudiante','inscriptionController@pdf');

    Route::get('general/correos/{email}','emailController@opening');

    Route::post('consultas/pregunta',['as'=>'consultas/pregunta', 'uses'=>'studentRequestController@consult']);

    Route::get('admin/matricula/aceptar/{id}','AdminInscriptionController@approveStudent');

    Route::get('proceso/coordinador/aceptar/{id}','managerCheckController@approveStudent');

    Route::post('matricula/save',['as'=>'matricula/save', 'uses'=>'inscriptionController@store']);


});