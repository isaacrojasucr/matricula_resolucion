<?php

namespace App\Http\Controllers\Services;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Service;

class ServiceController extends Controller
{

    /* Llama al modelo y recupera los servicios con rol de profesor para mostrarlos en la vista */
    public function indexTeacher(Service $service)
    {
        $rol = "0";
        $listService = $service->getListServiceByRol($rol);

        return view('services.service', compact('listService', 'rol'));
    }

    /* Llama al modelo y recupera los servicios con rol de estudiante para mostrarlos en la vista */
    public function indexStudent(Service $service)
    {
        $rol = "1";
        $listService = $service->getListServiceByRol($rol);

        return view('services.service', compact('listService', 'rol'));
    }
}
