<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldpetitionsController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('inscription.admin.oldPetitions');
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
        $data = \DB::select('SELECT p.anno,p.period, c.name as course, l.name as location, a.stade as state, a.comments 
                            FROM pwcnm_inscription_requests as i 
                            INNER JOIN pwcnm_registration_processes as p ON p.id = i.fk_process 
                            INNER JOIN pwcnm_approvals as a ON a.fk_inscription = i.id 
                            INNER JOIN pwcnm_second_locations as l ON l.id = i.fk_location 
                            INNER JOIN courses as c ON c.id = i.fk_course 
                            WHERE i.studentId =?',[$request->id]);

        return view('inscription.admin.reviewPetition',compact('data'));
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
