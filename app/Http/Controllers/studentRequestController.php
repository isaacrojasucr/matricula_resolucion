<?php

namespace App\Http\Controllers;

use App\pwcnm_approval;
use App\pwcnm_registration_process;
use Illuminate\Http\Request;

class studentRequestController extends Controller
{
    public function index(Request $request)
    {
        $answer = null;
        return view('externalRequest.studentRequest', compact('answer'));
    }


    public function consult(Request $request)
    {

        $max = pwcnm_registration_process::max('id');
        $answer = $temp = \DB::select('SELECT i.studentId, c.name as course, i.group, l.name as location, a.stade 
                                      from pwcnm_inscription_requests as i INNER JOIN pwcnm_approvals as a 
                                      on i.id = a.fk_inscription INNER JOIN courses as c on c.id = i.fk_course 
                                      INNER JOIN pwcnm_second_locations as l on l.id = i.fk_location 
                                      WHERE i.studentId = ? and i.fk_process= ? and i.studentId= ?', [$request->carne, $max, $request->carne]);


        return view('externalRequest.studentRequest', compact('answer')) ;
    }
}
