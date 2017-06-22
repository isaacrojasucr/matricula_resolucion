<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;

class CareerController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('home');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Career $career)
    {

        $listCareer = $career->getListCareer();

        return view('career', compact('listCareer'));
    }

    public function indexAdmin(Career $career)
    {

        $listCareer = $career->getListCareer();

        return view('careerAdmin', compact('listCareer'));
    }
}
