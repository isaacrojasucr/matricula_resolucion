<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class WelcomeController extends Controller
{

    public function welcome(Event $event)
    {
        $listEvents = $event->get3ListEvents();
        return view('welcome', compact('listEvents'));
    }
}
