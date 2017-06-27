<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{

    /* Llama la vista de los Servicios para el administrador */
    public function indexAdmin(Service $service)
    {

        $listService = $service->getListService();

        return view('serviceAdmin', compact('listService'));
    }

    /* Llama al modelo y recupera los servicios con rol de profesor para mostrarlos en la vista */
    public function indexTeacher(Service $service)
    {
        $rol = "0";
        $listService = $service->getListServiceByRol($rol);

        return view('service', compact('listService', 'rol'));
    }

    /* Llama al modelo y recupera los servicios con rol de estudiante para mostrarlos en la vista */
    public function indexStudent(Service $service)
    {
        $rol = "1";
        $listService = $service->getListServiceByRol($rol);

        return view('service', compact('listService', 'rol'));
    }

    /* Se agrega un servicio nuevo, se guarda el archivo en el servidor y se redirige a la vista de ServiciosAdmin */
    public function addService(Request $request, Service $service)
    {
        $service->insertService($request->name, $request->desc, $request->rol, $request->file);

        //agregar al servidor el archivo..

        return redirect('ServiciosAdmin');
    }

    /* Se llama al modelo y se le evía el ID para ser eliminado en la Base de Datos */
    public function deleteService(Service $service, $id)
    {
        $service->deleteService($id);
        return redirect('ServiciosAdmin');
    }


/*
    public function editSectionView(Section $section, User $user, $id)
    {
        $listSection = $section->getSection($id);
        $listUser = $user->getUsersIDName();

        return view('sectionEdit', compact('listSection', 'listUser')); 
    }

    public function editSection(Request $request, Section $section, $id)
    {
        $section->editSection($request->name, $request->inCharge, $id);

        return redirect('SeccionesAdmin');
    }*/
}
