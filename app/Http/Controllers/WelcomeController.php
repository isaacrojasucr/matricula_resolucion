<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;

class WelcomeController extends Controller
{

    public function welcome(Event $event)
    {
        $listEvents = $event->get3ListEvents();
        return view('welcome', compact('listEvents'));
    }

    public function aboutUs(User $user)
    {
    	$listUsers = $user->getListUsers();
    	return view('aboutUs', compact('listUsers'));
    }


    public function downloadFile($file){
        $pathtoFile = storage_path().'\app\\'.$file;
        return response()->download(''.$pathtoFile);
    }
    
}
