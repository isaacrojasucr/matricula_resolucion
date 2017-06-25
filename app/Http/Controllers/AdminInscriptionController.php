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

        $inscriptionApp = \DB::select('SELECT i.id, i.studentId as carne, c.name as career, cc.name as course, i.group, l.name as location, 
                                      i.weightedAverage as average, i.phone, i.email ,a.stade as state from pwcnm_inscription_requests as i 
                                      INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                                      INNER JOIN pwcnm_second_locations as l ON l.id = i.fk_location 
                                      INNER JOIN pwcnm_registration_processes as p ON p.id = i.fk_process 
                                      INNER JOIN carrers as c ON c.id = i.fk_career 
                                      INNER JOIN courses as cc ON cc.id = i.fk_course 
                                      WHERE p.id = ? and (a.stade = 2 or a.stade = 4 or a.stade = 6)
                                      ORDER BY a.stade ASC', [$processId]);
        //---------------------------------------------
        
        $inscriptionRej = \DB::select('SELECT i.id, i.studentId as carne, c.name as career, cc.name as course, i.group, l.name as location, 
                                      i.weightedAverage as average, i.phone, i.email,a.stade as state from pwcnm_inscription_requests as i 
                                      INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                                      INNER JOIN pwcnm_second_locations as l ON l.id = i.fk_location 
                                      INNER JOIN pwcnm_registration_processes as p ON p.id = i.fk_process 
                                      INNER JOIN carrers as c ON c.id = i.fk_career 
                                      INNER JOIN courses as cc ON cc.id = i.fk_course 
                                      WHERE p.id = ? and (a.stade = 1 or a.stade = 3 or a.stade = 5)
                                      ORDER BY a.stade ASC', [$processId]);
        //---------------------------------------------
        
        $inscriptionPen = \DB::select('SELECT i.id, i.studentId as carne, c.name as career, cc.name as course, i.group, l.name as location, 
                                        i.weightedAverage as average, i.phone, i.email, a.stade from pwcnm_inscription_requests as i 
                                        INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                                        INNER JOIN pwcnm_second_locations as l ON l.id = i.fk_location 
                                        INNER JOIN pwcnm_registration_processes as p ON p.id = i.fk_process 
                                        INNER JOIN carrers as c ON c.id = i.fk_career 
                                        INNER JOIN courses as cc ON cc.id = i.fk_course 
                                        WHERE p.id = 1 and (a.stade = 0)', [$processId]);
        //----------------------------------------------

        foreach ($inscriptionApp as $item){
            if($item->state != 6){
                $requirements = \DB::select('select r.course, r.grade, r.cycle 
                                        from pwcnm_requirements as r 
                                        where r.fk_inscription = ?',[$item->id]);
                $item->req = $requirements;

            }

        }






        return view('inscription.admin.allPetitions', compact('inscriptionApp','inscriptionRej', 'inscriptionPen'));
    }

    /**
     * change the state of the inscription in the table of approvals
     *identified by the id od the inscription
     *
     * @param  integer $id
     *
     */
    public function approveStudent($id) {
        $approval = pwcnm_approval::where('fk_inscription', '=',$id)->get();

        $approval = $approval[0];
        if ($approval->stade == 0){
            $approval->stade = 4;
        }elseif ($approval->stade == 2){
            $approval->stade = 4;
        }elseif ($approval->stade == 4){
            $approval->stade = 6;
        }

        

        $approval->update();

        return redirect('admin/matricula');

    }
    
    /**
     * return the id of the actual process.
     *
     */
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
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $petition = pwcnm_inscriptionRequest::findOrFail($id);

        $location = pwcnm_second_location::findOrFail($petition->fk_location)->name;

        $course = course::findOrFail($petition->fk_course)->name;

        $career = carrer::findOrFail($petition->fk_career)->name    ;

        return view('inscription.admin.editPetition', compact('petition', 'location', 'career', 'course'));
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

        $inscription = pwcnm_inscriptionRequest::findOrFail($id);

        $inscription->group = $request->group;
        $inscription->weightedAverage = $request->weightedAverage;

        $inscription->update();

        return redirect('/admin/matricula');
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
