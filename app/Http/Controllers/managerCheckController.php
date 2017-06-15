<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managerCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('inscription.manager.managerCheck');
    }
}
