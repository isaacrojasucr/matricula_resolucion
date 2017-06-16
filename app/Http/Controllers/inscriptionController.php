<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pwcnm_inscriptionRequest;
use App\carrer;
use App\course;
use App\pwcnm_requirement;
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

        $careers = carrer::all();

        return view('inscription.student.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function creation($id)
    {
        $temp = course::where('carrer','=',$id)->get();

        $process = pwcnm_registration_process::all();
        $process = $process->last();
        $pro = $process->id;


        $course = array();


        foreach ($temp as $item){
            $course =  array_add($course, $item->id, $item->initial.' - '.$item->name);
        }
        
        $SLocation = pwcnm_second_location::all();
        $location =  array();
        foreach ($SLocation as $item){
            if($item->id != 2){
                $location = array_add($location,$item->id, $item->name);
            }

        }
        
        
        return view('inscription.student.create', compact('id','course','pro', 'location'));
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
        $studentName  = $request->studentName;
        $studentId = $request->studentId;
        $phone = $request->phone;
        $email = $request->email;
        $process = $request->process;
        $average = $request->weightedAverage;
        $id = $request->id;
        
        if($request->observation == null){
            $observation = "";
        }else{
            $observation = $request->observation;
        }

        
        dd($observation);

        $courseTable = $request->t1;
        $courses = array();
        $table1Array= explode('?', $courseTable);
        $i = 0;
        foreach ($table1Array as $item){
            $temp = explode('_', $item);
            $courses = array_add($courses,$i,$temp);
            $i++;
        }

        

        $inscription = new pwcnm_inscriptionRequest();
        
        $inscription->studentId = $studentId;
        $inscription->studentName = $studentName;
        $inscription->phone = $phone;
        $inscription->email = $email;
        $inscription->observations = $observation;
        $inscription->weightedAverage = $average;
        $inscription->fk_process = $process;
        $inscription->fk_career = $id;

        foreach ($courses as $item){
            
        }

        $requirementsTable = $request->t2;
        $table2Array= explode('?', $requirementsTable);
        $requirements =  array();
        $i = 0;
        foreach ($table2Array as $item){
            $temp = explode('_', $item);
            $requirements = array_add($requirements,$i,$temp);
            $i++;
        }
        
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
        $inscription = pwcnm_inscriptionRequest::findOrFail($id);

        return view('inscription.student.show', compact('$inscription'));
    }


}
