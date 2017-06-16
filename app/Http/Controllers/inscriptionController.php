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

        return view('inscription.student.create', compact('id','course','pro'));
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

        $table = $request->tabla;

        dd($table);


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
