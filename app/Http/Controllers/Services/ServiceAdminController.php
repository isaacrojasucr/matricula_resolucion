<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Service;

class ServiceAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /* Llama la vista de los Servicios para el administrador */
    public function indexAdmin(Service $service)
    {
        $listService = $service->getListService();

        return view('services.serviceAdmin', compact('listService'));
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

        return redirect('/admin/servicios');
    }

    /* Se llama al modelo y se le evía el ID para ser eliminado en la Base de Datos */
    public function deleteService(Service $service, $id)
    {
        $service->deleteService($id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('admin/servicios');
    }

    /* Returna del modelo un servicio y llama la vista */
    public function editServiceView(Service $service, $id)
    {
        $listService = $service->getService($id);

        return view('services.serviceEdit', compact('listService')); 
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

        return redirect('admin/servicios');
    }
}
