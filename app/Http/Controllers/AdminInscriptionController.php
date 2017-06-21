<?php

namespace App\Http\Controllers;

use App\course;
use App\pwcnm_approval;
use App\pwcnm_inscriptionRequest;
use App\pwcnm_registration_process;
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

        $appro = array();
        $inscriptionApp = array();
        $careerApp = array();
        $courseApp = array();
        $locationApp = array();
        $appro = array_add($appro,0,$inscriptionApp);
        $appro = array_add($appro,1,$careerApp);
        $appro = array_add($appro,2,$courseApp);
        $appro = array_add($appro,3,$locationApp);
        //---------------------------------------------
        $reject = array();
        $inscriptionRej = array();
        $careerRej = array();
        $courseRej = array();
        $locationRej = array();
        $reject = array_add($reject,0,$inscriptionRej);
        $reject = array_add($reject,1,$careerRej);
        $reject = array_add($reject,2,$courseRej);
        $reject = array_add($reject,3,$locationRej);
        //---------------------------------------------
        $pending = array();
        $inscriptionPen = array();
        $careerPen = array();
        $coursePen = array();
        $locationPen = array();
        $pending = array_add($pending,0,$inscriptionPen);
        $pending = array_add($pending,1,$careerPen);
        $pending = array_add($pending,2,$coursePen);
        $pending = array_add($pending,3,$locationPen);
        //----------------------------------------------

        foreach ($tempPetitions as $item) {
            $state = pwcnm_approval::where('fk_inscription', '=', $item->id)->get();
            $state = $state[0]->stade;
            

            if ($state == 2 and $state == 4 and $state == 6 ) {

                $inscriptionApp = array_add($inscriptionApp, count($inscriptionApp), $item);


            }elseif ($state == 1 and $state == 3 and $state == 5){

                $inscriptionRej = array_add($inscriptionRej, count($inscriptionRej), $item);

            }elseif ($state == 0){
                $inscriptionPen = array_add($inscriptionPen, count($inscriptionPen), $item);
            }
        }


        return view('inscription.admin.allPetitions');
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
}
