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
        $answer = \DB::table('pwcnm_inscription_requests')
            ->where('studentId', '=', $request->carne)
            ->where('fk_process', '=', $max)
            ->get();

        foreach ($answer as $item) {
            $temp = pwcnm_approval::where('fk_inscription', '=', $item->id)->get();
            $temp = $temp[0]->stade;
            $item->state = $temp;

        }
        dd($answer);

        return view('externalRequest.studentRequest', compact('answer'));
    }
}
