<?php

namespace App\Http\Controllers;

use App\pwcnm_approval;
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

        $avaliable = \DB::select('SELECT IF(DATE_ADD(p.FinalDate, INTERVAL 2 DAY)>CURDATE(),1,0) as avaliable  
                                from pwcnm_registration_processes as p 
                                where p.id = ?  ',[$process]);

        $avaliable= $avaliable[0]->avaliable;

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
                $tempApproval =  pwcnm_approval::where('fk_inscription','=',$item->id)->get();
                if ($tempApproval[0]->stade == 0){
                    $petitions = array_add($petitions,$i,$item);
                    $i++;
                }

            }
        }

        $courses = array();

        for ($p = 0; $p < count($petitions); $p++) {
            $temp = course::findOrFail($petitions[$p]->fk_course);
            $courses = array_add($courses, $p, $temp);
        }

        return view('inscription.manager.managerCheck', compact('petitions', 'courses', 'avaliable'));
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


    public function approveStudent($id) {
        $approval = pwcnm_approval::where('fk_inscription', '=',$id)->get();

        $approval = $approval[0];

        $approval->stade = 2;

        $approval->update();

        return redirect('proceso/coordinador');

    }

}
