<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pwcnm_registration_process;
use App\pwcnm_inscriptionRequest;
use App\course;
use App\carrer;




class managerCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $process = pwcnm_registration_process::all();
        $process = $process->last();
        $process = $process->id;

        $requested = pwcnm_inscriptionRequest::where('fk_process', '=', $process)->get();
        $manager = app()->make('auth');
        $manager = $manager->user()->id;

        $career = carrer::where('manager','=',$manager)->get();

        foreach ($career as $item) {
            $career = $item->id;
        }

        $petitions = array();
        $i = 0;
        foreach ($requested as $item) {
            if ($item->fk_career == $career) {
                $petitions = array_add($petitions,$i,$item);
                $i++;
            }
        }

        $courses = array();

        for ($p = 0; $p < count($petitions); $p++) {
            $temp = course::findOrFail($petitions[$p]->fk_course);
            $courses = array_add($courses, $p, $temp);
        }

        return view('inscription.manager.managerCheck', compact('petitions', 'courses'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
