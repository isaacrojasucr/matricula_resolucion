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
    Route::get('/', 'WelcomeController@welcome');

    Route::get('/home', function(){
        return redirect('/inicio');
    });

    Route::get('/acerca', function () {
        return view('aboutUs');
    });

    Route::get('/matricula/reporte', function(){
        return view('inscription.student.show');
    });

    Auth::routes();

    Route::get('/inicio', 'HomeController@index')->name('home');

    Route::get('/Carreras', 'Carrers\\carrerController@indexPage');

    Route::get('/secciones', 'Sections\\SectionController@index');

    Route::get('/CarrerasAdmin', 'CareerController@indexAdmin');

    Route::get('/admin/secciones', 'Sections\\SectionAdminController@indexAdmin');

    Route::get('/Servicios/Admin', 'ServiceController@indexAdmin');

    Route::get('/admin/eventos', 'Events\\EventAdminController@indexAdmin');

    /* Cambiar esta madre*/
    Route::get('/Test', function () {
        return view('test');
    });

    Route::post('send', 'emailController@send');

    Route::resource('correos', 'emailController');

    Route::resource('matricula','inscriptionController');

    Route::get('/Servicios/Profesores', 'ServiceController@indexTeacher');

    Route::get('/Servicios/Estudiantes', 'ServiceController@indexStudent');

    Route::get('/eventos/profesores', 'Events\\EventController@indexTeacher');

    Route::get('/eventos/estudiantes', 'Events\\EventController@indexStudent');

    Route::get('/admin/secciones/agregar', 'Sections\\SectionAdminController@addSection');

    Route::post('/Servicios/Admin/Agregar', 'ServiceController@addService');

    Route::post('/admin/eventos/agregar', 'Events\\EventAdminController@addEvent');

    Route::get('admin/secciones/eliminar/{id}', 'Sections\\SectionAdminController@deleteSection');

    Route::get('Servicios/Admin/Eliminar/{id}', 'ServiceController@deleteService');

    Route::get('/admin/eventos/eliminar/{id}', 'Events\\EventAdminController@deleteEvent');

    Route::get('admin/secciones/editar/{id}', 'Sections\\SectionAdminController@editSectionView');

    Route::get('admin/secciones/editar/{id}/edit', 'Sections\\SectionAdminController@editSection');

    Route::get('Servicios/Admin/Editar/{id}', 'ServiceController@editServiceView');

    Route::put('Servicios/Admin/Editar/{id}/Edit', 'ServiceController@editService');

    Route::get('/admin/eventos/editar/{id}', 'Events\\EventAdminController@editEventView');

    Route::put('/admin/eventos/editar/{id}/edit', 'Events\\EventAdminController@editEvent');

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