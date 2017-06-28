<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    /* Llama la vista de los Eventos para el administrador */
    public function indexAdmin(Event $event)
    {
        $listEvents = $event->getListEvents();

        return view('eventAdmin', compact('listEvents'));
    }

    /* Llama al modelo y recupera los eventos con rol de profesor para mostrarlos en la vista */
    public function indexTeacher(Event $event)
    {
        $rol = "0";
        $listEvents = $event->getListEventByRol($rol);

        return view('event', compact('listEvents', 'rol'));
    }

    /* Llama al modelo y recupera los eventos con rol de estudiante para mostrarlos en la vista */
    public function indexStudent(Event $event)
    {
        $rol = "1";
        $listEvents = $event->getListEventByRol($rol);

        return view('event', compact('listEvents', 'rol'));
    }

    /* Se agrega un evento nuevo, se guarda el archivo en el servidor y se redirige a la vista de EventosAdmin */
    public function addEvent(Request $request, Event $event)
    {
        $event->insertEvent($request->name, $request->desc, $request->rol, $request->start_date, $request->end_date);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Eventos/Admin');
    }

    /* Se llama al modelo y se le evía el ID para ser eliminado en la Base de Datos */
    public function deleteEvent(Event $event, $id)
    {
        $event->deleteEvent($id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Eventos/Admin');
    }

    /* Returna del modelo un evento y llama la vista */
    public function editEventView(Event $event, $id)
    {
        $listEvents = $event->getEvent($id);

        return view('eventEdit', compact('listEvents')); 
    }

    /* Se recibe el evento actualizado y se redirige a la vista de Eventos/Admin */
    public function editEvent(Request $request, Event $event, $id)
    {
        $event->editEvent($request->name, $request->desc, $request->rol, $request->start_date, $request->end_date, $id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('Eventos/Admin');
    }


}
