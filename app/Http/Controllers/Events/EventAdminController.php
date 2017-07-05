<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function validation (){
        $manager = app()->make('auth');
        $role = $manager->user()->role;

        if ($role == 2){
            abort(403);
        }
    }
    
    /* Llama la vista de los Eventos para el administrador */
    public function indexAdmin(Event $event)
    {
        $this->validation();
        
        $listEvents = $event->getListEvents();

        return view('events.eventAdmin', compact('listEvents'));
    }

    /* Se agrega un evento nuevo, se guarda el archivo en el servidor y se redirige a la vista de EventosAdmin */
    public function addEvent(Request $request, Event $event)
    {
        $this->validation();
        $event->insertEvent($request->name, $request->desc, $request->rol, $request->start_date, $request->end_date);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('admin/eventos');
    }

    /* Se llama al modelo y se le evía el ID para ser eliminado en la Base de Datos */
    public function deleteEvent(Event $event, $id)
    {
        $this->validation();
        $event->deleteEvent($id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('admin/eventos');
    }

    /* Returna del modelo un evento y llama la vista */
    public function editEventView(Event $event, $id)
    {
        $this->validation();
        $listEvents = $event->getEvent($id);

        return view('events.eventEdit', compact('listEvents')); 
    }

    /* Se recibe el evento actualizado y se redirige a la vista de Eventos/Admin */
    public function editEvent(Request $request, Event $event, $id)
    {
        $this->validation();
        
        $event->editEvent($request->name, $request->desc, $request->rol, $request->start_date, $request->end_date, $id);

        session()->flash('message', 'Realizado correctamente!');

        return redirect('admin/eventos');
    }


}
