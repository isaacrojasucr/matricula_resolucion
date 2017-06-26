<?php

namespace App\Http\Controllers;

use App\carrer;
use App\course;
use App\pwcnm_second_location;
use App\pwcnm_registration_process;
use Illuminate\Http\Request;
use PDF;

class reportsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $locations = pwcnm_second_location::all();

        return view('inscription.admin.locationSelect', compact('locations'));

    }

    public function pdf($id)
    {
        $careers = null;
        $central = array();
        if ($id == 1){
            $process = $this->lastProcess();

            $schools = \DB::select('SELECT SUBSTRING(c.initial,1,2) as schools from courses as c
                                INNER JOIN pwcnm_inscription_requests as i on c.id = i.fk_career
                                where i.fk_location = 1 and i.fk_process = ?
                                GROUP BY schools', [$process]);

            if (count($schools) > 0) {

                foreach ($schools as $item) {


                    $petitions = \DB::select('SELECT i.studentId as carne, i.studentName as name, i.weightedAverage as average,
                                    c.name as course, i.group, i.timesAttended as times
                                    FROM pwcnm_inscription_requests as i
                                    INNER JOIN courses as c on c.id = i.fk_course
                                    INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id
                                    where c.initial like ? and i.fk_process = ? and i.fk_location = 1 and a.stade = 4
                                    ORDER by course', ['%' . $item->schools . '%', $process]);

                    $central = array_add($central, count($central), $petitions);


                }

                $careers = $schools;


            }
        }
        else{
            $process = $this->lastProcess();

            $careers = $this->careers($id);

            $central = array();

            if (count($careers) > 0) {

                foreach ($careers as $item) {

                    $petitions = \DB::select('SELECT i.studentId as carne, i.studentName as name, i.weightedAverage as average, 
                                    c.name as course, i.group, i.timesAttended as times 
                                    FROM pwcnm_inscription_requests as i 
                                    INNER JOIN courses as c on c.id = i.fk_course 
                                    INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                                    where i.fk_process = ? and i.fk_location = ? and a.stade = 4 and i.fk_career = ?  
                                    ORDER by course', [$process, $id, $item->career]);

                    $central = array_add($central, count($central), $petitions);

                }

                $temp = $careers;

                $careers = array();


                foreach ($temp as $item) {

                    $careers = array_add($careers, count($careers), carrer::findOrFail($item->career)->name);
                }

            }
        }
        
        $pdf = PDF::loadView('');
    }

    public function location($id)
    {

        $process = $this->lastProcess();

        $careers = $this->careers($id);

        $central = array();

        if (count($careers) > 0) {

            foreach ($careers as $item) {

                $petitions = \DB::select('SELECT i.studentId as carne, i.studentName as name, i.weightedAverage as average, 
                                    c.name as course, i.group, i.timesAttended as times 
                                    FROM pwcnm_inscription_requests as i 
                                    INNER JOIN courses as c on c.id = i.fk_course 
                                    INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                                    where i.fk_process = ? and i.fk_location = ? and a.stade = 4 and i.fk_career = ?  
                                    ORDER by course', [$process, $id, $item->career]);

                $central = array_add($central, count($central), $petitions);

            }

            $temp = $careers;

            $careers = array();


            foreach ($temp as $item) {

                $careers = array_add($careers, count($careers), carrer::findOrFail($item->career)->name);
            }

        }


        return view('inscription.admin.reportPreview', compact('careers', 'central', 'id'));
    }
    
    public function careers($id)
    {
        $careers = \DB::select('SELECT i.fk_career as career from pwcnm_inscription_requests as i
                                where i.fk_location = ?
                                group by career;', [$id]);

        return $careers;
    }

    public function centralLocation()
    {

        $process = $this->lastProcess();

        $schools = \DB::select('SELECT SUBSTRING(c.initial,1,2) as schools from courses as c
                                INNER JOIN pwcnm_inscription_requests as i on c.id = i.fk_career
                                where i.fk_location = 1 and i.fk_process = ?
                                GROUP BY schools', [$process]);


        $careers = null;

        $central = array();

        if (count($schools) > 0) {

            foreach ($schools as $item) {


                $petitions = \DB::select('SELECT i.studentId as carne, i.studentName as name, i.weightedAverage as average,
                                    c.name as course, i.group, i.timesAttended as times
                                    FROM pwcnm_inscription_requests as i
                                    INNER JOIN courses as c on c.id = i.fk_course
                                    INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id
                                    where c.initial like ? and i.fk_process = ? and i.fk_location = 1 and a.stade = 4
                                    ORDER by course', ['%' . $item->schools . '%', $process]);

                $central = array_add($central, count($central), $petitions);


            }

            $careers = $schools;


        }

        $id = 1;

        return view('inscription.admin.reportPreview', compact('central', 'careers', 'id'));
    }

    private function lastProcess()
    {
        $id = pwcnm_registration_process::max('id');

        $id = pwcnm_registration_process::findOrFail($id)->id;

        return $id;
    }
}
