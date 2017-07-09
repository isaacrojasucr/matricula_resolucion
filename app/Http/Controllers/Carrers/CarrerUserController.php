<?php

namespace App\Http\Controllers\Carrers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\carrer;
use App\User;

class CarrerUserController extends Controller
{   
    public function indexPage(carrer $career)
    {
        $listCareer = $career->getListCareer();

        return view('career', compact('listCareer'));
    }
}
