<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pwcnm_inscriptionRequest;
use App\carrer;
use App\course;
use App\pwcnm_requirement;
use App\pwcnm_approval;
use App\pwcnm_second_location;
use  App\pwcnm_registration_process;
use Illuminate\Http\Request;
use Session;

class inscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $process = pwcnm_registration_process::max('id');
        $process = pwcnm_registration_process::findOrFail('' . $process);

        $daysLeft = $this->dias_restantes($process->FinalDate);

        $careers = carrer::all();

        return view('inscription.student.index', compact('careers', 'daysLeft'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function creation($id)
    {
        $temp = course::where('carrer', '=', $id)->get();

        $process = pwcnm_registration_process::all();
        $process = $process->last();
        $pro = $process->id;


        $course = array();


        foreach ($temp as $item) {
            $course = array_add($course, $item->id, $item->initial . ' - ' . $item->name);
        }

        $SLocation = pwcnm_second_location::all();
        $location = array();
        foreach ($SLocation as $item) {
            if ($item->id != 2) {
                $location = array_add($location, $item->id, $item->name);
            }

        }


        return view('inscription.student.create', compact('id', 'course', 'pro', 'location'));
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


        $studentName = $request->studentName;
        $studentId = $request->studentId;
        $phone = $request->phone;
        $email = $request->email;
        $process = $request->process;
        $average = $request->weightedAverage;
        $id = $request->id;
        
       

        if ($request->observation == null) {
            $observation = "";
        } else {
            $observation = $request->observation;
        }


        $courseTable = $request->t1;
        $courses = array();
        $table1Array = explode('?', $courseTable);
        $i = 0;
        foreach ($table1Array as $item) {
            $temp = explode('_', $item);
            $courses = array_add($courses, $i, $temp);
            $i++;
        }

        $requirementsTable = $request->t2;
        $table2Array = explode('?', $requirementsTable);
        $requirements = array();
        $i = 0;
        foreach ($table2Array as $item) {
            $temp = explode('_', $item);
            $requirements = array_add($requirements, $i, $temp);
            $i++;
        }




        $personal = [$studentId,$studentName,$phone,$email,$average];

        $career = carrer::findOrFail($id)->name;

        $inscript = array();

        $i = 0;

        foreach ($courses as $item) {

            $inscription = new pwcnm_inscriptionRequest();

            $inscription->studentId = $studentId;
            $inscription->studentName = $studentName;
            $inscription->phone = $phone;
            $inscription->email = $email;
            $inscription->observations = $observation;
            $inscription->weightedAverage = $average;
            $inscription->fk_process = $process;
            $inscription->fk_career = $id;
            $inscription->fk_location = $item[3];
            $inscription->fk_course = $item[0];
            $inscription->group = $item[2];
            $inscription->timesAttended = $item[1];

            $location =  pwcnm_second_location::findORFail($item[3])->name;
            $course = course::findOrFail($item[0])->name;
            $viewCourses = [$location, $course,$item[2]];

            $inscript = array_add($inscript,$i,$viewCourses);


            $i++;

            $inscription->save();


            $last = pwcnm_inscriptionRequest::max('id');

            $this->addApproval($id,$last);



            if (count($requirements[0]) > 1 ) {

                foreach ($requirements as $item) {
                    $requirement = new pwcnm_requirement();

                    $requirement->course = $item[0];
                    $requirement->grade = $item[1];
                    $requirement->cycle = $item[2];
                    $requirement->fk_inscription = $last;

                    $requirement->save();

                }
            }

        }


        return view('inscription.student.show', compact('career', 'personal','inscript'));
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
        $inscription = pwcnm_inscriptionRequest::findOrFail($id);

        return view('inscription.student.show', compact('$inscription'));
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
     * Start the approvals tables
     * with the default values except the manager id
     * and the id of the inscription.
     *
     * @param  int $id, int last
     *
     *
     */
    function addApproval ($id, $last) {
        $manager =  carrer::findOrFail($id)->manager;
        $comment = "";

        $approval =  new pwcnm_approval();
        $approval->stade = 0;
        $approval->comments = $comment;
        $approval->fk_user = $manager;
        $approval->fk_inscription = $last;

        $approval->save();
    }

    
}
