<?php

namespace App\Http\Controllers;

use App\pwcnm_inscriptionRequest;
use App\pwcnm_registration_process;
use Illuminate\Http\Request;

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

        $tempPetitions = pwcnm_inscriptionRequest::where('fk_process', '=', $processId);



        
        return view('inscription.admin.allPetitions');
    }

    private function approvals ($tempPetitions) {

        $petitions =  array();

        foreach ($tempPetitions as $item){
            $state 
        }


    }
    
    private function lastProcess(){
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
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  int  $id
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
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        return redirect('/');
    }
}
