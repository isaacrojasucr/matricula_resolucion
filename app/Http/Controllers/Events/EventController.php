<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
    /* Llama al modelo y recupera los eventos con rol de profesor para mostrarlos en la vista */
    public function indexTeacher(Event $event)
    {
        $rol = "0";
        $listEvents = $event->getListEventByRol($rol);

        return view('events.event', compact('listEvents', 'rol'));
    }

    /* Llama al modelo y recupera los eventos con rol de estudiante para mostrarlos en la vista */
    public function indexStudent(Event $event)
    {
        $rol = "1";
        $listEvents = $event->getListEventByRol($rol);

        return view('events.event', compact('listEvents', 'rol'));
    }
}
