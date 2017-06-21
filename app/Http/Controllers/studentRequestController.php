<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentRequestController extends Controller
{
    public function index(Request $request)
    {

        return view('externalRequest.studentRequest');
    }
}
