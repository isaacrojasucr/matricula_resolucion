<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $fileName = '';

        if (!empty($request->file('file'))){
            $fileName = $request->file('file')->store('');
        }

        $service->insertService($request->name, $request->desc, $request->rol, $fileName);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Servicios/Admin');
    }

    /* Se llama al modelo y se le evía el ID para ser eliminado en la Base de Datos */
    public function deleteService(Service $service, $id)
    {
        $service->deleteService($id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Servicios/Admin');
    }

    /* Returna del modelo un servicio y llama la vista */
    public function editServiceView(Service $service, $id)
    {
        $listService = $service->getService($id);

        return view('serviceEdit', compact('listService')); 
    }

    /* Se recibe el servicio actualizado y se redirige a la vista de Servicios/Admin */
    public function editService(Request $request, Service $service, $id)
    {
        $fileName = '';

        if (!empty($request->file('file'))) {
            $fileName = $request->file('file')->store('');
        }

        $service->editService($request->name, $request->desc, $request->rol, $fileName, $id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Servicios/Admin');
    }
}
