<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class reportsController extends Controller
{
    //

    public function pdf(){
        $pdf = PDF::loadView('');
    }
}
