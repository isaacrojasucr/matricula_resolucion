<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //

    public function index (Request $request, $locale){
        App()->setlocale($locale);

        return view('welcome');
    }
}
