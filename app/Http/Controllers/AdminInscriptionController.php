<?php

namespace App\Http\Controllers;

use App\carrer;
use App\course;
use App\pwcnm_approval;
use App\pwcnm_inscriptionRequest;
use App\pwcnm_registration_process;
use App\pwcnm_second_location;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class AdminInscriptionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {

        $processId = $this->lastProcess();

        $tempPetitions = pwcnm_inscriptionRequest::where('fk_process', '=', $processId)->get();

        $inscriptionApp = array();
        //---------------------------------------------
        
        $inscriptionRej = array();
        //---------------------------------------------
        
        $inscriptionPen = array();
        //----------------------------------------------

        foreach ($tempPetitions as $item) {
            $state = pwcnm_approval::where('fk_inscription', '=', $item->id)->get();
            $state = $state[0]->stade;
            
            if ($state == 2 or $state == 4 or $state == 6 ) {
                $career =  carrer::findOrFail($item->fk_career)->name;
                $item->fk_career = $career;

                $course = course::findOrFail($item->fk_course)->name;
                $item->fk_course = $course;
                
                $location = pwcnm_second_location::findOrFail($item->fk_location)->name;
                $item->fk_location = $location;

                $inscriptionApp = array_add($inscriptionApp, count($inscriptionApp), $item);

            }elseif ($state == 1 or $state == 3 or $state == 5){
                $career =  carrer::findOrFail($item->fk_career)->name;
                $item->fk_career = $career;

                $course = course::findOrFail($item->fk_course)->name;
                $item->fk_course = $course;

                $location = pwcnm_second_location::findOrFail($item->fk_location)->name;
                $item->fk_location = $location;

                $inscriptionRej = array_add($inscriptionRej, count($inscriptionRej), $item);

            }elseif ($state == 0){
                $career =  carrer::findOrFail($item->fk_career)->name;
                $item->fk_career = $career;

                $course = course::findOrFail($item->fk_course)->name;
                $item->fk_course = $course;

                $location = pwcnm_second_location::findOrFail($item->fk_location)->name;
                $item->fk_location = $location;

                $inscriptionPen = array_add($inscriptionPen, count($inscriptionPen), $item);
            }
        }





        return view('inscription.admin.allPetitions', compact('inscriptionApp','inscriptionRej', 'inscriptionPen'));
    }



    public function approveStudent($id) {
        $approval = pwcnm_approval::where('fk_inscription', '=',$id)->get();

        $approval = $approval[0];

        $approval->stade = 4;

        $approval->update();

        return redirect('admin/matricula');

    }




    private function lastProcess()
    {
        $id = pwcnm_registration_process::max('id');

        $id = pwcnm_registration_process::findOrFail($id)->id;

        return $id;
    }

    /**
     * calculates the left days of the inscription process
     * if the process finish return 0 or -1.
     *
     * @param  string $fecha_final
     *
     */
    function dias_restantes($fecha_final)
    {
        $fecha_actual = date("Y-m-d");
        $s = strtotime($fecha_final) - strtotime($fecha_actual);
        $d = intval($s / 86400);
        $diferencia = $d;
        return $diferencia;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        return view('');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        return redirect('/');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
